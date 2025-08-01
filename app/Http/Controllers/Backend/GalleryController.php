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
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index(){
        $galleries = Gallery::select('galleries.*')
        ->with([
            'album' => function($query) {
                $query->select('id', 'title', 'image');
            },
            'album.branches' => function($query) {
                $query->select('branches.id', 'branches.name');
            }
        ])
        ->orderBy('sort_order')
        ->paginate(20);
        //return response()->json($galleries);   
        return view('backend.pages.gallery.index', compact('galleries'));
    }

    public function create(){
        $albumList = Album::orderBy('id', 'desc')->get();
        //return response()->json($albumList);      
        return view('backend.pages.gallery.create', compact('albumList'));
    }

    public function store(Request $request){
        $request->validate([
            'album' => 'required|exists:albums,id',
            'gallery_image' => 'required|array|max:20',
            'gallery_image.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:10240'
        ], [
            'gallery_image.max' => 'You can upload maximum 20 images at once',
            'gallery_image.required' => 'Please select at least one image',
            'album.required' => 'Please select an album'
        ]);
        DB::beginTransaction();
        try {
            $destinationPath = public_path('upload/album/gallery');
            
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }
            $album = Album::findOrFail($request->album);
            $safeTitle = Str::slug($album->title ?? 'gallery');
            $uploadedImages = [];
            foreach ($request->file('gallery_image') as $key => $imageFile) {
                $uniqueTimestamp = round(microtime(true) * 1000) + $key;
                $imageName = $safeTitle . '-' . $uniqueTimestamp . '.webp';                
                $image = Image::make($imageFile);
                $image->encode('webp', 75);
                $image->save($destinationPath . '/' . $imageName);
                Gallery::create([
                    'album_id' => $request->album,
                    'image_file' => $imageName,
                    'sort_order' => $key + 1
                ]);
                $uploadedImages[] = $imageName;
            }
            DB::commit();
            return redirect()->route('manage-gallery.index')->with('success', 'Gallery images uploaded successfully!');

        } catch (\Exception $e) {
            DB::rollBack();
            if (!empty($uploadedImages)) {
                foreach ($uploadedImages as $imageName) {
                    $filePath = $destinationPath . '/' . $imageName;
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                }
            }
            return back()->withInput()->with('error', 'Failed to upload gallery: ' . $e->getMessage());
        }
    }

    public function edit($id){
        $albumList = Album::orderBy('id', 'desc')->get();
        $galleryRow = Gallery::findOrFail($id); 
        //return response()->json($albumList);      
        return view('backend.pages.gallery.edit', compact('albumList', 'galleryRow'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'album' => 'required|exists:albums,id',
            'gallery_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:10240',
        ]);
        DB::beginTransaction();
        try {
            $gallery = Gallery::findOrFail($id);
            $imageName = $gallery->image_file;
            if ($request->hasFile('gallery_image')) {
                $destinationPath = public_path('upload/album/gallery');
                if ($imageName && File::exists($destinationPath.'/'.$imageName)) {
                    File::delete($destinationPath.'/'.$imageName);
                }
                $album = Album::find($request->album);
                $safeTitle = Str::slug($album->title ?? 'gallery');
                $uniqueTimestamp = round(microtime(true) * 1000);
                $imageName = $safeTitle.'-'.$uniqueTimestamp.'.webp';                
                $image = Image::make($request->file('gallery_image'));
                $image->encode('webp', 75);
                $image->save($destinationPath.'/'.$imageName);
            }
            $gallery->update([
                'album_id' => $request->album,
                'image_file' => $imageName,
            ]);
            DB::commit();
            return redirect()->route('manage-gallery.index')->with('success', 'Gallery image updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Failed to update gallery: '.$e->getMessage());
        }
    }

    public function destroy($id){
        DB::beginTransaction();
        try {
            $gallery = Gallery::findOrFail($id);
            $imagePath = public_path('upload/album/gallery/'.$gallery->image_file);
            if ($gallery->image_file && File::exists($imagePath)) {
                File::delete($imagePath);
            }
            $gallery->delete();            
            DB::commit();            
            return redirect()->route('manage-gallery.index')->with('success', 'Gallery image deleted successfully!');
            
        } catch (\Exception $e) {
            DB::rollBack();            
            return back()->withInput()->with('error', 'Failed to delete gallery: '.$e->getMessage());
        }
    }
}
