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
use App\Models\Achievers;

class AchieversController extends Controller
{
    public function index(){ 
        $achieversList = Achievers::with('branch')->orderBy('id', 'desc')->get();
        return view('backend.pages.achievers.index', compact('achieversList'));
    }

    public function create(Request $request){
        $branches = Branch::where('status', 1)->get();
        $branchOptions = '';
        foreach ($branches as $branch) {
            $branchOptions .= '<option value="' . $branch->id . '">' . $branch->name . '</option>';
        }
        $form = '
        <div class="modal-body">
            <form method="POST" action="' . route('manage-achievers.store') . '" accept-charset="UTF-8" enctype="multipart/form-data" id="achieversAddForm">
                ' .csrf_field() . '
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="achievers_name" class="form-label">Achievers Name *</label>
                            <input type="text" id="achievers_name" name="achievers_name" class="form-control">
                        </div>
                    </div>                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="profile_pic" class="form-label">Profile Pic *</label>
                            <input type="file" id="profile_pic" name="profile_pic" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="branch" class="form-label">Select Branch *</label>
                        <select class="form-select" name="branch" id="branch" >
                            <option value=""> Select a Branch</option>
                            ' . $branchOptions . '
                        </select>
                        <div class="invalid-feedback d-block branches-error" style="display:none;"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="achievers_class" class="form-label">Achievers Class</label>
                            <input type="text" id="achievers_class" name="achievers_class" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="short_content" class="form-label">Short Content *</label>
                            <textarea class="form-control" id="short_content" rows="2" name="short_content"></textarea>
                            <div class="invalid-feedback" id="short_content_error"></div>
                        </div>
                    </div>  
                    <div class="mb-3 col-md-2 mt-4">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="status" name="status" value="1" checked="">
                            <label class="form-check-label" for="status">Status</label>
                        </div>
                    </div>    
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="achievers_content" class="form-label">Content</label>
                            <textarea name="achievers_content" class="editor_class_multiple"></textarea>
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
            'achievers_name' => 'required|string|max:255',
            'achievers_class' => 'nullable|string|max:255',
            'short_content' => 'required|string',
            'branch' => 'required|exists:branches,id',
            'achievers_content' => 'nullable|string',
            'profile_pic' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:6144',
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
            $destinationPath = public_path('upload/achievers');            
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }
            if ($request->hasFile('profile_pic')) {
                $file = $request->file('profile_pic');
                $safeTitle = Str::slug($request->achievers_name);
                $uniqueTimestamp = round(microtime(true) * 1000);
                $extension = 'webp'; 
                $fileName = $safeTitle.'-'.$uniqueTimestamp.'.'.$extension;
                $filePath = $destinationPath.'/'.$fileName;                
                $image = Image::make($file);
                $image->encode('webp', 75);
                $image->save($filePath);
            }
            $achiever = Achievers::create([
                'branch_id' => $request->branch,
                'title' => $request->achievers_name,                
                'profile_pic' => $fileName,
                'short_content' => $request->short_content,
                'long_content' => $request->achievers_content,
                'class' => $request->achievers_class,
                'status' => $request->has('status') ? 1 : 0
            ]);
            DB::commit();    
            $achieversList = Achievers::with('branch')->orderBy('id', 'desc')->get();
            return response()->json([
                'status' => 'success',
                'message' => 'Achievers created successfully!',
                'ourAchieversListData' => view('backend.pages.achievers.partials.achievers-list', compact('achieversList'))->render()
            ]);
            
        } catch (\Exception $e) {
            DB::rollBack();
            if (isset($fileName) && File::exists($destinationPath.'/'.$fileName)) {
                File::delete($destinationPath.'/'.$fileName);
            }
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create achievers: '.$e->getMessage()
            ], 500);
        }
    }

    public function edit(Request $request, $id){
        $achiever = Achievers::with('branch')->findOrFail($id);
        $branches = Branch::where('status', 1)->get();        
        $branchOptions = '';
        foreach ($branches as $branch) {
            $selected = $branch->id == $achiever->branch_id ? 'selected' : '';
            $branchOptions .= '<option value="' . $branch->id . '" ' . $selected . '>' . $branch->name . '</option>';
        }

        $form = '
        <div class="modal-body">
            <form method="POST" action="' . route('manage-achievers.update', $achiever->id) . '" accept-charset="UTF-8" enctype="multipart/form-data" id="achieversEditForm">
                ' . csrf_field() . '
                ' . method_field('PUT') . '
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="achievers_name" class="form-label">Achievers Name *</label>
                            <input type="text" id="achievers_name" name="achievers_name" class="form-control" value="' . htmlspecialchars($achiever->title) . '">
                        </div>
                    </div>                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="profile_pic" class="form-label">Profile Pic</label>
                            <input type="file" id="profile_pic" name="profile_pic" class="form-control">
                            <div class="mt-2">
                                ' . ($achiever->profile_pic ? '<img src="' . asset('upload/achievers/' . $achiever->profile_pic) . '" width="100" class="img-thumbnail">' : 'No image') . '
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="branch" class="form-label">Select Branch *</label>
                        <select class="form-select" name="branch" id="branch">
                            <option value="">Select a Branch</option>
                            ' . $branchOptions . '
                        </select>
                        <div class="invalid-feedback d-block branches-error" style="display:none;"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="achievers_class" class="form-label">Achievers Class</label>
                            <input type="text" id="achievers_class" name="achievers_class" class="form-control" value="' . htmlspecialchars($achiever->class) . '">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="short_content" class="form-label">Short Content *</label>
                            <textarea class="form-control" id="short_content" rows="2" name="short_content">' . htmlspecialchars($achiever->short_content) . '</textarea>
                            <div class="invalid-feedback" id="short_content_error"></div>
                        </div>
                    </div>  
                    <div class="mb-3 col-md-2 mt-4">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="status" name="status" value="1" ' . ($achiever->status ? 'checked' : '') . '>
                            <label class="form-check-label" for="status">Status</label>
                        </div>
                    </div>    
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="achievers_content" class="form-label">Content</label>
                            <textarea name="achievers_content" class="editor_class_multiple">' . htmlspecialchars($achiever->long_content) . '</textarea>
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
            'message' => 'Form loaded successfully',
            'form' => $form,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'achievers_name' => 'required|string|max:255',
            'achievers_class' => 'nullable|string|max:255',
            'short_content' => 'required|string',
            'branch' => 'required|exists:branches,id',
            'achievers_content' => 'nullable|string',
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
            $achiever = Achievers::findOrFail($id);
            $fileName = $achiever->profile_pic;
            $destinationPath = public_path('upload/achievers');            
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }
            if ($request->hasFile('profile_pic')) {
                if ($fileName && File::exists($destinationPath.'/'.$fileName)) {
                    File::delete($destinationPath.'/'.$fileName);
                }
                $file = $request->file('profile_pic');
                $safeTitle = Str::slug($request->achievers_name);
                $uniqueTimestamp = round(microtime(true) * 1000);
                $extension = 'webp'; 
                $fileName = $safeTitle.'-'.$uniqueTimestamp.'.'.$extension;
                $filePath = $destinationPath.'/'.$fileName;                
                $image = Image::make($file);
                $image->encode('webp', 75);
                $image->save($filePath);
            }
            $achiever->update([
                'branch_id' => $request->branch,
                'title' => $request->achievers_name,                
                'profile_pic' => $fileName,
                'short_content' => $request->short_content,
                'long_content' => $request->achievers_content,
                'class' => $request->achievers_class,
                'status' => $request->has('status') ? 1 : 0
            ]);
            DB::commit();    
            $achieversList = Achievers::with('branch')->orderBy('id', 'desc')->get();
            return response()->json([
                'status' => 'success',
                'message' => 'Achiever updated successfully!',
                'ourAchieversListData' => view('backend.pages.achievers.partials.achievers-list', compact('achieversList'))->render()
            ]);
            
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update achiever: '.$e->getMessage()
            ], 500);
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $achiever = Achievers::findOrFail($id);
            $destinationPath = public_path('upload/achievers');
            if ($achiever->profile_pic && File::exists($destinationPath.'/'.$achiever->profile_pic)) {
                File::delete($destinationPath.'/'.$achiever->profile_pic);
            }
            $achiever->delete();            
            DB::commit();            
            $achieversList = Achievers::with('branch')->orderBy('id', 'desc')->get();
            return response()->json([
                'status' => 'success',
                'message' => 'Achiever deleted successfully!',
                'ourAchieversListData' => view('backend.pages.achievers.partials.achievers-list', compact('achieversList'))->render()
            ]);
            
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Achiever deletion failed: '.$e->getMessage(), [
                'exception' => $e,
                'achiever_id' => $id
            ]);            
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete achiever: '.$e->getMessage()
            ], 500);
        }
    }
}
