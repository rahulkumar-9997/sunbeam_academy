@extends('frontend.layouts.master')
@section('title','Sunbeam Academy - Fee Structure')
@section('description', 'Let a child become an independent learner who is morally strong and environmentally aware.')
@section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective')
@section('main-content')
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h2 class="breadcrumb-title">Fee Structure</h2>
    </div>
</div>
<div class="course-area fee-structure pt-40 pb-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h4 class="mb-3">To Download the Fess  Structure of the Academic Session <span style="color:#FDA31B;">2026-27 </span></h4>
                    <div class="career-btn">
                        <a href="{{ asset('fronted/assets/sunbeam-img/Fee-Structure-2026-2027.pdf') }}" download class="theme-btn mt-1">
                            Click Here
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="course-area fee-structure pt-20 pb-10">
    <div class="video-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 d-flex align-items-center wow fadeInLeft" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <h2 class="site-title">
                            Fee <span>Payment</span>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-8 wow fadeInRight" data-wow-delay=".25s">
                    <div class="fee-co">
                        <p>
                            Keeping in view the convenience of parents, pupils, and the school administration itself, payment of school fees can be made at the office counter as well as online. Parents can make use of the online fee payment facility from the comfort of their preferred place instead of visiting the campus
                        </p>
                        <div class="site-heading mb-3 fee-btn">
                            <h5>
                                To pay the school fees online
                                <a href="http://www.sunbeamacademyonline.com/Login.aspx" class="">Click Here</a>
                            </h5>

                        </div>
                    </div>                    
                </div>
            </div>            
        </div>
    </div>
</div>
<div class="course-area fee-rules-area pt-10 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <h3 class="fee-rule">Fee <span>Rules</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-2">
                <div class="whatnew-box">
                    <p class="slider-title">
                        Fee counter time: 7.00 A.M to 4.00 P.M (except holiday announced periodically)
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-2">
                <div class="whatnew-box">
                    <p class="slider-title">
                        A fee card is a must with updated records and duly verified by the parents.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-2">
                <div class="whatnew-box">
                    <p class="slider-title">
                        Pay fee on or before 15th of every month except May and June fee to be paid collectively before 15th May.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-2">
                <div class="whatnew-box">
                    <p class="slider-title">
                        Students can deposit fees only during break time or before & after school
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="campus-tour pt-30 pb-80 bg pay-fee-time">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="content-info wow fadeInUp" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <h2 class="site-title">
                            Pay fee in time to avoid fine, <span>schedule as under</span>.
                        </h2>
                    </div>
                    <div class="feeulli">
                        <ul class="content-list mt-2">
                            <li class="li-flex">
                                <i class="fas fa-check-circle"></i>
                                <span>
                                    Late fee after one month Rs. 300.
                                </span>
                            </li>
                            <li class="li-flex">
                                <i class="fas fa-check-circle"></i>
                                <span>
                                    Late fee after two months Rs. 600.
                                </span>
                            </li>
                            <li class="li-flex">
                                <i class="fas fa-check-circle"></i>
                                <span>
                                    Fee defaulters will not be shown report cards/ Answer sheets and would be debarred from any test or examination until the pending dues are cleared.
                                </span>
                            </li>
                            <li class="li-flex">
                                <i class="fas fa-check-circle"></i>
                                <span>
                                    Transport fee is charged for all 12 months. Leaving transfer facilities requires at least one month’s prior notice.
                                </span>
                            </li>
                            <li class="li-flex">
                                <i class="fas fa-check-circle"></i>
                                <span>
                                    Students can deposit fees only during break time or before & after school.
                                </span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content-img wow fadeInRight" data-wow-delay=".25s">
                    <img src="{{asset('fronted/assets/sunbeam-img/about/about-us-page.jpg')}}" alt="about us" loading="lazy" decoding="async">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection