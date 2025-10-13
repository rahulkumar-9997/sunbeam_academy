@extends('frontend.layouts.master')
@section('title','Sunbeam Academy - Career')
@section('description', 'Career')
@section('main-content')
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h2 class="breadcrumb-title">Career</h2>
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