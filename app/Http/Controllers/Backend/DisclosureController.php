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
use App\Models\Disclosure;
use App\Models\DisclosureBranch;

class DisclosureController extends Controller
{
    public function index(){  
        $disclosureList = Disclosure::with('branches')->orderBy('id', 'desc')->get();      
        //return response()->json($disclosureList);
        return view('backend.pages.disclosure.index', compact('disclosureList'));
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
            <form method="POST" action="' . route('manage-disclosure.store') . '" accept-charset="UTF-8" enctype="multipart/form-data" id="disclosureAddForm">
                ' .csrf_field() . '
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="disclosure_title" class="form-label">Disclosure Title *</label>
                            <input type="text" id="disclosure_title" name="disclosure_title" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="disclosure_pdf_image" class="form-label">Disclosure Pdf/Image File *</label>
                            <input type="file" id="disclosure_pdf_image" name="disclosure_pdf_image" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="branches" class="form-label">Select Branches *</label>
                        <select class="form-control select2" multiple name="branches[]" id="branches" data-placeholder="Select Branches">
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
            'disclosure_title' => 'required|string|max:255',
            'branches' => 'required|array',
            'branches.*' => 'exists:branches,id',            
            'disclosure_pdf_image' => 'required|file|mimes:jpeg,png,jpg,gif,webp,pdf|max:6144',
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
            $destinationPath = public_path('upload/disclosure');
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }

            $file = $request->file('disclosure_pdf_image');
            $safeTitle = Str::slug($request->disclosure_title);
            $uniqueTimestamp = round(microtime(true) * 1000);
            $extension = $file->getClientOriginalExtension();
            $fileName = $safeTitle.'-'.$uniqueTimestamp.'.'.$extension;
            $filePath = $destinationPath.'/'.$fileName;

            if (in_array($extension, ['jpeg', 'png', 'jpg', 'gif', 'webp'])) {
                $image = Image::make($file);
                $image->encode('webp', 75);
                $image->save($filePath);
                $fileName = str_replace($extension, 'webp', $fileName);
            } else {
                $file->move($destinationPath, $fileName);
            }

