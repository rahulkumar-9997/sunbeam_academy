<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\NoticeBoard;
use App\Models\ClassModel;
use App\Models\Album;
use App\Models\Gallery;
use App\Models\Achievers;
use App\Models\OurAlumni;
use App\Models\Branch;
use App\Models\Disclosure;
use App\Models\Testimonial;
use App\Models\Announcement;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

class SiteMapController extends Controller
{
    public function index()
    {
        $urls = [];
        $today = Carbon::now()->toDateString();
        $urls[] = [
            'loc' => route('home'),
            'lastmod' => Carbon::now()->toDateString(),
            'priority' => '1.0',
            'changefreq' => 'daily'
        ];
        /* ------------------
         | Static pages
         ------------------*/
        $staticPages = [
            'about-us' => '0.9',
            'contact-us' => '0.8',
            'achievers' => '0.9',
            'curriculum' => '0.8',
            'school-levels' => '0.8',
            'holistic-educational-approach' => '0.8',
            'academic-support-programs' => '0.8',
            'day-bording-in-house' => '0.8',
            'book-a-tour' => '0.8',
            'fee-structure' => '0.8',
            'rules-and-regulations' => '0.8',
            'elite-11' => '0.8',
            'sathee' => '0.8',
            'life.hobby-classes' => '0.7',
            'life.school-cinema' => '0.7',
            'life.stem-labs' => '0.7',
            'life.early-learning-labs' => '0.7',
            'life.music-labs' => '0.7',
            'life.shooting-academy' => '0.7',
            'life.cricket-academy' => '0.7',
            'life.dramatics-radio' => '0.7',
            'hostel.boys' => '0.7',
            'hostel.girls' => '0.7',
            'hostel.weekly-boarding' => '0.7',
            'hostel.rules' => '0.7',
            'career' => '0.8',
        ];
        foreach ($staticPages as $routeName => $priority) {
            if (Route::has($routeName)) {
                $urls[] = [
                    'loc' => route($routeName),
                    'lastmod' => Carbon::now()->toDateString(),
                    'priority' => $priority,
                    'changefreq' => 'monthly'
                ];
            }
        }
        /* ------------------
         | Branch specific pages
         ------------------*/
        $branches = [
            'sunbeam-academy-samneghat' => '0.9',
            'sunbeam-academy-durgakund' => '0.9',
            'sunbeam-academy-sarainandan' => '0.9',
            'sunbeam-academy-knowledge-park' => '0.9',
        ];
        foreach ($branches as $routeName => $priority) {
            if (Route::has($routeName)) {
                $urls[] = [
                    'loc' => route($routeName),
                    'lastmod' => Carbon::now()->toDateString(),
                    'priority' => $priority,
                    'changefreq' => 'weekly'
                ];
            }
        }
        /* ------------------
         | Notices
         ------------------*/
        $urls[] = [
            'loc' => route('notices.index'),
            'lastmod' => Carbon::now()->toDateString(),
            'priority' => '0.9',
            'changefreq' => 'daily'
        ];
        Branch::select('slug')->each(function ($branch) use (&$urls, $today) {
            $urls[] = [
                'loc'      => route('notices.index', $branch->slug),
                'lastmod'  => $today,
                'priority' => '0.7',
            ];
        });
        NoticeBoard::get()->each(function ($notice) use (&$urls) {
            $urls[] = [
                'loc' => route('notices.show', $notice->slug),
                'lastmod' => optional($notice->updated_at)->toDateString(),
                'priority' => '0.8',
                'changefreq' => 'monthly'
            ];
        });
        /* ------------------
         | Classes
         ------------------*/
        $urls[] = [
            'loc' => route('classes.list'),
            'lastmod' => Carbon::now()->toDateString(),
            'priority' => '0.9',
            'changefreq' => 'daily'
        ];
        ClassModel::get()->each(function ($class) use (&$urls) {
            $urls[] = [
                'loc' => route('classes.details', $class->slug),
                'lastmod' => optional($class->updated_at)->toDateString(),
                'priority' => '0.8',
                'changefreq' => 'monthly'
            ];
        });

        /* ------------------
         | Blog
        ------------------*/
        $urls[] = [
            'loc' => route('blog'),
            'lastmod' => Carbon::now()->toDateString(),
            'priority' => '0.9',
            'changefreq' => 'daily'
        ];
        Blog::get()->each(function ($blog) use (&$urls) {
            $urls[] = [
                'loc' => route('blog.details', $blog->slug),
                'lastmod' => optional($blog->updated_at)->toDateString(),
                'priority' => '0.7',
                'changefreq' => 'monthly'
            ];
        });
        foreach ($branches as $routeName => $priority) {
            if (Route::has($routeName)) {
                $urls[] = [
                    'loc'      => route('disclosure.branch', $routeName),
                    'lastmod'  => $today,
                    'priority' => '0.6',
                ];
            }
        }
        // Branch::select('slug')->each(function ($branch) use (&$urls, $today) {
        //     $urls[] = [
        //         'loc'      => route('disclosure.branch', $branch->slug),
        //         'lastmod'  => $today,
        //         'priority' => '0.6',
        //     ];
        // });

        /* -----------------------------
         | Alumni details
         -----------------------------*/
        OurAlumni::select('slug', 'updated_at')
            ->each(function ($alumni) use (&$urls) {

                $urls[] = [
                    'loc'      => route('alumni.details', $alumni->slug),
                    'lastmod'  => optional($alumni->updated_at)->toDateString(),
                    'priority' => '0.6',
                ];
            });

        /* -----------------------------
         | Achievers details
         -----------------------------*/
        Achievers::select('slug', 'updated_at')
            ->each(function ($achiever) use (&$urls) {

                $urls[] = [
                    'loc'      => route('achievers.details', $achiever->slug),
                    'lastmod'  => optional($achiever->updated_at)->toDateString(),
                    'priority' => '0.6',
                ];
            });

        return response()
            ->view('frontend.sitemap.xml', compact('urls'))
            ->header('Content-Type', 'application/xml');
    }
}