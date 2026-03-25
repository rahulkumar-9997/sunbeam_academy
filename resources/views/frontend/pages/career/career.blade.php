@extends('frontend.layouts.master')
@section('title','Careers at Sunbeam Academy | Teaching & Staff Jobs')
@section('description', 'Browse information on Career at Sunbeam Academy Varanasi, covering academics, activities,
facilities, and student development.')
@section('main-content')
<div class="site-breadcrumb bread-head"
    style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
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
        <div class="career-content campus-tour pt-40 pb-40">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="content-info wow fadeInUp animated">
                        <div class="site-heading mb-3">
                            <h2 class="site-title">
                                Welcome to <span>Sunbeam Academy</span>.
                            </h2>
                        </div>
                        <p class="content-text">
                            Sunbeam Academy schools are considered to be one of the best schools in and around Varanasi
                            where your child will explore all the areas of art, education, and much more. We make sure
                            that your child receives the best of education from the best faculty at a reputed school in
                            Varanasi so that he/she has a brighter future and will make this nation a better place for
                            everyone with their knowledge.
                        </p>
                        <p class="content-text mt-0">
                            Our thought and philosophy are based on deep-rooted Indian values and rich culture
                            integrated with a global mindset. Our policies represent a vibrancy and sensitivity to the
                            needs of all stakeholders. We aspire to equip our students with skills that will help them
                            excel in life and prepare for their greater role in shaping the nation tomorrow.
                        </p>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-img wow fadeInRight animated" data-wow-delay=".25s"
                        style="visibility: visible; animation-delay: 0.25s;">
                        <img src="https://www.sunbeamacademy.com/public/fronted/assets/sunbeam-img/about/about-us-page.jpg"
                            alt="about us" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection