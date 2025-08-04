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
use App\Models\OurAlumni;

class OurAlumniController extends Controller
{
    public function index(){ 
        $alumniList = OurAlumni::with('branch')->orderBy('id', 'desc')->get();
        //return response()->json($alumniList);
        return view('backend.pages.alumni.index', compact('alumniList'));
    }

    public function create(Request $request){
        $branches = Branch::where('status', 1)->get();
        $branchOptions = '';
        foreach ($branches as $branch) {
            $branchOptions .= '<option value="' . $branch->id . '">' . $branch->name . '</option>';
        }
        $form = '
        <div class="modal-body">
            <form method="POST" action="' . route('manage-our-alumni.store') . '" accept-charset="UTF-8" enctype="multipart/form-data" id="alumniAddForm">
                ' .csrf_field() . '
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="alumni_name" class="form-label">Alumni Name *</label>
                            <input type="text" id="alumni_name" name="alumni_name" class="form-control">
                        </div>
                    </div>                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="profile_pic" class="form-label">Profile Pic </label>
                            <input type="file" id="profile_pic" name="profile_pic" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="branch" class="form-label">Select Branches *</label>
                        <select class="form-select" name="branch" id="branch" >
                            <option value=""> Select a Branch</option>
                            ' . $branchOptions . '
                        </select>
                        <div class="invalid-feedback d-block branches-error" style="display:none;"></div>
                    </div>
                    <div class="mb-3 col-md-6 mt-4">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="status" name="status" value="1" checked="">
                            <label class="form-check-label" for="status">Status</label>
                        </div>
                    </div>    
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="content" class="form-label">Content *</label>
                            <textarea class="form-control" id="content" rows="4" name="content"></textarea>
                            <div class="invalid-feedback" id="short_content_error"></div>
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
            'alumni_name' => 'required|string|max:255',
            'branch' => 'required|exists:branches,id',
            'content' => 'required|string',
            //'passing_year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'profile_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:6144',
            'status' => 'sometimes|boolean'
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
            $fileName = null;
            $destinationPath = public_path('upload/alumni');            
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }
            if ($request->hasFile('profile_pic')) {
                $file = $request->file('profile_pic');
                $safeTitle = Str::slug($request->alumni_name);
                $uniqueTimestamp = round(microtime(true) * 1000);
                $extension = 'webp'; 
                $fileName = $safeTitle.'-'.$uniqueTimestamp.'.'.$extension;
                $filePath = $destinationPath.'/'.$fileName;                
                $image = Image::make($file);
                $image->encode('webp', 75);
                $image->save($filePath);
            }
            $alumni = OurAlumni::create([
                'title' => $request->alumni_name,
                'branch_id' => $request->branch,
                'profile_pic' => $fileName,
                'content' => $request->content,
                'status' => $request->has('status') ? 1 : 0
            ]);
            DB::commit();    
            $alumniList = OurAlumni::with('branch')->orderBy('id', 'desc')->get();
            return response()->json([
                'status' => 'success',
                'message' => 'Testimonial created successfully!',
                'ourAlumniListData' => view('backend.pages.alumni.partials.alumni-list', compact('alumniList'))->render()
            ]);
            
        } catch (\Exception $e) {
            DB::rollBack();
            if (isset($fileName) && File::exists($destinationPath.'/'.$fileName)) {
                File::delete($destinationPath.'/'.$fileName);
            }
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create alumni: '.$e->getMessage()
            ], 500);
        }
    }

    public function edit(Request $request, $id){
        $alumni = OurAlumni::findOrFail($id);
        $branches = Branch::where('status', 1)->get();        
        $branchOptions = '';
        foreach ($branches as $branch) {
            $selected = $branch->id == $alumni->branch_id ? 'selected' : '';
            $branchOptions .= '<option value="' . $branch->id . '" ' . $selected . '>' . $branch->name . '</option>';
        }

        $form = '
        <div class="modal-body">
            <form method="POST" action="' . route('manage-our-alumni.update', $alumni->id) . '" accept-charset="UTF-8" enctype="multipart/form-data" id="alumniEditForm">
                ' . csrf_field() . '
                ' . method_field('PUT') . '
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="alumni_name" class="form-label">Alumni Name *</label>
                            <input type="text" id="alumni_name" name="alumni_name" class="form-control" value="' . $alumni->title. '">
                        </div>
                    </div>                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="profile_pic" class="form-label">Profile Pic</label>
                            <input type="file" id="profile_pic" name="profile_pic" class="form-control">
                            ' . ($alumni->profile_pic ? '
                            <div class="mt-2">
                                <img src="' . asset('upload/alumni/' . $alumni->profile_pic) . '" width="100" class="img-thumbnail">
                                <input type="hidden" name="existing_image" value="' . $alumni->profile_pic . '">
                            </div>' : '') . '
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="branch" class="form-label">Select Branch *</label>
                        <select class="form-select " name="branch" id="branch">
                            <option value="">Select a Branch</option>
                            ' . $branchOptions . '
                        </select>
                    </div>
                    <div class="mb-3 col-md-6 mt-4">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="status" name="status" value="1" ' . ($alumni->status ? 'checked' : '') . '>
                            <label class="form-check-label" for="status">Status</label>
                        </div>
                    </div>    
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="content" class="form-label">Content *</label>
                            <textarea class="form-control" id="content" rows="4" name="content">' .$alumni->content. '</textarea>
                        </div>
                    </div>
                    
                    <div class="modal-footer pb-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>';

        return response()->json([
            'message' => 'Form created successfully',
            'form' => $form,
        ]);
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'alumni_name' => 'required|string|max:255',
            'branch' => 'required|exists:branches,id',
            'content' => 'required|string',
            'profile_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:6144',
            'status' => 'sometimes|boolean'
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
            $alumni = OurAlumni::findOrFail($id);
            $fileName = $request->existing_image ?? null;
            $destinationPath = public_path('upload/alumni');            
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }
            if ($request->hasFile('profile_pic')) {
                if ($fileName && File::exists($destinationPath.'/'.$fileName)) {
                    File::delete($destinationPath.'/'.$fileName);
                }
                $file = $request->file('profile_pic');
                $safeTitle = Str::slug($request->alumni_name);
                $uniqueTimestamp = round(microtime(true) * 1000);
                $extension = 'webp'; 
                $fileName = $safeTitle.'-'.$uniqueTimestamp.'.'.$extension;
                $filePath = $destinationPath.'/'.$fileName;
                
                $image = Image::make($file);
                $image->encode('webp', 75);
                $image->save($filePath);
            }
            $alumni->update([
                'title' => $request->alumni_name,
                'branch_id' => $request->branch,
                'profile_pic' => $fileName,
                'content' => $request->content,
                'status' => $request->has('status') ? 1 : 0
            ]);
            DB::commit();            
            $alumniList = OurAlumni::with('branch')->orderBy('id', 'desc')->get();
            return response()->json([
                'status' => 'success',
                'message' => 'Alumni updated successfully!',
                'ourAlumniListData' => view('backend.pages.alumni.partials.alumni-list', compact('alumniList'))->render()
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update alumni: '.$e->getMessage()
            ], 500);
        }
    }

    public function destroy($id){
        DB::beginTransaction();
        try {
            $alumni = OurAlumni::findOrFail($id);
            $destinationPath = public_path('upload/alumni');   
            if ($alumni->profile_pic && File::exists($destinationPath.'/'.$alumni->profile_pic)) {
                File::delete($destinationPath.'/'.$alumni->profile_pic);
            }
            $alumni->delete();            
            DB::commit();
            $alumniList = OurAlumni::with('branch')->orderBy('id', 'desc')->get();            
            return response()->json([
                'status' => 'success',
                'message' => 'Alumni deleted successfully!',
                'ourAlumniListData' => view('backend.pages.alumni.partials.alumni-list', compact('alumniList'))->render()
            ]);
            
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete alumni: '.$e->getMessage()
            ], 500);
        }
    }
}
