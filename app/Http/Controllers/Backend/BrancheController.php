<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Branch;
use Illuminate\Support\Facades\Auth;
class BrancheController extends Controller
{
    public function index(){
        $branches = Branch::with('user')->latest()->get();
        return view('backend.pages.branches.index', compact('branches'));
    }

    public function create(Request $request){
        $form ='
        <div class="modal-body">
            <form method="POST" action="'.route('branches.store').'" accept-charset="UTF-8" enctype="multipart/form-data" id="branchForm">
                '.csrf_field().'
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name *</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="phone_no" class="form-label">Phone No. *</label>
                            <input type="text" id="phone_no" name="phone_no" class="form-control">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email_id" class="form-label">Email Id *</label>
                             <input class="form-control" type="text"  id="email_id" name="email_id">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" rows="2" name="address"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description *</label>
                            <textarea class="form-control" id="description" rows="2" name="description"></textarea>
                        </div>
                    </div>
                    
                    <div class="mb-3 col-md-6">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="status" name="status" value="1" checked>
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

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone_no' => 'required|string|max:10',
            'email_id' => 'required|email|max:255',
            'description' => 'required|string', 
            'status' => 'nullable|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(),
            ], 422);
        }
        $validated = $validator->validated();
        $data = [
            'name' => $validated['name'],
            'phone_1' => $validated['phone_no'],
            'email_1' => $validated['email_id'],
            'address' => $validated['address'] ?? null,
            'description' => $validated['description'] ?? null,
            'user_id' => Auth::check() ? Auth::user()->id : null,
            'status' => $validated['status'] ?1 : 0,
        ];
        
        $branch = Branch::create($data);
        return response()->json([
            'status' => 'success',
            'message' => 'Branch created successfully.',
        ]);
    }

    public function edit(Request $request, $id){
        $branch_row = Branch::findOrFail($id);
        $form ='
        <div class="modal-body">
            <form method="POST" action="' . route('branches.update', ['id' => $branch_row->id]) . '" accept-charset="UTF-8" enctype="multipart/form-data" id="branchUpdateForm">
                ' . csrf_field() . method_field('PUT') . '
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name *</label>
                            <input type="text" id="name" name="name" class="form-control" value="'.$branch_row->name.'">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="phone_no" class="form-label">Phone No. *</label>
                            <input type="text" id="phone_no" name="phone_no" class="form-control" value="'.$branch_row->phone_1.'">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email_id" class="form-label">Email Id *</label>
                             <input class="form-control" type="text"  id="email_id" name="email_id" value="'.$branch_row->email_1.'">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" rows="2" name="address">
                                '.trim($branch_row->address).'
                            </textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description *</label>
                            <textarea class="form-control" id="description" rows="2" name="description">
                            '.trim($branch_row->description).'
                            </textarea>
                        </div>
                    </div>
                    
                    <div class="mb-3 col-md-6">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="status" name="status" value="1" ' . ($branch_row->status ? 'checked' : '') . '>
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

    public function update(Request $request, $id)
    {
        $branch = Branch::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone_no' => 'required|string|max:10',
            'email_id' => 'required|email|max:255',
            'description' => 'nullable|string|max:1000',
            'address' => 'nullable|string',
            'status' => 'nullable|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $validated = $validator->validated();
        $branch->name = $validated['name'];
        $branch->phone_1 = $validated['phone_no'];
        $branch->email_1 = $validated['email_id'];
        $branch->description = $validated['description'] ?? null;
        $branch->address = $validated['address'] ?? null;
        $branch->status = $request->has('status') ? 1 : 0;
        $branch->save();
        return response()->json([
            'status' => 'success',
            'message' => 'Branch updated successfully.',
        ]);
    }

    public function destroy($id)
    {
        $branch = Branch::findOrFail($id);
        $branch->delete();
        return redirect()->back()->with('success', 'Branch deleted successfully.');
    }


}
