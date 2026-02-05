<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Mail\BranchEnquiryMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Models\NoticeBoard;
use App\Models\ClassModel;
use App\Models\Branch;
use App\Models\BranchEnquiry;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Album;
use App\Models\Gallery;
use App\Models\Announcement;
use App\Models\Testimonial;
use App\Models\OurAlumni;
use App\Models\Achievers;

class FrontHomeController extends Controller
{
    public function resizeImage(Request $request, $folder, $image)
    {
        $imagePath = public_path("upload/{$folder}/{$image}");
        if (!file_exists($imagePath)) {
            abort(404);
        }
        $width = $request->get('w', null);
        $height = $request->get('h', null);
        $quality = $request->get('q', 85);
        if (!$width && !$height) {
            return response()->file($imagePath);
        }
        $img = Image::make($imagePath);
        if ($width && $height) {
            $img->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        } elseif ($width) {
            $img->resize($width, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        } elseif ($height) {
            $img->resize(null, $height, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        }
        $img->encode('webp', $quality);
        return $img->response('webp');
    }

    public function home()
    {
        $today = Carbon::today()->toDateString();
        $data['notices'] = NoticeBoard::with('branches')
            ->where('status', 1)
            ->where('start_date', '<=', $today)
            ->where('end_date', '>=', $today)
            ->orderBy('created_at', 'desc')
            ->select('id', 'title', 'slug', 'notice_type', 'created_at') // include id
            ->get();
        $data['classes'] = ClassModel::with(['branches'])
            ->where('status', 1)
            ->select('title', 'slug', 'heading_name', 'main_image', 'description', 'user_id')
            ->latest()
            ->take(3)
            ->get();
        $data['branches'] = Branch::where('status', 1)
            ->select('name', 'slug', 'description', 'phone_1', 'email_1')
            ->take(4)
            ->get();
        $data['banners'] = Banner::select('title', 'sub_title', 'short_content', 'desktop_img', 'mobile_img', 'about_more_link')
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();

        $data['blog'] = Blog::select('id', 'title', 'slug', 'main_image', 'created_at')
            ->with(['branchNames'])
            ->where('status', 1)
            ->inRandomOrder()
            ->limit(3)
            ->get();

        $data['album'] = Album::whereHas('galleries', function ($query) {
            $query->whereNotNull('image_file');
        })
            ->with([
                'branches',
                'galleries' => function ($query) {
                    $query->whereNotNull('image_file')
                        ->orderBy('sort_order');
                }
            ])
            ->where('status', 1)
            ->inRandomOrder()
            ->limit(9)
            ->get();
        $data['announcementList'] = Announcement::with('branches')
            ->where('status', 1)
            ->take(6)
            ->get();

        $data['testimonialsList'] = Testimonial::with(['branches:id,name'])
            ->where('status', 1)
            ->take(8)
            ->get(['id', 'title', 'slug', 'type', 'image', 'content']);

        //return response()->json($data['notices']);
        return view('frontend.index', compact('data'));
    }

    public function aboutUs()
    {
        return view('frontend.pages.about.about-us');
    }

    public function blogList()
    {
        $data['blog'] = Blog::select('id', 'title', 'slug', 'main_image', 'created_at')
            ->with(['branchNames'])
            ->where('status', 1)
            ->orderBy('id', 'desc')
            ->paginate(15);
        //return response()->json($data['blog']);
        return view('frontend.pages.blogs.blog-list', compact('data'));
    }

    public function blogDetails($slug)
    {
        $blog = Blog::select('id', 'title', 'slug', 'description', 'main_image', 'created_at')
            ->with(['paragraphs', 'branchNames'])
            ->where('status', 1)
            ->where('slug', $slug)
            ->firstOrFail();
        //return response()->json($blog);
        return view('frontend.pages.blogs.blog-details', compact('blog'));
    }
    /*
    public function sunbeamAcademySamneghat()
    {
        try {
            $today = Carbon::today()->toDateString();
            $branch = Branch::where('slug', 'sunbeam-academy-samneghat')->firstOrFail();
            $branchSlug = $branch->slug;
            $data['notices'] = NoticeBoard::whereHas('branches', function($query) use ($branchSlug) {
                    $query->where('slug', $branchSlug);
            })
                ->where('status', 1)
                ->where('start_date', '<=', $today)
                ->where('end_date', '>=', $today)
                ->with('branches')
                ->orderBy('created_at', 'desc')
                ->select('id', 'title', 'slug', 'notice_type', 'created_at')
                ->get();

            $data['album'] = Album::whereHas('branches', function($query) use ($branchSlug) {
                    $query->where('slug', $branchSlug);
                })
                ->whereHas('galleries', function ($query) {
                    $query->whereNotNull('image_file');
                })
                ->with([
                    'branches'
                ])
                ->where('status', 1)
                ->inRandomOrder()
                ->limit(9)
                ->get();
            $data['alumniList'] = OurAlumni::where('status', 1)
                ->where('branch_id', $branch->id)
                ->take(6)
                ->orderBy('id', 'desc')
                ->get();

            $data['achieversList'] = Achievers::where('branch_id', $branch->id)
                ->orderBy('id', 'desc')
                ->take(3)
                ->get();
            //return response()->json($data['achieversList']);
            return view('frontend.pages.branches.sunbeam-academy-samneghat', compact('branch', 'data'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            Log::error('Branch not found for slug: sunbeam-academy-samneghat');
            abort(404, 'Branch not found');
        }
    }

    public function sunbeamAcademyDurgakund()
    {

        try {
            $today = Carbon::today()->toDateString();
            $branch = Branch::where('slug', 'sunbeam-academy-durgakund')->firstOrFail();
            $branchSlug = $branch->slug;
            $data['notices'] = NoticeBoard::whereHas('branches', function($query) use ($branchSlug) {
                    $query->where('slug', $branchSlug);
            })
                ->where('status', 1)
                ->where('start_date', '<=', $today)
                ->where('end_date', '>=', $today)
                ->with('branches')
                ->orderBy('created_at', 'desc')
                ->select('id', 'title', 'slug', 'notice_type', 'created_at')
                ->get();

            $data['album'] = Album::whereHas('branches', function($query) use ($branchSlug) {
                    $query->where('slug', $branchSlug);
                })
                ->whereHas('galleries', function ($query) {
                    $query->whereNotNull('image_file');
                })
                ->with([
                    'branches'
                ])
                ->where('status', 1)
                ->inRandomOrder()
                ->limit(9)
                ->get();
            $data['alumniList'] = OurAlumni::where('status', 1)
                ->where('branch_id', $branch->id)
                ->take(6)
                ->orderBy('id', 'desc')
                ->get();

            $data['achieversList'] = Achievers::where('branch_id', $branch->id)
                ->orderBy('id', 'desc')
                ->take(3)
                ->get();
            //return response()->json($data['album']);
            return view('frontend.pages.branches.sunbeam-academy-durgakund', compact('branch', 'data'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            Log::error('Branch not found for slug: sunbeam-academy-durgakund');
            abort(404, 'Branch not found');
        }

    }

    public function sunbeamAcademySarainandan()
    {
        try {
            $today = Carbon::today()->toDateString();
            $branch = Branch::where('slug', 'sunbeam-academy-sarainandan')->firstOrFail();
            $branchSlug = $branch->slug;
            $data['notices'] = NoticeBoard::whereHas('branches', function($query) use ($branchSlug) {
                    $query->where('slug', $branchSlug);
            })
                ->where('status', 1)
                ->where('start_date', '<=', $today)
                ->where('end_date', '>=', $today)
                ->with('branches')
                ->orderBy('created_at', 'desc')
                ->select('id', 'title', 'slug', 'notice_type', 'created_at')
                ->get();

            $data['album'] = Album::whereHas('branches', function($query) use ($branchSlug) {
                    $query->where('slug', $branchSlug);
                })
                ->whereHas('galleries', function ($query) {
                    $query->whereNotNull('image_file');
                })
                ->with([
                    'branches'
                ])
                ->where('status', 1)
                ->inRandomOrder()
                ->limit(9)
                ->get();
            $data['alumniList'] = OurAlumni::where('status', 1)
                ->where('branch_id', $branch->id)
                ->take(6)
                ->orderBy('id', 'desc')
                ->get();

            $data['achieversList'] = Achievers::where('branch_id', $branch->id)
                ->orderBy('id', 'desc')
                ->take(3)
                ->get();
            //return response()->json($data['album']);
            return view('frontend.pages.branches.sunbeam-academy-sarainandan', compact('branch', 'data'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            Log::error('Branch not found for slug: sunbeam-academy-sarainandan');
            abort(404, 'Branch not found');
        }
    }

    public function sunbeamAcademyKnowledgePark()
    {
        try {
            $today = Carbon::today()->toDateString();
            $branch = Branch::where('slug', 'sunbeam-academy-knowledge-park')->firstOrFail();
            $branchSlug = $branch->slug;
            $data['notices'] = NoticeBoard::whereHas('branches', function($query) use ($branchSlug) {
                    $query->where('slug', $branchSlug);
            })
                ->where('status', 1)
                ->where('start_date', '<=', $today)
                ->where('end_date', '>=', $today)
                ->with('branches')
                ->orderBy('created_at', 'desc')
                ->select('id', 'title', 'slug', 'notice_type', 'created_at')
                ->get();

            $data['album'] = Album::whereHas('branches', function($query) use ($branchSlug) {
                    $query->where('slug', $branchSlug);
                })
                ->whereHas('galleries', function ($query) {
                    $query->whereNotNull('image_file');
                })
                ->with([
                    'branches'
                ])
                ->where('status', 1)
                ->inRandomOrder()
                ->limit(9)
                ->get();
            $data['alumniList'] = OurAlumni::where('status', 1)
                ->where('branch_id', $branch->id)
                ->take(6)
                ->orderBy('id', 'desc')
                ->get();

            $data['achieversList'] = Achievers::where('branch_id', $branch->id)
                ->orderBy('id', 'desc')
                ->take(3)
                ->get();
            //return response()->json($data['album']);
            return view('frontend.pages.branches.sunbeam-academy-knowledge-park', compact('branch', 'data'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            Log::error('Branch not found for slug: sunbeam-academy-knowledge-park');
            abort(404, 'Branch not found');
        }
    }
    */

    private function getBranchData($branchSlug)
    {
		Log::info('Current Domain: ' . request()->getHost());
		Log::info('Current Slug: ' . $branchSlug);
        $today = Carbon::today()->toDateString();
        $branch = Branch::where('slug', $branchSlug)->firstOrFail();

        $data['notices'] = NoticeBoard::whereHas('branches', function ($query) use ($branchSlug) {
            $query->where('slug', $branchSlug);
        })
            ->where('status', 1)
            ->where('start_date', '<=', $today)
            ->where('end_date', '>=', $today)
            ->with('branches')
            ->orderBy('created_at', 'desc')
            ->select('id', 'title', 'slug', 'notice_type', 'created_at')
            ->get();

        $data['album'] = Album::whereHas('branches', function ($query) use ($branchSlug) {
            $query->where('slug', $branchSlug);
        })
            ->whereHas('galleries', function ($query) {
                $query->whereNotNull('image_file');
            })
            ->with(['branches'])
            ->where('status', 1)
            ->inRandomOrder()
            ->limit(9)
            ->get();

        $data['alumniList'] = OurAlumni::where('status', 1)
            ->where('branch_id', $branch->id)
            ->take(6)
            ->orderBy('id', 'desc')
            ->get();

        $data['achieversList'] = Achievers::where('branch_id', $branch->id)
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();

        return compact('branch', 'data');
    }

    public function sunbeamAcademySamneghat()
    {
        try {
            $branchData = $this->getBranchData('sunbeam-academy-samneghat');
            return view('frontend.pages.branches.sunbeam-academy-samneghat', $branchData);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            Log::error('Branch not found: sunbeam-academy-samneghat');
        }
    }

    public function sunbeamAcademyDurgakund()
    {
        try {
            $branchData = $this->getBranchData('sunbeam-academy-durgakund');
            return view('frontend.pages.branches.sunbeam-academy-durgakund', $branchData);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            Log::error('Branch not found: sunbeam-academy-durgakund');
            abort(404, 'Branch not found');
        }
    }

    public function sunbeamAcademySarainandan()
    {
        try {
            $branchData = $this->getBranchData('sunbeam-academy-sarainandan');
            return view('frontend.pages.branches.sunbeam-academy-sarainandan', $branchData);            
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            Log::error('Branch not found: sunbeam-academy-sarainandan');
            abort(404, 'Branch not found');
        }
    }

    public function sunbeamAcademyKnowledgePark()
    {
        try {
            $branchData = $this->getBranchData('sunbeam-academy-knowledge-park');
            return view('frontend.pages.branches.sunbeam-academy-knowledge-park', $branchData);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            Log::error('Branch not found: sunbeam-academy-knowledge-park');
            abort(404, 'Branch not found');
        }
    }

    public function branchEnquirySubmitForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'branch_name' => 'required|string|max:255',
            'enquiry_name' => 'required|string|max:255',
            'enquiry_email' => 'nullable|email|max:255',
            'enquiry_phone' => 'required|string|max:10',
            'enquiry_message' => 'nullable|string|max:1000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $validated = $validator->validated();
        $data = [
            'branch_name' => $validated['branch_name'],
            'name' => $validated['enquiry_name'],
            'email' => $validated['enquiry_email'],
            'phone' => $validated['enquiry_phone'] ?? null,
            'message' => $validated['enquiry_message'] ?? null,
        ];

        $branchEnquiry = BranchEnquiry::create($data);
        try {
            Mail::to('info@sunbeamacademy.com')->send(new BranchEnquiryMail($data));
        } catch (\Exception $e) {
            Log::error('Failed to send enquiry email: ' . $e->getMessage());
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Your enquiry form submitted successfully. Our team will contact you soon.',
        ]);
    }

