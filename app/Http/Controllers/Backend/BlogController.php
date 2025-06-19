<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\Blog;
use App\Models\BlogBranch;
use App\Models\BlogParagraph;

class BlogController extends Controller
{
    public function index(){
        return view('backend.pages.blog.index');
    }

    public function create(){
        $branches = Branch::get();
        return view('backend.pages.blog.create', compact('branches'));
    }
}
