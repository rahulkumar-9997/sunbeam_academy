<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\NoticeBoard;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\Branch;
use App\Models\NoticeBoardBranch;
use App\Models\NoticeBoardImages;

class NoticeBoardController extends Controller
{
    public function index(){
        $notice_board = NoticeBoard::with('user', 'branches')->latest()->get();
        //return response()->json($notice_board);
        return view('backend.pages.notice-board.index', compact('notice_board'));
    }

    public function create(){
        $branches = Branch::where('status', 1)->get();
        return view('backend.pages.notice-board.create', compact('branches'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'page_heading' => 'nullable|string|max:255',
            'branches' => 'required|array|min:1',
            'branches.*' => 'exists:branches,id',
            'notice_type' => 'required',
            'description' => 'required|string',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after_or_equal:start_date',
            'page_link' => 'nullable|url',
            'pdf_file' => 'nullable|file|mimes:pdf|max:6144', 
            'image_file' => 'nullable|array|max:20',
            'image_file.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:6144',
            'status' => 'nullable|boolean',
        ],[
            'branches.required' => 'Please select at least one branch',
            'image_file.max' => 'You can upload maximum 20 images',
            'image_file.*.image' => 'Each file must be an image',
            'image_file.*.mimes' => 'Allowed image formats: jpeg, png, jpg, gif, webp',
            'image_file.*.max' => 'Each image must be less than 6MB',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            $data = $validator->validated();
            $fileName = null;
            $publicDirectory = public_path('upload/notice');
            if ($request->hasFile('pdf_file')) {
                $file = $request->file('pdf_file');
                $extension = $file->getClientOriginalExtension();
                $safeTitle = preg_replace('/[^A-Za-z0-9_\-]/', 'pdf-file-', $data['title']);
                $fileName = $safeTitle . '_' . uniqid() . '.' . $extension;                
                $file->move($publicDirectory, $fileName);
            }
            $noticeBoard = NoticeBoard::create([
                'title' => $data['title'],
                'page_heading' => $data['page_heading'],
                'notice_type' => $data['notice_type'],
                'description' => $data['description'],
                'start_date' => $data['start_date'],
                'end_date' => $data['end_date'],
                'page_link' => $data['page_link'] ?? null,
                'file' => $fileName,
                'status' => $request->has('status') ? 1 : 0,
                'user_id' => Auth::check() ? Auth::user()->id : null,
            ]);
            foreach ($request->branches as $branchId) {
                NoticeBoardBranch::create([
                    'notice_board_id' => $noticeBoard->id,
                    'branch_id' => $branchId,
                ]);
            }

            if ($request->hasFile('image_file')) {
                foreach ($request->file('image_file') as $index => $image) {
                    $titleSlug = Str::slug($data['title']);
                    $additionalImageName =  $titleSlug. '-' . uniqid() . '.webp';
                    $additionalImagePath = $publicDirectory . '/' . $additionalImageName;
                    $this->processAndSaveImage($image, $additionalImagePath);
                    NoticeBoardImages::create([
                        'notice_board_id' => $noticeBoard->id,
                        'title' => $data['title'],
                        'order' => $index,
                        'file' => $additionalImageName,
                    ]);
                }
            }

            return redirect()->route('manage-notice-board')->with('success', 'Notice added successfully.');

        } catch (\Exception $e) {
            Log::error('NoticeBoard Store Error: ' . $e->getMessage());
            return back()->with('error', $e->getMessage())->withInput();
        }
    }
    
    public function edit(Request $request, $id)
    {
        $branches = Branch::where('status', 1)->get();
        $notice_board_row = NoticeBoard::with(['branches', 'noticeImages'])->findOrFail($id);
        $selectedBranches = $notice_board_row->branches->pluck('id')->toArray();   
        //return response()->json($notice_board_row);
        return view('backend.pages.notice-board.edit', compact('notice_board_row', 'branches', 'selectedBranches'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'page_heading' => 'nullable|string|max:255',
            'branches' => 'required|array|min:1',
            'branches.*' => 'exists:branches,id',
            'notice_type' => 'required',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'page_link' => 'nullable|url',
            'pdf_file' => 'nullable|file|mimes:pdf|max:6144', 
            'image_file' => 'nullable|array|max:20',
            'image_file.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:6144',
            'status' => 'nullable|boolean',
        ],[
            'branches.required' => 'Please select at least one branch',
            'image_file.max' => 'You can upload maximum 20 images',
            'image_file.*.image' => 'Each file must be an image',
            'image_file.*.mimes' => 'Allowed image formats: jpeg, png, jpg, gif, webp',
            'image_file.*.max' => 'Each image must be less than 6MB',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            DB::beginTransaction();            
            $data = $validator->validated();
            // $noticeBoard = NoticeBoard::with(['branches', 'noticeImages'])->findOrFail($id);
            $noticeBoard = NoticeBoard::findOrFail($id);
            $publicDirectory = public_path('upload/notice');
            $fileName = $noticeBoard->file;
            if ($request->has('remove_pdf_file') && $request->remove_pdf_file) {
                if ($fileName && file_exists($publicDirectory . '/' . $fileName)) {
                    unlink($publicDirectory . '/' . $fileName);
                }
                $fileName = null;
            } elseif ($request->hasFile('pdf_file')) {
                if ($fileName && file_exists($publicDirectory . '/' . $fileName)) {
                    unlink($publicDirectory . '/' . $fileName);
                }
                $file = $request->file('pdf_file');
                $extension = $file->getClientOriginalExtension();
                $safeTitle = preg_replace('/[^A-Za-z0-9_\-]/', 'pdf-file-', $data['title']);
                $fileName = $safeTitle . '_' . uniqid() . '.' . $extension;                
                $file->move($publicDirectory, $fileName);
            }
            $noticeBoard->update([
                'title' => $data['title'],
                'page_heading' => $data['page_heading'],
                'notice_type' => $data['notice_type'],
                'description' => $data['description'],
                'start_date' => $data['start_date'],
                'end_date' => $data['end_date'],
                'page_link' => $data['page_link'] ?? null,
                'file' => $fileName,
                'status' => $request->has('status') ? 1 : 0,
                'user_id' => Auth::id(),
            ]);
            $noticeBoard->branches()->sync($request->branches);
            if ($request->has('deleted_images')) {
                foreach ($request->deleted_images as $imageId) {
                    $image = NoticeBoardImages::find($imageId);
                    if ($image) {
                        if (file_exists($publicDirectory . '/' . $image->file)) {
                            unlink($publicDirectory . '/' . $image->file);
                        }
                        $image->delete();
                    }
                }
            }
            if ($request->hasFile('image_file')) {
                foreach ($request->file('image_file') as $index => $image) {
                    $titleSlug = Str::slug($data['title']);
                    $additionalImageName = $titleSlug . '-' . uniqid() . '.webp';
                    $additionalImagePath = $publicDirectory . '/' . $additionalImageName;
                    $this->processAndSaveImage($image, $additionalImagePath);
                    NoticeBoardImages::create([
                        'notice_board_id' => $noticeBoard->id,
                        'title' => $data['title'],
                        'order' => $noticeBoard->noticeImages()->count() + $index,
                        'file' => $additionalImageName,
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('manage-notice-board')->with('success', 'Notice updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('NoticeBoard Update Error: ' . $e->getMessage());
            return back()->with('error',  $e->getMessage())->withInput();
        }
    }

    private function processAndSaveImage($image, $savePath, $quality = 80)
    {
        $img = Image::make($image->getRealPath());
        $img->encode('webp', $quality)->save($savePath);
    }


    public function destroy($id)
    {
        try {
            $notice = NoticeBoard::findOrFail($id);
            if ($notice->file && file_exists(public_path('upload/notice/' . $notice->file))) {
                unlink(public_path('upload/notice/' . $notice->file));
            }
            $notice->delete();
            return redirect()->route('manage-notice-board')->with('success', 'Notice deleted successfully.');
        } catch (\Exception $e) {
            Log::error('NoticeBoard Delete Error: ' . $e->getMessage());
            return back()->with('error', 'Failed to delete notice.');
        }
    }

    public function toggleStatus(Request $request, $id)
    {
        try {
            $notice = NoticeBoard::findOrFail($id);
            $notice->status = !$notice->status;
            $notice->save();

            return response()->json([
                'status' => true,
                'message' => 'Status updated successfully.'
            ]);
        } catch (\Exception $e) {
            Log::error('Status Toggle Error: ' . $e->getMessage());
            return response()->json([
                'status' => false,
                'message' => 'Something went wrong.',
            ], 500);
        }
    }


}