    public function academicsCurriculum()
    {
        return view('frontend.pages.academics.curriculum');
    }

    public function schoolLevels()
    {
        $data['classes'] = ClassModel::with(['branches'])
            ->where('status', 1)
            ->select('title', 'slug', 'heading_name', 'main_image', 'description', 'user_id')
            ->orderBy('id', 'desc')
            ->paginate(15);
        return view('frontend.pages.academics.school-levels', compact('data'));
    }

    public function holisticEducationalApproach()
    {
        return view('frontend.pages.academics.holistic-educational-approach');
    }

    public function academicSupportPrograms()
    {
        return view('frontend.pages.academics.academic-support-programs');
    }

    public function dayBordingHouse()
    {
        return view('frontend.pages.academics.day-bording-in-house-coaching');
    }


    public function bookAtour()
    {
        return view('frontend.pages.admissions.book-a-tour');
    }

    public function feeStructure()
    {
        return view('frontend.pages.admissions.fee-structure');
    }

    public function rulesAndRegulations()
    {
        return view('frontend.pages.admissions.rules-and-regulations');
    }

    public function elite11()
    {
        return view('frontend.pages.schlorships.elite-11');
    }

    public function sathee()
    {
        return view('frontend.pages.schlorships.sathee');
    }

    public function hobbyClasses()
    {
        return view('frontend.pages.life-at-sunbeam.hobby-classes');
    }

