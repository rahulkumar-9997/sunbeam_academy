@extends('frontend.layouts.master')
@section('title','Sunbeam Academy - Sathee')
@section('description', 'Sunbeam Academy Talent Hunt Entrance Examination, India’s Biggest Talent Hunt for School Students')
@section('main-content')
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h2 class="breadcrumb-title">Sunbeam Academy Talent Hunt Entrance Examination</h2>
    </div>
</div>
<div class="department-area pt-50 pb-20 sathee-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">SATHEE</span>
                    <h2 class="site-title">India’s Biggest Talent Hunt for <span>School Students</span></h2>
                    <p>
                        Win Exciting Prizes Worth Over ₹1 Crore – Laptops, Tablets, Smartwatches & Scholarships!
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="department-download">
                            <a href="#">
                                Register Now
                                <i class="far fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="department-download">
                            <a href="#">
                                Know More
                                <i class="far fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="exam-details">
                            <div class="details-right">
                                <h3 class="mb-3">Application Details</h3>

                                <ul class="content-list mt-2">
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        Exam Date: 19th January 2025
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        Venue: Sunbeam Academy Knowledge Park, Baraipur, Mirzapur
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        Helpline: +91 9554958024
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        www.sunbeamacademy.com
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="department-area pt-80 pb-60 sathee-area about-sathee-area">
    <div class="about-sathee campus-tour">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-10">
                    <div class="row align-items-center">
                        <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline">About SATHEE</span>
                                <h2 class="site-title">
                                    What is <span>SATHEE</span>?
                                </h2>
                            </div>
                            <p class="about-text">
                                SATHEE – Sunbeam Academy Talent Hunt Entrance Examination – is a golden opportunity for students of Classes VI to IX and XI to prove their talent and win scholarships and prizes. Open to all students, this exam rewards academic excellence with gadgets, scholarships, and special school fee concessions.
                            </p>

                        </div>
                        <div class="col-lg-6">
                            <div class="content-img  wow fadeInRight" data-wow-delay=".25s">
                                <img src="{{asset('fronted/assets/sunbeam-img/about/about-us-page.jpg')}}" alt="about us">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="course-area spirit-section pt-40 pb-40 why-participate">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <h2 class="site-title">Why Participate<span>?</span></h2>
                    <p>
                        You Shouldn’t Miss This.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-16">
                <div class="whatnew-box-two">
                    <div class="sathee-box-ye">
                        <div class="about-item-icon">
                            <img src="{{asset('fronted/assets/img/icon/open-book.svg')}}" alt="">
                        </div>
                        <p class="sathee-box-price">Prize Pool of ₹1 Crore+</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-16">
                <div class="whatnew-box-two">
                    <div class="sathee-box-ye">
                        <div class="about-item-icon">
                            <img src="{{asset('fronted/assets/img/icon/open-book.svg')}}" alt="">
                        </div>
                        <p class="sathee-box-price">Recognize Your Talent</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-16">
                <div class="whatnew-box-two">
                    <div class="sathee-box-ye">
                        <div class="about-item-icon">
                            <img src="{{asset('fronted/assets/img/icon/open-book.svg')}}" alt="">
                        </div>
                        <p class="sathee-box-price">Win Laptops, Tablets & Smartwatches</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-16">
                <div class="whatnew-box-two">
                    <div class="sathee-box-ye">
                        <div class="about-item-icon">
                            <img src="{{asset('fronted/assets/img/icon/open-book.svg')}}" alt="">
                        </div>
                        <p class="sathee-box-price">50% School Fee Waiver for Top Rankers</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-16">
                <div class="whatnew-box-two">
                    <div class="sathee-box-ye">
                        <div class="about-item-icon">
                            <img src="{{asset('fronted/assets/img/icon/open-book.svg')}}" alt="">
                        </div>
                        <p class="sathee-box-price">Free Uniforms for Deserving Students</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-16">
                <div class="whatnew-box-two">
                    <div class="sathee-box-ye">
                        <div class="about-item-icon">
                            <img src="{{asset('fronted/assets/img/icon/open-book.svg')}}" alt="">
                        </div>
                        <p class="sathee-box-price">Open for Classes VI to IX & XI</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="course-area spirit-section pt-40 pb-40 why-participate">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <h2 class="site-title">Prizes &<span> Rewards</span></h2>
                    <p>
                        Exciting Prizes Await You
                    </p>
                </div>
            </div>
        </div>
        <div class="feature-wrapper">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item">
                        <span class="count">01</span>
                        <div class="feature-icon">
                            <img src="assets/img/icon/scholarship.svg" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="feature-title">Scholarship Facility</h4>
                            <p>It is a long established fact that a reader will be distracted.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item">
                        <span class="count">02</span>
                        <div class="feature-icon">
                            <img src="assets/img/icon/teacher.svg" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="feature-title">Skilled Lecturers</h4>
                            <p>It is a long established fact that a reader will be distracted.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item">
                        <span class="count">03</span>
                        <div class="feature-icon">
                            <img src="assets/img/icon/library.svg" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="feature-title">Book Library Facility</h4>
                            <p>It is a long established fact that a reader will be distracted.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item">
                        <span class="count">04</span>
                        <div class="feature-icon">
                            <img src="assets/img/icon/money.svg" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="feature-title">Affordable Price</h4>
                            <p>It is a long established fact that a reader will be distracted.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection