<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OurAlumniController extends Controller
{
    public function index(){ 
        //return response()->json($testimonialsList);
        return view('backend.pages.alumni.index');
    }
}