    public function schoolCinema()
    {
        return view('frontend.pages.life-at-sunbeam.school-cinema');
    }

    public function stemLabs()
    {
        return view('frontend.pages.life-at-sunbeam.stem-labs');
    }

    public function earlyLearningLabs()
    {
        return view('frontend.pages.life-at-sunbeam.early-learning-labs');
    }

    public function musicLabs()
    {
        return view('frontend.pages.life-at-sunbeam.music-labs');
    }

    public function shootingAcademy()
    {
        return view('frontend.pages.life-at-sunbeam.shooting-academy');
    }

    public function cricketAcademy()
    {
        return view('frontend.pages.life-at-sunbeam.cricket-academy');
    }

    public function dramaticsRadio()
    {
        return view('frontend.pages.life-at-sunbeam.dramatics-radio');
    }

    public function boysHostel()
    {
        return view('frontend.pages.hostels.boys-hostel');
    }

    public function girlsHostel()
    {
        return view('frontend.pages.hostels.girls-hostel');
    }

    public function weeklyBoarding()
    {
        return view('frontend.pages.hostels.weekly-bording');
    }

    public function hostelRulesRegulations()
    {
        return view('frontend.pages.hostels.rules-and-regulations');
    }

    public function contactUs()
    {
        return view('frontend.pages.contact-us');
    }

