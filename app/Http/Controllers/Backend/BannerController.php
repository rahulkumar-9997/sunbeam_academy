<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('id', 'desc')->get();
        return view('backend.pages.banner.index', compact('banners'));
    }

    public function create(Request $request)
    {
        $form = '
        <div class="modal-body">
            <form method="POST" action="' . route('manage-banner.store') . '" accept-charset="UTF-8" enctype="multipart/form-data" id="bannerAddForm">
                ' . csrf_field() . '
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="banner_title" class="form-label">Banner Title *</label>
                            <input type="text" id="banner_title" name="banner_title" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="banner_sub_title" class="form-label">Banner Sub-Title  *</label>
                            <input type="text" id="banner_sub_title" name="banner_sub_title" class="form-control">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="short_content" class="form-label">Short Content</label>
                             <textarea class="form-control" id="short_content" rows="2" name="short_content"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="desktop_image" class="form-label">Desktop Image *</label>
                            <input type="file" id="desktop_image" name="desktop_image" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="mobile_image" class="form-label">Mobile Image *</label>
                            <input type="file" id="mobile_image" name="mobile_image" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="about_more_link" class="form-label">About More link</label>
                            <input type="text" id="about_more_link" name="about_more_link" class="form-control" placeholder="https://example.com">
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
            'banner_title' => 'required|string|max:255',
            'banner_sub_title' => 'required|string|max:255',
            'short_content' => 'nullable|string',
            'desktop_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:6144',
            'mobile_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:6144',
            'about_more_link' => 'nullable|url',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(),
            ], 422);
        }
        $validated = $validator->validated();
        try {
            $uploadPath = public_path('upload/banner');
            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true, true);
            }
            $titleSlug = Str::slug($validated['banner_title']);
            $desktopImageName = null;
            if ($request->hasFile('desktop_image')) {
                $desktopImageName = 'desktop-' . $titleSlug . '-' . uniqid() . '.webp';
                $desktopImage = Image::make($request->file('desktop_image'));
                $desktopImage->resize(1920, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->encode('webp', 75)
                    ->save($uploadPath . '/' . $desktopImageName);
            }
            $mobileImageName = null;
            if ($request->hasFile('mobile_image')) {
                $mobileImageName = 'mobile-' . $titleSlug . '-' . uniqid() . '.webp';
                $mobileImage = Image::make($request->file('mobile_image'));
                $mobileImage->resize(800, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->encode('webp', 80)
                    ->save($uploadPath . '/' . $mobileImageName);
            }
            $data = [
                'title' => $validated['banner_title'],
                'sub_title' => $validated['banner_sub_title'],
                'short_content' => $validated['short_content'] ?? null,
                'desktop_img' => $desktopImageName,
                'mobile_img' => $mobileImageName,
                'about_more_link' => $validated['about_more_link'] ?? null,
            ];
            Banner::create($data);
            return response()->json([
                'status' => 'success',
                'message' => 'Banner created successfully.',
            ]);
        } catch (\Exception $e) {
            if (isset($desktopImageName) && file_exists($uploadPath . '/' . $desktopImageName)) {
                unlink($uploadPath . '/' . $desktopImageName);
            }
            if (isset($mobileImageName) && file_exists($uploadPath . '/' . $mobileImageName)) {
                unlink($uploadPath . '/' . $mobileImageName);
            }
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred while processing your request.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function edit($id){
        $banner = Banner::findOrFail($id);        
        $form = '
        <div class="modal-body">
            <form method="POST" action="'.route('manage-banner.update', ['manage_banner' => $id]).'" accept-charset="UTF-8" enctype="multipart/form-data" id="bannerEditForm">
                '.csrf_field().'
                '.method_field('PUT').'
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="edit_banner_title" class="form-label">Banner Title *</label>
                            <input type="text" id="edit_banner_title" name="banner_title" class="form-control" value="'.e($banner->title).'">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="edit_banner_sub_title" class="form-label">Banner Sub-Title *</label>
                            <input type="text" id="edit_banner_sub_title" name="banner_sub_title" class="form-control" value="'.e($banner->sub_title).'">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="edit_short_content" class="form-label">Short Content</label>
                            <textarea class="form-control" id="edit_short_content" rows="2" name="short_content">'.e($banner->short_content).'</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="edit_desktop_image" class="form-label">Desktop Image</label>
                            <input type="file" id="edit_desktop_image" name="desktop_image" class="form-control">
                            '.($banner->desktop_img ? '
                            <div class="mt-2">
                                <small class="text-muted">Current Image:</small>
                                <div class="d-flex align-items-center mt-1">
                                    <img src="'.asset('upload/banner/'.$banner->desktop_img).'" class="img-thumbnail me-2" width="100" alt="Current Desktop Banner">
                                    <a href="'.asset('upload/banner/'.$banner->desktop_img).'" target="_blank" class="btn btn-sm btn-outline-primary">
                                        <i class="ti ti-external-link"></i> View Full
                                    </a>
                                </div>
                            </div>' : '<small class="text-muted">No image uploaded</small>').'
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="edit_mobile_image" class="form-label">Mobile Image</label>
                            <input type="file" id="edit_mobile_image" name="mobile_image" class="form-control">
                            '.($banner->mobile_img ? '
                            <div class="mt-2">
                                <small class="text-muted">Current Image:</small>
                                <div class="d-flex align-items-center mt-1">
                                    <img src="'.asset('upload/banner/'.$banner->mobile_img).'" class="img-thumbnail me-2" width="80" alt="Current Mobile Banner">
                                    <a href="'.asset('upload/banner/'.$banner->mobile_img).'" target="_blank" class="btn btn-sm btn-outline-primary">
                                        <i class="ti ti-external-link"></i> View Full
                                    </a>
                                </div>
                            </div>' : '<small class="text-muted">No image uploaded</small>').'
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="edit_about_more_link" class="form-label">About More link</label>
                            <input type="text" id="edit_about_more_link" name="about_more_link" class="form-control" placeholder="https://example.com" value="'.e($banner->about_more_link).'">
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

    public function update(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);        
        $validator = Validator::make($request->all(), [
            'banner_title' => 'required|string|max:255',
            'banner_sub_title' => 'required|string|max:255',
            'short_content' => 'nullable|string',
            'desktop_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'mobile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'about_more_link' => 'nullable|url',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(),
            ], 422);
        }
        $uploadPath = public_path('upload/banner');
        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0755, true, true);
        }
        $data = [
            'title' => $request->banner_title,
            'sub_title' => $request->banner_sub_title,
            'short_content' => $request->short_content ?? null,
            'about_more_link' => $request->about_more_link ?? null,
        ];
        if ($request->hasFile('desktop_image')) {
            if ($banner->desktop_img && file_exists($uploadPath.'/'.$banner->desktop_img)) {
                unlink($uploadPath.'/'.$banner->desktop_img);
            }            
            $desktopImage = $request->file('desktop_image');
            $desktopImageName = 'desktop-'.Str::slug($request->banner_title).'-'.uniqid().'.webp';
            Image::make($desktopImage)->encode('webp', 75)->save($uploadPath.'/'.$desktopImageName);
            $data['desktop_img'] = $desktopImageName;
        }
        if ($request->hasFile('mobile_image')) {
            if ($banner->mobile_img && file_exists($uploadPath.'/'.$banner->mobile_img)) {
                unlink($uploadPath.'/'.$banner->mobile_img);
            }            
            $mobileImage = $request->file('mobile_image');
            $mobileImageName = 'mobile-'.Str::slug($request->banner_title).'-'.uniqid().'.webp';
            Image::make($mobileImage)->encode('webp', 80)->save($uploadPath.'/'.$mobileImageName);
            $data['mobile_img'] = $mobileImageName;
        }

        $banner->update($data);
        return response()->json([
            'status' => 'success',
            'message' => 'Banner updated successfully.',
        ]);
    }

    public function destroy($id)
    {
        try {
            $banner = Banner::findOrFail($id);            
            $uploadPath = public_path('upload/banner/');
            if ($banner->desktop_img && file_exists($uploadPath . $banner->desktop_img)) {
                unlink($uploadPath . $banner->desktop_img);
            }
            if ($banner->mobile_img && file_exists($uploadPath . $banner->mobile_img)) {
                unlink($uploadPath . $banner->mobile_img);
            }
            $banner->delete();            
            return redirect()->route('manage-banner.index')->with('success', 'Banner deleted successfully!');           
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
