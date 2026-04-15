@extends('frontend.layouts.master')
@section('title','Careers at Sunbeam Academy | Teaching & Staff Jobs')
@section('description', 'Browse information on Career at Sunbeam Academy Varanasi, covering academics, activities, facilities, and student development.')
@section('main-content')
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h1 class="breadcrumb-title">Career</h1>
    </div>
</div>
<div class="department-area pt-50 pb-20 sathee-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <h2 class="site-title">Online Application Form</h2>                    
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-lg-3">
                <div class="career-btn">
                    <a href="https://forms.gle/SLqm47YEBvdiLn99A" target="_blank" class="theme-btn mt-1 w-100">
                        Click Here
                    </a>
                </div>
            </div>  
        </div>
    </div>
</div>
@endsection