    public function clearCache()
    {
        try {
            Artisan::call('optimize:clear');
            return back()->with('success', 'All caches have been cleared successfully.');
        } catch (\Exception $e) {
            Log::error('Cache clear error: ' . $e->getMessage());
            return back()->with('error', 'Failed to clear caches. Please try again.');
        }
    }

    public function foundersMessage()
    {
        return view('frontend.pages.about.founders-message');
    }

    public function ceoMessage()
    {
        return view('frontend.pages.about.ceo-message');
    }

    public function deputyDirectorMessage()
    {
        return view('frontend.pages.about.deputy-director-message');
    }

    public function noticeList(Request $request, $branch = null)
    {
        $today = Carbon::today()->toDateString();
        $metaTitle = 'Notices at Sunbeam Academy Varanasi CBSE School Campus';
        $metaDescription = 'Get insights into Notices at Sunbeam Academy Varanasi, covering academics, activities, facilities, and student development.';
        if ($branch) {
            $branch = Branch::where('slug', $branch)->firstOrFail();
            $branchSlug = $branch->slug;
            $seo = [
                'sunbeam-academy-durgakund' => [
                    'title' => 'Sunbeam Academy Durgakund Notices & Announcements',
                    'description' => 'Find details on Sunbeam Academy Durgakund at Sunbeam Academy Varanasi, covering academics, activities, facilities, and student development.'
                ],

                'sunbeam-academy-samneghat' => [
                    'title' => 'Sunbeam Academy Samneghat Notices & Announcements',
                    'description' => 'Read updates on Sunbeam Academy Samneghat at Sunbeam Academy Varanasi, covering academics, activities, facilities, and student development.'
                ],

                'sunbeam-academy-sarainandan' => [
                    'title' => 'Sunbeam Academy Sarainandan Notices & Announcements',
                    'description' => 'Understand Sunbeam Academy Sarainandan at Sunbeam Academy Varanasi, covering academics, activities, facilities, and student development.'
                ],
            ];
            if (isset($seo[$branchSlug])) {
                $metaTitle = $seo[$branchSlug]['title'];
                $metaDescription = $seo[$branchSlug]['description'];
            }
            $data['notices'] = NoticeBoard::whereHas('branches', function ($query) use ($branchSlug) {
                    $query->where('slug', $branchSlug);
                })
                ->where('status', 1)
                ->where('start_date', '<=', $today)
                ->where('end_date', '>=', $today)
                ->with('branches')
                ->orderBy('created_at', 'desc')
                ->select('id', 'title', 'slug', 'notice_type', 'created_at', 'meta_title', 'meta_description')
                ->get();
            return view('frontend.pages.notice-board.index', compact('data', 'metaTitle', 'metaDescription'));
        }

        $data['notices'] = NoticeBoard::with('branches')
            ->where('status', 1)
            ->where('start_date', '<=', $today)
            ->where('end_date', '>=', $today)
            ->orderBy('created_at', 'desc')
            ->select('id', 'title', 'slug', 'notice_type', 'created_at', 'meta_title', 'meta_description')
            ->get();
        return view('frontend.pages.notice-board.index', compact('data', 'metaTitle', 'metaDescription'));
    }


