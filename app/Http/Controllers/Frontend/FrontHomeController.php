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
        return "This is the About Us page.";
    }
    
    

    
    
}
