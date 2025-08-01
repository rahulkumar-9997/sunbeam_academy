<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Branch;
use App\Models\Blog;
use App\Models\BlogBranch;
use App\Models\BlogParagraph;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::withCount('paragraphs')
                ->with(['branchNames'])
                ->latest()
                ->get();
        return view('backend.pages.blog.index', compact('blogs'));
    }

    public function create(){
        $branches = Branch::get();
        return view('backend.pages.blog.create', compact('branches'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $validator = Validator::make($request->all(), [
                'title' => 'required|string|max:255',
                'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:6144',
                'branches' => 'required|array|min:1',
                'branches.*' => 'exists:branches,id',
                'description' => 'required|string',
                'status' => 'boolean',
                'paragraphs_title' => 'nullable|array|min:1',
                'paragraphs_title.*' => 'nullable|string|max:255',
                'paragraphs_image_file.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:6144',
                'paragraphs_description.*' => 'nullable|string',
            ], [
                'branches.required' => 'Please select at least one branch',
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput()
                    ->with('validation_error', true); 
            }
            $mainImageName = null;
            $titleSlug = Str::slug($request->title);
            if ($request->hasFile('main_image')) {
                $mainImageName = $this->processAndStoreImage(
                    $request->file('main_image'),
                    'blogs',
                    $titleSlug
                );
            }
            $blog = Blog::create([
                'title' => $request->title,
                'slug' => $titleSlug,
                'main_image' => $mainImageName,
                'user_id' => Auth::check() ? Auth::user()->id : null,
                'description' => $request->description,
                'status' => $request->status ?? 1,
            ]);
            foreach ($request->branches as $branchId) {
                BlogBranch::create([
                    'blog_id' => $blog->id,
                    'branches_id' => $branchId,
                ]);
            }
            if (!empty($request->paragraphs_title[0])) {
                foreach ($request->paragraphs_title as $index => $title) {
                    $paragraphImageName = null;                    
                    if (isset($request->paragraphs_image_file[$index])) {
                        $paragraphImageName = $this->processAndStoreImage(
                            $request->file('paragraphs_image_file')[$index],
                            'blogs/paragraphs',
                            $titleSlug . '-paragraph-' . $index
                        );
                    }

                    BlogParagraph::create([
                        'blog_id' => $blog->id,
                        'paragraph_title' => $title,
                        'paragraph_image' => $paragraphImageName,
                        'paragraph_description' => $request->paragraphs_description[$index],
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('manage-blog.index')->with('success', 'Blog created successfully!');

        } catch (\Exception $e) {
            DB::rollBack();
            if ($e instanceof \Illuminate\Validation\ValidationException) {
                return redirect()->back()->withErrors($e->validator)->withInput();
            }
            if (isset($mainImageName)) {
                @unlink(public_path('upload/blogs/' . $mainImageName));
            }
            return redirect()->back()->withInput()
                ->with('error', 'Error: ' . $e->getMessage());
        }
    }

    protected function processAndStoreImage($imageFile, $subDirectory, $baseName)
    {
        $publicDirectory = public_path('upload/' . $subDirectory);
        if (!file_exists($publicDirectory)) {
            mkdir($publicDirectory, 0755, true);
        }

        $imageName = $baseName . '-' . uniqid() . '.webp';
        $imagePath = $publicDirectory . '/' . $imageName;

        $img = Image::make($imageFile)
            ->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })
            ->encode('webp', 75);
        $img->save($imagePath);

        return $imageName;
    }

    public function edit(Request $request, $id)
    {
        $blog = Blog::with(['branches', 'paragraphs'])->findOrFail($id);
        $branches = Branch::all();
        /*Get selected branch id */
        $selectedBranches = $blog->branches->pluck('branches_id')->toArray();    
        return view('backend.pages.blog.edit', compact('branches', 'blog', 'selectedBranches'));
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $validator = Validator::make($request->all(), [
                'title' => 'required|string|max:255',
                'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:6144',
                'branches' => 'required|array|min:1',
                'branches.*' => 'exists:branches,id',
                'description' => 'required|string',
                'status' => 'boolean',
                'paragraphs_title' => 'nullable|array|min:1',
                'paragraphs_title.*' => 'nullable|string|max:255',
                'paragraphs_image_file.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:6144',
                'paragraphs_description.*' => 'nullable|string',
            ], [
                'branches.required' => 'Please select at least one branch',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput()->with('validation_error', true);
            }

            $blog = Blog::findOrFail($id);
            $titleSlug = Str::slug($request->title);
            $mainImageName = $blog->main_image;
            if ($request->hasFile('main_image')) {
                if ($blog->main_image) {
                    unlink(public_path('upload/blogs/' . $blog->main_image));
                }                
                $mainImageName = $this->processAndStoreImage(
                    $request->file('main_image'),
                    'blogs',
                    $titleSlug
                );
            }

            // Update blog
            $blog->update([
                'title' => $request->title,
                'main_image' => $mainImageName,
                'description' => $request->description,
                'status' => $request->status ?? 1,
            ]);

            BlogBranch::where('blog_id', $blog->id)->delete();
            foreach ($request->branches as $branchId) {
                BlogBranch::create([
                    'blog_id' => $blog->id,
                    'branches_id' => $branchId,
                ]);
            }

            $existingParagraphs = $blog->paragraphs->keyBy('id');
            $submittedParagraphIds = [];
            if (!empty($request->paragraphs_title)) {
                foreach ($request->paragraphs_title as $index => $title) {
                    $paragraphId = $request->paragraphs_id[$index] ?? null;
                    $paragraphImageName = null;
                    if ($paragraphId && $existingParagraphs->has($paragraphId)) {
                        $paragraph = $existingParagraphs[$paragraphId];
                        if (isset($request->paragraphs_image_file[$index])) {
                            if ($paragraph->paragraph_image) {
                                unlink(public_path('upload/blogs/paragraphs/' . $paragraph->paragraph_image));
                            }                            
                            $paragraphImageName = $this->processAndStoreImage(
                                $request->file('paragraphs_image_file')[$index],
                                'blogs/paragraphs',
                                $titleSlug . '-paragraph-' . $index
                            );
                        } else {
                            $paragraphImageName = $paragraph->paragraph_image;
                        }

                        $paragraph->update([
                            'paragraph_title' => $title,
                            'paragraph_image' => $paragraphImageName,
                            'paragraph_description' => $request->paragraphs_description[$index],
                        ]);

                        $submittedParagraphIds[] = $paragraphId;
                    } 
                    else 
                    {
                        if (isset($request->paragraphs_image_file[$index])) {
                            $paragraphImageName = $this->processAndStoreImage(
                                $request->file('paragraphs_image_file')[$index],
                                'blogs/paragraphs',
                                $titleSlug . '-paragraph-' . $index
                            );
                        }

                        $newParagraph = BlogParagraph::create([
                            'blog_id' => $blog->id,
                            'paragraph_title' => $title,
                            'paragraph_image' => $paragraphImageName,
                            'paragraph_description' => $request->paragraphs_description[$index],
                        ]);
                        $submittedParagraphIds[] = $newParagraph->id;
                    }
                }
            }

            $paragraphsToDelete = $existingParagraphs->except($submittedParagraphIds);
            foreach ($paragraphsToDelete as $paragraph) {
                if ($paragraph->paragraph_image) {
                    unlink(public_path('upload/blogs/paragraphs/' . $paragraph->paragraph_image));
                }
                $paragraph->delete();
            }
            DB::commit();
            return redirect()->route('manage-blog.index')->with('success', 'Blog updated successfully!');

        } catch (\Exception $e) {
            DB::rollBack();
            if ($e instanceof \Illuminate\Validation\ValidationException) {
                return redirect()->back()->withErrors($e->validator)->withInput();
            }
            return redirect()->back()->withInput()
                ->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $blog = Blog::with(['branches', 'paragraphs'])->findOrFail($id);
            if ($blog->main_image) {
                $mainImagePath = public_path('upload/blogs/' . $blog->main_image);
                if (file_exists($mainImagePath)) {
                    unlink($mainImagePath);
                }
            }
            foreach ($blog->paragraphs as $paragraph) {
                if ($paragraph->paragraph_image) {
                    $paragraphImagePath = public_path('upload/blogs/paragraphs/' . $paragraph->paragraph_image);
                    if (file_exists($paragraphImagePath)) {
                        unlink($paragraphImagePath);
                    }
                }
            }
            BlogBranch::where('blog_id', $blog->id)->delete();
            BlogParagraph::where('blog_id', $blog->id)->delete();
            $blog->delete();
            DB::commit();            
            return redirect()->route('manage-blog.index')->with('success', 'Blog deleted successfully!');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

}