    public function noticeDetails(Request $request, $slug)
    {
        $today = Carbon::today()->toDateString();
        $notice = NoticeBoard::with('branches', 'noticeImages')->where('status', 1)
            ->where('slug', $slug)
            ->firstOrFail();
        //return response()->json($notice);
        return view('frontend.pages.notice-board.show', compact('notice'));
    }

    public function classesList(Request $request)
    {
        $data['classes'] = ClassModel::with(['branches'])
            ->where('status', 1)
            ->select('title', 'slug', 'heading_name', 'meta_title', 'meta_description', 'main_image', 'description', 'user_id')
            ->latest()
            ->get();
        return view('frontend.pages.classes.index', compact('data'));
    }

    public function classesDetails(Request $request, $slug)
    {
        $classes = ClassModel::with(['branches'])
            ->where('status', 1)
            ->where('slug', $slug)
            ->select('title', 'slug', 'heading_name', 'meta_title', 'meta_description', 'main_image', 'description', 'user_id')
            ->firstOrFail();
        return view('frontend.pages.classes.show', compact('classes'));
    }


    public function albumHomeAjax(Request $request, $id)
    {
        try {
            if (!is_numeric($id)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Invalid album ID',
                ], 400);
            }
            $album = Album::find($id);
            if (!$album) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Album not found',
                ], 404);
            }
            $galleriesList = Gallery::select('galleries.*')
                ->with([
                    'album' => function ($query) {
                        $query->select('id', 'title', 'image');
                    },
                    'album.branches' => function ($query) {
                        $query->select('branches.id', 'branches.name');
                    }
                ])
                ->where('album_id', $id)
                ->orderBy('sort_order')
                ->get();

            if ($request->query('action') === 'frontend_data') {
                if ($galleriesList->isEmpty()) {
                    return response()->json([
                        'status' => 'success',
                        'message' => 'Album has no photos',
                        'galleryListData' => view('frontend.pages.partials.ajax-home-album-empty', compact('album'))->render()
                    ]);
                }

                return response()->json([
                    'status' => 'success',
                    'message' => 'Album loaded successfully',
                    'galleryListData' => view('frontend.pages.partials.ajax-home-album-gallery', compact('galleriesList', 'album'))->render()
                ]);
            }

            return view('frontend.pages.partials.ajax-home-album-gallery', compact('galleriesList'));
        } catch (\Exception $e) {
            Log::error('Album load error: ' . $e->getMessage());

            return response()->json([
                'status' => 'error',
                'message' => 'Failed to load album',
                'errors' => ['server' => ['Error processing request']]
            ], 500);
        }
    }

    public function AjaxTestimonials(Request $request, $id)
    {
        $testimonial = Testimonial::with('branches')->findOrFail($id);
        $modalContent = '
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="col-md-5 text-center mb-3 mb-md-0">
                        <img src="' . asset('upload/testimonials/' . $testimonial->image) . '" 
                            class="img-fluid rounded" 
                            alt="' . $testimonial->title . '">
                    </div>
                    <div class="col-md-7">                        
                        <div class="testimonial-content mb-3">
                        <p> ' .  nl2br(e($testimonial->content)) . '</p>
                        </div>';
        if ($testimonial->branches->count()) {
            $modalContent .= '<div class="mt-2"><strong>Branches:</strong><br>';
            foreach ($testimonial->branches as $branch) {
                $modalContent .= '<span class="badge bg-info me-1 mb-1">' . e($branch->name) . '</span>';
            }
            $modalContent .= '</div>';
        }

        $modalContent .= '
                    </div>
                </div>
            </div>';

        return response()->json([
            'message' => 'Modal content generated',
            'modalContent' => $modalContent,
        ]);
    }


    public function disclosureListBranchWise($branchSlug)
    {
        $branchDisclosure = Branch::with('disclosures')
            ->where('slug', $branchSlug)
            ->first();
        if (!$branchDisclosure) {
            abort(404, 'Branch not found');
        }
        
        //return response()->json($branchDisclosure);
        return view('frontend.pages.disclosure.list', [
            'branchDisclosure' => $branchDisclosure
        ]);
    }

    public function alumniDetails($slug)
    {
        $alumni = OurAlumni::with('branch')->where('slug', $slug)->first();
        if (!$alumni) {
            return response()->json([
                'message' => 'Alumni not found',
                'modalContent' => '<div class="alert alert-danger">Alumni not found</div>'
            ], 404);
        }
        $imagePath = $alumni->profile_pic ? asset('upload/alumni/' . $alumni->profile_pic) : asset('fronted/assets/img/testimonial/01.jpg');

        $modalContent = '
        <div class="modal-body">
            <div class="row align-items-center">
                <div class="col-md-5 text-center mb-3 mb-md-0">
                    <img src="' . $imagePath . '" 
                        class="img-fluid rounded" 
                        alt="' . e($alumni->title) . '"
                        style="max-height: 300px; object-fit: cover;">
                </div>
                <div class="col-md-7">                        
                    <h3 class="mb-3">' . e($alumni->title) . '</h3>                    
                    <div class="testimonial-content mb-3">
                        <p>' . nl2br(e($alumni->content)) . '</p>
                    </div>';

        if ($alumni->branch) {
            $modalContent .= '
            <div class="mt-2">
                <span class="badge bg-info me-1 mb-1">' . $alumni->branch->name . '</span>
            </div>';
        }
        $modalContent .= '
                </div>
            </div>
        </div>';

        return response()->json([
            'message' => 'Modal content generated',
            'modalContent' => $modalContent,
        ]);
    }

    public function achieversList()
    {
        $data['achieversList'] = Achievers::with('branch')->orderBy('id', 'desc')->paginate(15);
        return view('frontend.pages.achievers.achievers-list', compact('data'));
    }

    public function achieversDetails($slug)
    {
        $achieversDetail = Achievers::select('id', 'title', 'slug', 'profile_pic', 'short_content', 'long_content')
            ->with(['branch'])
            ->where('status', 1)
            ->where('slug', $slug)
            ->firstOrFail();
        return view('frontend.pages.achievers.achievers-details', compact('achieversDetail'));
    }

    public function career()
    {
        return view('frontend.pages.career.career');
    }

    public function autoOpenModal(Request $request){
        $form = '';        
            $form = '<iframe src="https://forms.gle/XZTmoZ17AHvkWdHx7" 
            width="100%" 
            height="500" 
            frameborder="0" 
            style="border: none;">
            </iframe>';        
        return response()->json([
            'message' => 'Form created successfully',
            'form' => $form,
        ]);
    }
}
