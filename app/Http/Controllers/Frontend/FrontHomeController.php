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

    public function academicsCurriculum()
    {
        return view('frontend.pages.academics.curriculum');
    }

    public function schoolLevels()
    {
        return view('frontend.pages.academics.school-levels');
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

    
    
    

   
    

    
    
}
