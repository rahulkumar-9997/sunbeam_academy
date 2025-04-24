<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
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

    public function sunbeamAcademySamneghat (){
        return view('frontend.pages.branches.sunbeam-academy-samneghat');
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

    public function clearCache(){
        try {
            Artisan::call('optimize:clear');
            return back()->with('success', 'All caches have been cleared successfully.');
        } catch (\Exception $e) {
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

    
    
    

   
    

    
    
}
