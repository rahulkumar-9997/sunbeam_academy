<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use App\Models\Branch;
use App\Models\Announcement;
use App\Models\AnnouncementBranch;

class AnnouncementController extends Controller
{
    public function index(){
        $announcementList = Announcement::with('branches')->get();
        return view('backend.pages.announcement.index', compact('announcementList'));
    }

    public function create(Request $request){
        $action = $request->input('action');
        $branches = Branch::where('status', 1)->get();
        $branchOptions = '';
        foreach ($branches as $branch) {
            $branchOptions .= '<option value="' . $branch->id . '">' . $branch->name . '</option>';
        }
        $form = '
        <div class="modal-body">
            <form method="POST" action="' . route('manage-announcement.store') . '" accept-charset="UTF-8" enctype="multipart/form-data" id="announcementAddForm">
                ' .csrf_field() . '
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="announcement_title" class="form-label">Announcement Title *</label>
                            <input type="text" id="announcement_title" name="announcement_title" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="announcement_image" class="form-label">Announcement Image *</label>
                            <input type="file" id="announcement_image" name="announcement_image" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="branches" class="form-label">Select Branches *</label>
                        <select class="form-control select2" multiple name="branches[]" id="branches" data-placeholder="Select Branches">
                            ' . $branchOptions . '
                        </select>
                        <div class="invalid-feedback d-block branches-error" style="display:none;"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="announcement_date_range" class="form-label">
                                Select Announcement Date Range *
                            </label>
                            <input type="text" id="announcement_date_range" name="announcement_date_range" class="form-control" readonly>
                            <input type="hidden" id="start_date" name="start_date">
                            <input type="hidden" id="end_date" name="end_date">
                        </div>
                    </div>                                     
                    <div class="mb-3 col-md-6">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="status" name="status" value="1" checked="">
                            <label class="form-check-label" for="status">Status</label>
                        </div>
                    </div>                    
                    <div class="modal-footer pb-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        ';
        return response()->json([
            'message' => 'Form created successfully',
            'form' => $form,
        ]);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'announcement_title' => 'required|string|max:255',
            'branches' => 'required|array',
            'branches.*' => 'exists:branches,id',            
            'announcement_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:6144',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after_or_equal:start_date',
            'status' => 'sometimes|boolean'
        ], [
            'start_date.after_or_equal' => 'Start date must be today or in the future',
            'end_date.after_or_equal' => 'End date must be after start date'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        DB::beginTransaction();
        try {
            $destinationPath = public_path('upload/announcement');
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }
            $safeTitle = Str::slug($request->announcement_title);
            $imageFile = $request->file('announcement_image');
            $uniqueTimestamp = round(microtime(true) * 1000);
            $imageName = $safeTitle.'-'.$uniqueTimestamp.'.webp';            
            $image = Image::make($imageFile);
            $image->encode('webp', 75);
            $image->save($destinationPath.'/'.$imageName);
            $announcement = Announcement::create([
                'title' => $request->announcement_title,
                'image' => $imageName,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'status' => $request->has('status') ? 1 : 0
            ]);
            if (!empty($request->branches)) {
                foreach ($request->branches as $branch) {
                    AnnouncementBranch::create([
                        'announcement_id' => $announcement->id,
                        'branch_id' => $branch, 
                    ]);
                }
            }
            //$announcement->branches()->attach($request->branches);
            DB::commit();
            $announcementList = Announcement::with('branches')
                ->orderBy('id', 'desc')
                ->get();
            return response()->json([
                'status' => 'success',
                'action' => 'unselect',
                'message' => 'Announcement created successfully!',
                'announcementListData' => view('backend.pages.announcement.partials.announcement-list', 
                    compact('announcementList'))->render()
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            if (isset($imageName) && File::exists($destinationPath.'/'.$imageName)) {
                File::delete($destinationPath.'/'.$imageName);
            }
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create announcement: '.$e->getMessage()
            ], 500);
        }
    }

    public function edit(Request $request, $id){
        $branches = Branch::where('status', 1)->get();
        $announcement = Announcement::with('branches')->findOrFail($id);
        $selectedBranches = $announcement->branches->pluck('id')->toArray();        
        $branchOptions = '';
        foreach ($branches as $branch) {
            $selected = in_array($branch->id, $selectedBranches) ? 'selected' : '';
            $branchOptions .= '<option value="' . $branch->id . '" ' . $selected . '>' . $branch->name . '</option>';
        }
        $dateRange = $announcement->start_date . ' - ' . $announcement->end_date;        
        $form = '
        <div class="modal-body">
            <form method="POST" action="' . route('manage-announcement.update', $announcement->id) . '" accept-charset="UTF-8" enctype="multipart/form-data" id="announcementEditForm">
                ' . csrf_field() . '
                ' . method_field('PUT') . '
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="announcement_title" class="form-label">Announcement Title *</label>
                            <input type="text" id="announcement_title" name="announcement_title" class="form-control" value="' . e($announcement->title) . '">
                            <div class="invalid-feedback" id="announcement_title_error"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="announcement_image" class="form-label">Announcement Image</label>
                            <input type="file" id="announcement_image" name="announcement_image" class="form-control">
                            ' . ($announcement->image ? '<div class="mt-2"><img src="' . asset('upload/announcement/' . $announcement->image) . '" width="100"></div>' : '') . '
                            <div class="invalid-feedback" id="announcement_image_error"></div>
                            <small class="text-muted">Leave blank to keep current image</small>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="branches" class="form-label">Select Branches *</label>
                        <select class="form-control select2" multiple name="branches[]" id="branches" data-placeholder="Select Branches">
                            ' . $branchOptions . '
                        </select>
                        <div class="invalid-feedback" id="branches_error"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="announcement_date_range" class="form-label">
                                Select Announcement Date Range *
                            </label>
                            <input type="text" id="announcement_date_range" name="announcement_date_range" class="form-control" readonly value="' . e($dateRange) . '">
                            <input type="hidden" id="start_date" name="start_date" value="' . e($announcement->start_date) . '">
                            <input type="hidden" id="end_date" name="end_date" value="' . e($announcement->end_date) . '">
                        </div>
                    </div>                                     
                    <div class="mb-3 col-md-6">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="status" name="status" value="1" ' . ($announcement->status ? 'checked' : '') . '>
                            <label class="form-check-label" for="status">Status</label>
                        </div>
                    </div>                    
                    <div class="modal-footer pb-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
        ';
        
        return response()->json([
            'message' => 'Form created successfully',
            'form' => $form,
        ]);
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'announcement_title' => 'required|string|max:255',
            'branches' => 'required|array',
            'branches.*' => 'exists:branches,id',
            'announcement_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:6144',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'status' => 'sometimes|boolean'
        ], [
            'start_date.after_or_equal' => 'Start date must be today or in the future',
            'end_date.after_or_equal' => 'End date must be after start date'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }
        DB::beginTransaction();
        try {
            $announcement = Announcement::findOrFail($id);
            $imageName = $announcement->image;
            if ($request->hasFile('announcement_image')) {
                $destinationPath = public_path('upload/announcement');
                if ($imageName && File::exists($destinationPath.'/'.$imageName)) {
                    File::delete($destinationPath.'/'.$imageName);
                }
                $safeTitle = Str::slug($request->announcement_title);
                $imageFile = $request->file('announcement_image');
                $uniqueTimestamp = round(microtime(true) * 1000);
                $imageName = $safeTitle.'-'.$uniqueTimestamp.'.webp';
                
                $image = Image::make($imageFile);
                $image->encode('webp', 75);
                $image->save($destinationPath.'/'.$imageName);
            }
            $announcement->update([
                'title' => $request->announcement_title,
                'slug' => Str::slug($request->announcement_title),
                'image' => $imageName,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'status' => $request->has('status') ? 1 : 0
            ]);

            /* Sync branches (removes old and adds new relationships) */
            $announcement->branches()->sync($request->branches);
            DB::commit();
            $announcementList = Announcement::with('branches')
                ->orderBy('id', 'desc')
                ->get();
            return response()->json([
                'status' => 'success',
                'message' => 'Announcement updated successfully!',
                'announcementListData' => view('backend.pages.announcement.partials.announcement-list', compact('announcementList'))->render()
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            if (isset($imageName) && isset($destinationPath) && File::exists($destinationPath.'/'.$imageName)) {
                File::delete($destinationPath.'/'.$imageName);
            }
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update announcement: '.$e->getMessage()
            ], 500);
        }
    }

    public function destroy($id){
        DB::beginTransaction();
        try {
            $announcement = Announcement::findOrFail($id);
            $imagePath = public_path('upload/announcement/'.$announcement->image);
            if ($announcement->image && File::exists($imagePath)) {
                File::delete($imagePath);
            }
            $announcement->delete();
            $announcement->branches()->detach();
            DB::commit();            
            $announcementList = Announcement::with('branches')
                ->orderBy('id', 'desc')
                ->get();
            return response()->json([
                'status' => 'success',
                'message' => 'Announcement deleted successfully!',
                'announcementListData' => view('backend.pages.announcement.partials.announcement-list', compact('announcementList'))->render()
            ]);
            
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete announcement: '.$e->getMessage()
            ], 500);
        }
    }

}
