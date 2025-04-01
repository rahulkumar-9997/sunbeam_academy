<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
class FrontHomeController extends Controller
{
    public function home(){
        
	    return view('frontend.index');
    }
    
    public function aboutUs()
    {
        return view('frontend.pages.about.about-us');
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

    public function curriculum()
    {
        return view('frontend.pages.life-at-sunbeam.curriculum');
    }
    
    public function academicSupportPrograms()
    {
        return view('frontend.pages.life-at-sunbeam.academic-support-programs');
    }
    

    
    
}
