<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Branch;
use App\Models\ClassModel;
use Illuminate\Http\Request;


class ClassesController extends Controller
{
    public function index(){
        $classes = ClassModel::with(['branches', 'user'])->latest()->get(); 
        //return response()->json($classes);
        return view('backend.pages.classes.index', compact('classes'));
    }

    public function create(){
        $branches = Branch::get();
        return view('backend.pages.classes.create', compact('branches'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'heading_name' => 'required|string|max:255',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,webp|max:6144',
            'description' => 'required|string',
            'branches' => 'required|array',
            'branches.*' => 'exists:branches,id',
        ]);

        DB::beginTransaction();
        try {
            $titleSlug = Str::slug($request->title);
            $imageFileName = $titleSlug . '-' . uniqid() . '.webp';
            $publicDirectory = public_path('upload/classes');
            $imagePath = $publicDirectory . '/' . $imageFileName;
            if (!file_exists($publicDirectory)) {
                mkdir($publicDirectory, 0755, true);
            }
            if ($request->hasFile('main_image')) {
                $image = $request->file('main_image');
                $img = Image::make($image)
                    ->resize(800, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                    ->encode('webp', 75);
                $img->save($imagePath);
            }

            $class = ClassModel::create([
                'title'         => $request->title,
                'heading_name'  => $request->heading_name,
                'main_image'    => $imageFileName,
                'description'   => $request->description,
                'status'        => $request->has('status') ? 1 : 0,
                'user_id'       => Auth::check() ? Auth::user()->id : null,
            ]);
            $class->branches()->attach($request->branches);
            DB::commit();

            return redirect()->route('manage-classes')->with('success', 'Class created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            if (isset($imagePath) && file_exists($imagePath)) {
                unlink($imagePath); 
            }
            return redirect()->back()->withInput()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function edit(Request $request, $id)
    {
        $branch_list = Branch::get();
        $classes_row = ClassModel::with(['branches'])->findOrFail($id); 
        return view('backend.pages.classes.edit', compact('classes_row', 'branch_list'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'heading_name' => 'required|string|max:255',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:6144',
            'description' => 'required|string',
            'branches' => 'required|array',
            'branches.*' => 'exists:branches,id',
        ]);
        DB::beginTransaction();
        try {
            $class = ClassModel::findOrFail($id);
            $imageFileName = $class->main_image; 
            if ($request->hasFile('main_image')) {
                $titleSlug = Str::slug($request->title);
                $imageFileName = $titleSlug . '-' . uniqid() . '.webp';
                $publicDirectory = public_path('upload/classes');
                $imagePath = $publicDirectory . '/' . $imageFileName;
                if (!file_exists($publicDirectory)) {
                    mkdir($publicDirectory, 0755, true);
                }
                $oldImagePath = $publicDirectory . '/' . $class->main_image;
                if ($class->main_image && file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
                $image = $request->file('main_image');
                $img = Image::make($image)
                    ->resize(800, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                    ->encode('webp', 75);
                $img->save($imagePath);
            }
            $class->update([
                'title'         => $request->title,
                'heading_name'  => $request->heading_name,
                'main_image'    => $imageFileName,
                'description'   => $request->description,
                'status'        => $request->has('status') ? 1 : 0,
            ]);
            $class->branches()->sync($request->branches);
            DB::commit();
            return redirect()->route('manage-classes')->with('success', 'Classes updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            if (isset($imagePath) && file_exists($imagePath)) {
                unlink($imagePath);
            }
            return redirect()->back()->withInput()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $class = ClassModel::findOrFail($id);
            $imagePath = public_path('upload/classes/' . $class->main_image);
            if ($class->main_image && file_exists($imagePath)) {
                unlink($imagePath);
            }
            $class->branches()->detach();
            $class->delete();
            return redirect()->route('manage-classes')->with('success', 'Classes deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error deleting class: ' . $e->getMessage());
        }
    }

    public function toggleStatus(Request $request, $id)
    {
        try {
            $classes = ClassModel::findOrFail($id);
            $classes->status = !$classes->status;
            $classes->save();

            return response()->json([
                'status' => true,
                'message' => 'Status updated successfully.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Something went wrong.',
            ], 500);
        }
    }


}
