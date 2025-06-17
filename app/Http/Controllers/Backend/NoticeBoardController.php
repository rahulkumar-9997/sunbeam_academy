<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\NoticeBoard;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
class NoticeBoardController extends Controller
{
    public function index(){
        $notice_board = NoticeBoard::with('user')->latest()->get();
        // return response()->json($notice_board);
        return view('backend.pages.notice-board.index', compact('notice_board'));
    }

    public function create(){
        return view('backend.pages.notice-board.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'notice_type' => 'required',
            'description' => 'required|string',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after_or_equal:start_date',
            'page_link' => 'nullable|url',
            'file' => 'nullable|file|mimes:jpeg,png,jpg,pdf,webp|max:5120', 
            'status' => 'nullable|boolean',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $data = $validator->validated();
            $fileName = null;

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $extension = $file->getClientOriginalExtension();
                $safeTitle = preg_replace('/[^A-Za-z0-9_\-]/', '_', $data['title']);
                $fileName = $safeTitle . '_' . uniqid() . '.' . $extension;
                $publicDirectory = public_path('upload/notice');
                if (!file_exists($publicDirectory)) {
                    mkdir($publicDirectory, 0755, true);
                }
                if (in_array(strtolower($extension), ['jpg', 'jpeg', 'png', 'webp'])) {
                    $image = Image::make($file)->resize(1200, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->encode($extension, 75);
                    $image->save($publicDirectory . '/' . $fileName);
                } else {
                    $file->move($publicDirectory, $fileName);
                }
            }
            NoticeBoard::create([
                'title' => $data['title'],
                'notice_type' => $data['notice_type'],
                'description' => $data['description'],
                'start_date' => $data['start_date'],
                'end_date' => $data['end_date'],
                'page_link' => $data['page_link'] ?? null,
                'file' => $fileName,
                'status' => $request->has('status') ? 1 : 0,
                'user_id' => Auth::check() ? Auth::user()->id : null,
            ]);

            return redirect()->route('manage-notice-board')->with('success', 'Notice added successfully.');

        } catch (\Exception $e) {
            Log::error('NoticeBoard Store Error: ' . $e->getMessage());
            return back()->with('error', $e->getMessage())->withInput();
        }
    }
    
    public function edit(Request $request, $id)
    {
        $notice_board_row = NoticeBoard::findOrFail($id);
        return view('backend.pages.notice-board.edit', compact('notice_board_row'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'notice_type' => 'required',
            'description' => 'required|string',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after_or_equal:start_date',
            'page_link' => 'nullable|url',
            'file' => 'nullable|file|mimes:jpeg,png,jpg,pdf,webp|max:5120',
            'status' => 'nullable|boolean',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            $data = $validator->validated();
            $notice = NoticeBoard::findOrFail($id);
            $fileName = $notice->file;
            if ($request->hasFile('file')) {
                if ($notice->file && file_exists(public_path('upload/notice/' . $notice->file))) {
                    unlink(public_path('upload/notice/' . $notice->file));
                }
                $file = $request->file('file');
                $extension = $file->getClientOriginalExtension();
                $safeTitle = preg_replace('/[^A-Za-z0-9_\-]/', '_', $data['title']);
                $fileName = $safeTitle . '_' . uniqid() . '.' . $extension;
                
                $publicDirectory = public_path('upload/notice');
                if (!file_exists($publicDirectory)) {
                    mkdir($publicDirectory, 0755, true);
                }                
                if (in_array(strtolower($extension), ['jpg', 'jpeg', 'png', 'webp'])) {
                    $image = Image::make($file)->resize(1200, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->encode($extension, 75);
                    $image->save($publicDirectory . '/' . $fileName);
                } else {
                    $file->move($publicDirectory, $fileName);
                }
            }
            $notice->update([
                'title' => $data['title'],
                'notice_type' => $data['notice_type'],
                'description' => $data['description'],
                'start_date' => $data['start_date'],
                'end_date' => $data['end_date'],
                'page_link' => $data['page_link'] ?? null,
                'file' => $fileName,
                'status' => $request->has('status') ? 1 : 0,
                'user_id' => Auth::check() ? Auth::id() : $notice->user_id,
            ]);

            return redirect()->route('manage-notice-board')->with('success', 'Notice updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }
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
