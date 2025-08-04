<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Branch;

class AchieversController extends Controller
{
    public function index(){ 
        //return response()->json($alumniList);
        return view('backend.pages.achievers.index');
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
                            <label for="achievers_name" class="form-label">Achievers Name *</label>
                            <input type="text" id="achievers_name" name="achievers_name" class="form-control">
                        </div>
                    </div>                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="profile_pic" class="form-label">Profile Pic *</label>
                            <input type="file" id="profile_pic" name="profile_pic" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="branch" class="form-label">Select Branch *</label>
                        <select class="form-select" name="branch" id="branch" >
                            <option value=""> Select a Branch</option>
                            ' . $branchOptions . '
                        </select>
                        <div class="invalid-feedback d-block branches-error" style="display:none;"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="achievers_class" class="form-label">Achievers Class</label>
                            <input type="text" id="achievers_class" name="achievers_class" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="short_content" class="form-label">Short Content </label>
                            <textarea class="form-control" id="short_content" rows="2" name="short_content"></textarea>
                            <div class="invalid-feedback" id="short_content_error"></div>
                        </div>
                    </div>  
                    <div class="mb-3 col-md-6 mt-4">
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
}