            $disclosure = Disclosure::create([
                'title' => $request->disclosure_title,
                'file' => $fileName,
                'file_type' => $extension === 'pdf' ? 'pdf' : 'image',
                'status' => $request->has('status') ? 1 : 0
            ]);
            if (!empty($request->branches)) {
                foreach ($request->branches as $branch) {
                    DisclosureBranch::create([
                        'disclosure_id' => $disclosure->id,
                        'branch_id' => $branch, 
                    ]);
                }
            }
            DB::commit();            
            $disclosureList = Disclosure::with('branches')->orderBy('id', 'desc')->get();
            return response()->json([
                'status' => 'success',
                'message' => 'Disclosure created successfully!',
                'disclosureListData' => view('backend.pages.disclosure.partials.disclosure-list', compact('disclosureList'))->render()
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            if (isset($fileName) && File::exists($destinationPath.'/'.$fileName)) {
                File::delete($destinationPath.'/'.$fileName);
            }
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create disclosure: '.$e->getMessage()
            ], 500);
        }
    }

    public function edit(Request $request, $id){
        $disclosure = Disclosure::with('branches')->findOrFail($id);
        $branches = Branch::where('status', 1)->get();        
        $branchOptions = '';
        $selectedBranches = $disclosure->branches->pluck('id')->toArray();
        
        foreach ($branches as $branch) {
            $selected = in_array($branch->id, $selectedBranches) ? 'selected' : '';
            $branchOptions .= '<option value="' . $branch->id . '" ' . $selected . '>' . $branch->name . '</option>';
        }

        $form = '
        <div class="modal-body">
            <form method="POST" action="' . route('manage-disclosure.update', $disclosure->id) . '" accept-charset="UTF-8" enctype="multipart/form-data" id="disclosureEditForm">
                ' . csrf_field() . '
                ' . method_field('PUT') . '
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="disclosure_title" class="form-label">Disclosure Title *</label>
                            <input type="text" id="disclosure_title" name="disclosure_title" class="form-control" value="' . htmlspecialchars($disclosure->title) . '">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="disclosure_pdf_image" class="form-label">Disclosure Pdf/Image File</label>
                            <input type="file" id="disclosure_pdf_image" name="disclosure_pdf_image" class="form-control">
                            <small class="text-muted">Current file: ' . $disclosure->file . '</small>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="branches" class="form-label">Select Branches *</label>
                        <select class="form-control select2" multiple name="branches[]" id="branches" data-placeholder="Select Branches">
                            ' . $branchOptions . '
                        </select>
                        <div class="invalid-feedback d-block branches-error" style="display:none;"></div>
                    </div>
                                                        
                    <div class="mb-3 col-md-6 mt-4">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="status" name="status" value="1" ' . ($disclosure->status ? 'checked' : '') . '>
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
            'message' => 'Edit form created successfully',
            'form' => $form,
        ]);
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'disclosure_title' => 'required|string|max:255',
            'branches' => 'required|array',
            'branches.*' => 'exists:branches,id',            
            'disclosure_pdf_image' => 'sometimes|file|mimes:jpeg,png,jpg,gif,webp,pdf|max:6144',
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
            $disclosure = Disclosure::findOrFail($id);
            $destinationPath = public_path('upload/disclosure');            
            $updateData = [
                'title' => $request->disclosure_title,
                'status' => $request->has('status') ? 1 : 0
            ];
            if ($request->hasFile('disclosure_pdf_image')) {
                if ($disclosure->file && File::exists($destinationPath.'/'.$disclosure->file)) {
                    File::delete($destinationPath.'/'.$disclosure->file);
                }
                $file = $request->file('disclosure_pdf_image');
                $safeTitle = Str::slug($request->disclosure_title);
                $uniqueTimestamp = round(microtime(true) * 1000);
                $extension = $file->getClientOriginalExtension();
                $fileName = $safeTitle.'-'.$uniqueTimestamp.'.'.$extension;
                $filePath = $destinationPath.'/'.$fileName;
                if (in_array($extension, ['jpeg', 'png', 'jpg', 'gif', 'webp'])) {
                    $image = Image::make($file);
                    $image->encode('webp', 75);
                    $image->save($filePath);
                    $fileName = str_replace($extension, 'webp', $fileName);
                    $updateData['file_type'] = 'image';
                } else {
                    $file->move($destinationPath, $fileName);
                    $updateData['file_type'] = 'pdf';
                }
                $updateData['file'] = $fileName;
            }
            $disclosure->update($updateData);
            /* Sync disclosure branches method */
            DisclosureBranch::where('disclosure_id', $disclosure->id)->delete();
            if (!empty($request->branches)) {
                foreach ($request->branches as $branch) {
                    DisclosureBranch::create([
                        'disclosure_id' => $disclosure->id,
                        'branch_id' => $branch, 
                    ]);
                }
            }

            DB::commit();            
            $disclosureList = Disclosure::with('branches')->orderBy('id', 'desc')->get();
            return response()->json([
                'status' => 'success',
                'message' => 'Disclosure updated successfully!',
                'disclosureListData' => view('backend.pages.disclosure.partials.disclosure-list', compact('disclosureList'))->render()
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update disclosure: '.$e->getMessage()
            ], 500);
        }
    }

    public function destroy($id){
        DB::beginTransaction();
        try {
            $disclosure = Disclosure::findOrFail($id);
            $destinationPath = public_path('upload/disclosure');
            DisclosureBranch::where('disclosure_id', $id)->delete();
            if ($disclosure->file && File::exists($destinationPath.'/'.$disclosure->file)) {
                File::delete($destinationPath.'/'.$disclosure->file);
            }
            $disclosure->delete();            
            DB::commit();            
            $disclosureList = Disclosure::with('branches')->orderBy('id', 'desc')->get();
            return response()->json([
                'status' => 'success',
                'message' => 'Disclosure deleted successfully!',
                'disclosureListData' => view('backend.pages.disclosure.partials.disclosure-list', compact('disclosureList'))->render()
            ]);            
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete disclosure: '.$e->getMessage()
            ], 500);
        }
    }
}
