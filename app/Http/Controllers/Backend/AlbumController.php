<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use App\Models\Branch;
use App\Models\Album;
use App\Models\AlbumBranch;

class AlbumController extends Controller
{
    public function index(){
        // $albums = Album::with([
        //     'branches',
        //     'galleries' => function ($query) {
        //         $query->orderBy('sort_order');
        //     }
        // ])->get();
         $albumList = Album::with(['branches', 'galleries'])
            ->orderBy('id', 'desc')
            ->get();
        //return response()->json($albumList);
        return view('backend.pages.gallery.album.index', compact('albumList'));
    }

    public function create(Request $request){
        $action = $request->input('action');
        $branches = Branch::where('status', 1)->get();
        $branchOptions = '';
        foreach ($branches as $branch) {
            $branchOptions .= '<option value="' . $branch->id . '">' . $branch->name . '</option>';
        }
        
        if($action=='select'){
            $input = '<input type="hidden" name="action" class="form-control" id="action" value="'.$action.'">';
        }
        else{
            $input=null;
        } 
        
        $form = '
        <div class="modal-body">
            <form method="POST" action="' . route('manage-album.store') . '" accept-charset="UTF-8" enctype="multipart/form-data" id="albumAddForm">
                ' . csrf_field() . '
                '.$input.'
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="album_title" class="form-label">Album Title *</label>
                            <input type="text" id="album_title" name="album_title" class="form-control">
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
                            <label for="album_image" class="form-label">Album Image</label>
                            <input type="file" id="album_image" name="album_image" class="form-control">
                        </div>
                    </div>                    
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="short_content" class="form-label">Short Content</label>
                            <textarea class="form-control" id="short_content" rows="2" name="short_content"></textarea>
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
        $request->validate([
            'album_title' => 'required|string|max:255|unique:albums,title',
            'branches' => 'required|array',
            'branches.*' => 'exists:branches,id',            
            'album_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'short_content' => 'nullable|string',
        ]);
        DB::beginTransaction();
        try {
            $imageName = null;
            if ($request->hasFile('album_image')) {
                $destinationPath = public_path('upload/album');
                if (!File::exists($destinationPath)) {
                    File::makeDirectory($destinationPath, 0755, true);
                }
                $safeTitle = Str::slug($request->album_title);
                $imageFile = $request->file('album_image');
                $uniqueTimestamp = round(microtime(true) * 1000);
                $imageName = $safeTitle.'-' . $uniqueTimestamp . '.webp';
                $image = Image::make($imageFile);
                $image->encode('webp', 75);
                $image->save($destinationPath . '/' . $imageName);
            }
            $album = Album::create([
                'title' => $request->album_title,
                'short_details' => $request->short_content,
                'image' => $imageName,          
                'short_order' => 1,          
                'status' => $request->has('status') ? 1 : 0,
            ]);
            if (!empty($request->branches)) {
                foreach ($request->branches as $branch) {
                    AlbumBranch::create([
                        'album_id' => $album->id,
                        'branch_id' => $branch, 
                    ]);
                }
            }
            DB::commit();           
            if($request->has('action') && $request->input('action') == 'select') {
                return response()->json([
                    'status' => 'success',
                    'action' =>'select',
                    'message' => 'Album created successfully!',
                    'album' => [
                        'id' => $album->id,
                        'title' => $album->title
                    ],
                ]);
            }
            else{
                $albumList = Album::with(['branches', 'galleries'])
                ->orderBy('id', 'desc')
                ->get();               
                $response = [
                    'status' => 'success',
                    'action' =>'unselect',
                    'message' => 'Album created successfully!',
                    'album' => [
                        'id' => $album->id,
                        'title' => $album->title
                    ],
                    'albumListData' => view('backend.pages.gallery.album.partials.album-list', compact('albumList'))->render()
                ];
                return response()->json($response);
            }
            

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create category: ' . $e->getMessage()
            ], 500);
        }
    }

    public function edit(Request $request, $id)
    {
        $album = Album::with(['branches', 'galleries'])->findOrFail($id);       
        $branches = Branch::where('status', 1)->get();        
        $branchOptions = '';
        $selectedBranches = $album->branches->pluck('id')->toArray();        
        foreach ($branches as $branch) {
            $selected = in_array($branch->id, $selectedBranches) ? 'selected' : '';
            $branchOptions .= '<option value="' . $branch->id . '" ' . $selected . '>' . $branch->name . '</option>';
        }   
        
        $form = '
        <div class="modal-body">
            <form method="POST" action="'.route('manage-album.update', ['manage_album' => $id]).'" accept-charset="UTF-8" enctype="multipart/form-data" id="albumEditForm">
                ' . csrf_field() . '
                ' . method_field('PUT') . '
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="album_title" class="form-label">Album Title *</label>
                            <input type="text" id="album_title" name="album_title" class="form-control" value="' . e($album->title) . '">
                            <div class="invalid-feedback" id="album_title_error"></div>
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
                            <label for="album_image" class="form-label">Album Image</label>
                            <input type="file" id="album_image" name="album_image" class="form-control">
                            ' . ($album->image ? '<div class="mt-2"><img src="' . asset('upload/album/' . $album->image) . '" width="100"></div>' : '') . '
                            <div class="invalid-feedback" id="album_image_error"></div>
                        </div>
                    </div>                    
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="short_content" class="form-label">Short Content</label>
                            <textarea class="form-control" id="short_content" rows="2" name="short_content">' . e($album->short_details) . '</textarea>
                            <div class="invalid-feedback" id="short_content_error"></div>
                        </div>
                    </div>                    
                    <div class="mb-3 col-md-6">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="status" name="status" value="1" ' . ($album->status ? 'checked' : '') . '>
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
        $album = Album::findOrFail($id);        
        $request->validate([
            'album_title' => 'required|string|max:255|unique:albums,title,'.$id,
            'branches' => 'required|array',
            'branches.*' => 'exists:branches,id',            
            'album_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'short_content' => 'nullable|string',
        ]);
        DB::beginTransaction();
        try {
            $imageName = $album->image;            
            if ($request->hasFile('album_image')) {
                $destinationPath = public_path('upload/album');
                if (!File::exists($destinationPath)) {
                    File::makeDirectory($destinationPath, 0755, true);
                }
                if ($imageName && File::exists($destinationPath.'/'.$imageName)) {
                    File::delete($destinationPath.'/'.$imageName);
                }                
                $safeTitle = Str::slug($request->album_title);
                $imageFile = $request->file('album_image');
                $uniqueTimestamp = round(microtime(true) * 1000);
                $imageName = $safeTitle.'-' . $uniqueTimestamp . '.webp';
                $image = Image::make($imageFile);
                $image->encode('webp', 75);
                $image->save($destinationPath . '/' . $imageName);
            }
            $album->update([
                'title' => $request->album_title,
                'short_details' => $request->short_content,
                'image' => $imageName,          
                'status' => $request->has('status') ? 1 : 0,
            ]);
            if (!empty($request->branches)) {
                AlbumBranch::where('album_id', $album->id)->delete();
                foreach ($request->branches as $branch) {
                    AlbumBranch::create([
                        'album_id' => $album->id,
                        'branch_id' => $branch,
                    ]);
                }
            }
            DB::commit();            
            $albumList = Album::with(['branches', 'galleries'])
                ->orderBy('id', 'desc')
                ->get();
            return response()->json([
                'status' => 'success',
                'message' => 'Album updated successfully!',
                'album' => [
                    'id' => $album->id,
                    'title' => $album->title
                ],
                'albumListData' => view('backend.pages.gallery.album.partials.album-list', compact('albumList'))->render()
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update album: ' . $e->getMessage()
            ], 500);
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $album = Album::with('branches', 'galleries')->findOrFail($id);
            AlbumBranch::where('album_id', $id)->delete();
            if ($album->image) {
                $imagePath = public_path('upload/album/' . $album->image);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }
            $album->delete();            
            DB::commit();            
            $albumList = Album::with(['branches', 'galleries'])
                ->orderBy('id', 'desc')
                ->get();
            return response()->json([
                'status' => 'success',
                'message' => 'Album deleted successfully!',
                'albumListData' => view('backend.pages.gallery.album.partials.album-list', compact('albumList'))->render()
            ]);
            
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete album: ' . $e->getMessage()
            ], 500);
        }
    }

}
