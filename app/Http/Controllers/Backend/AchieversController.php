<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AchieversController extends Controller
{
    public function index(){ 
        //return response()->json($alumniList);
        return view('backend.pages.achievers.index');
    }
}
