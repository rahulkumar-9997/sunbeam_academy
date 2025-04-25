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
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeFa-uo3Np_Ea032d7yPWVvqxW5oU-uRZl8J8lMvB5FHeibfQ/closedform?pli=1" target="_blank">
                                Register Now
                                <i class="far fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="department-download">
                            <a href="{{ route('contact-us') }}">
                                Know More
                                <i class="far fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="site-heading">
                            <h2 class="site-title">Application  <span>Details</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="registration-process">
                            <ul class="content-list mt-2">
                                <li class="li-flex">
                                    <i class="fas fa-check-circle"></i>
                                    <span>
                                        Exam Date: 19th January 2025
                                    </span>
                                </li>
                                <li class="li-flex">
                                    <i class="fas fa-check-circle"></i>
                                    <span>
                                        Venue: Sunbeam Academy Knowledge Park, Baraipur, Mirzapur
                                    </span>
                                </li>
                                <li class="li-flex">
                                    <i class="fas fa-check-circle"></i>
                                    <span>
                                        Helpline: +91 9554958024
                                    </span>
                                </li>
                                <li class="li-flex">
                                    <i class="fas fa-check-circle"></i>
                                    <span>
                                        <a href="{{ url('/') }}"> 
                                            www.sunbeamacademy.com
                                        </a>
                                    </span>
                                </li>
                            </ul>
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
                                <img src="{{asset('fronted/assets/sunbeam-img/sathee/sathee-about.jpg')}}" alt="about us">
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
                            <img src="{{asset('fronted/assets/sunbeam-img/sathee/why-participate/price.svg')}}" alt="Price">
                        </div>
                        <p class="sathee-box-price">Prize Pool of ₹1 Crore+</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-16">
                <div class="whatnew-box-two">
                    <div class="sathee-box-ye">
                        <div class="about-item-icon">
                            <img src="{{asset('fronted/assets/sunbeam-img/sathee/why-participate/recognize.svg')}}" alt="Recognize">
                        </div>
                        <p class="sathee-box-price">Recognize Your Talent</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-16">
                <div class="whatnew-box-two">
                    <div class="sathee-box-ye">
                        <div class="about-item-icon">
                            <img src="{{asset('fronted/assets/sunbeam-img/sathee/why-participate/laptops.svg')}}" alt="Laptops">
                        </div>
                        <p class="sathee-box-price">Win Laptops, Tablets & Smartwatches</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-16">
                <div class="whatnew-box-two">
                    <div class="sathee-box-ye">
                        <div class="about-item-icon">
                            <img src="{{asset('fronted/assets/sunbeam-img/sathee/why-participate/fee.svg')}}" alt="School">
                        </div>
                        <p class="sathee-box-price">50% School Fee Waiver for Top Rankers</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-16">
                <div class="whatnew-box-two">
                    <div class="sathee-box-ye">
                        <div class="about-item-icon">
                            <img src="{{asset('fronted/assets/sunbeam-img/sathee/why-participate/uniforms.svg')}}" alt="Uniforms">
                        </div>
                        <p class="sathee-box-price">Free Uniforms for Deserving Students</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-16">
                <div class="whatnew-box-two">
                    <div class="sathee-box-ye">
                        <div class="about-item-icon">
                            <img src="{{asset('fronted/assets/sunbeam-img/sathee/why-participate/classes.svg')}}" alt="Classes">
                        </div>
                        <p class="sathee-box-price">Open for Classes VI to IX & XI</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="course-area spirit-section pt-40 pb-40 why-participate bg">
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
        <div class="feature-wrapper price-wrapper">
            <div class="row g-4">
                <div class="col-md-20 mb-3 mb-xl-0 col-6 pe-xl-0 ps-xl-2">
                    <div class="feature-item">
                        <span class="count">Rank 01</span>
                        <div class="feature-icon">
                            <img src="{{asset('fronted/assets/sunbeam-img/sathee/prizes-rewards/laptop.svg')}}" alt="Laptop">
                        </div>
                        <div class="feature-content">
                            <h4 class="feature-title">Laptop</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-20 mb-3 mb-xl-0 col-6 pe-xl-0 ps-xl-2">
                    <div class="feature-item">
                        <span class="count">Rank 02</span>
                        <div class="feature-icon">
                            <img src="{{asset('fronted/assets/sunbeam-img/sathee/prizes-rewards/tablet.svg')}}" alt="Tablet">
                        </div>
                        <div class="feature-content">
                            <h4 class="feature-title">Tablet</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-20 mb-3 mb-xl-0 col-6 pe-xl-0 ps-xl-2">
                    <div class="feature-item">
                        <span class="count">Rank 03</span>
                        <div class="feature-icon">
                            <img src="{{asset('fronted/assets/sunbeam-img/sathee/prizes-rewards/smartphone.svg')}}" alt="Smartphone">
                        </div>
                        <div class="feature-content">
                            <h4 class="feature-title">Smartphone</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-20 mb-3 mb-xl-0 col-6 pe-xl-0 ps-xl-2">
                    <div class="feature-item">
                        <span class="count">Rank 04</span>
                        <div class="feature-icon">
                            <img src="{{asset('fronted/assets/sunbeam-img/sathee/prizes-rewards/smart-watch.svg')}}" alt="Smart Watch">
                        </div>
                        <div class="feature-content">
                            <h4 class="feature-title">Smart Watch</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-20 mb-3 mb-xl-0 col-6 pe-xl-0 ps-xl-2">
                    <div class="feature-item">
                        <span class="count">Rank 05</span>
                        <div class="feature-icon">
                            <img src="{{asset('fronted/assets/sunbeam-img/sathee/prizes-rewards/smart-watch2.svg')}}" alt="Smart Watch">
                        </div>
                        <div class="feature-content">
                            <h4 class="feature-title">Smart Watch</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-20 mb-3 mb-xl-0 col-6 pe-xl-0 ps-xl-2">
                    <div class="feature-item">
                        <span class="count">Rank 06</span>
                        <div class="feature-icon">
                            <img src="{{asset('fronted/assets/sunbeam-img/sathee/prizes-rewards/earbuds.svg')}}" alt="6th–10th Earbuds & Gifts">
                        </div>
                        <div class="feature-content">
                            <h4 class="feature-title">6th–10th Earbuds & Gifts</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="mt-3 text-center">
                        <h5>
                            Additional rewards like fee discounts and free uniforms!
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="course-area spirit-section pt-40 pb-40 why-participate scholarship-benefits">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <h2 class="site-title">Scholarship <span>Benefits</span></h2>
                    <p>
                        Special Scholarships for Top Performers.
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-lg-4">
                <div class="notice-item">
                    <h4>
                        <a href="#">
                            Rank 1–5
                        </a>
                    </h4>
                    <div class="notice-meta-old">
                        <span>50% Off on School Fees</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="notice-item">
                    <h4>
                        <a href="#">Rank 6–10</a>
                    </h4>
                    <div class="notice-meta-old">
                        <span>30% Off on School Fees</span>

                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="text-center">
                    <h5 class="mb-3">Additional Free School Uniform for deserving students.</h5>
                    <h5>Scholarships are also available for other meritorious participants.</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="course-area spirit-section pt-40 pb-40 why-participate exam-details-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center exam-heading">
                    <h2 class="site-title">Exam <span>Details</span></h2>
                    <p>
                        Mark Your Calendar.
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-lg-3">
                <div class="scholarship-item exam-item">
                    <div class="scholarship-icon">
                        <img src="{{asset('fronted/assets/sunbeam-img/sathee/exam-details/test-date.svg')}}" alt="Test Date">
                    </div>
                    <h4>Test Date</h4>
                    <p>
                        Sunday, 19th January 2025
                    </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="scholarship-item exam-item">
                    <div class="scholarship-icon">
                        <img src="{{asset('fronted/assets/sunbeam-img/sathee/exam-details/time.svg')}}" alt="Time">
                    </div>
                    <h4>Time</h4>
                    <p>
                        11:30 AM – 12:30 PM
                    </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="scholarship-item exam-item">
                    <div class="scholarship-icon">
                        <img src="{{asset('fronted/assets/sunbeam-img/sathee/exam-details/venue.svg')}}" alt="Venue">
                    </div>
                    <h4>Venue</h4>
                    <p>
                        Sunbeam Academy Knowledge Park, Baraipur, Mirzapur
                    </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="scholarship-item exam-item">
                    <div class="scholarship-icon">
                        <img src="{{asset('fronted/assets/sunbeam-img/sathee/exam-details/contact.svg')}}" alt="Contact">
                    </div>
                    <h4>Contact</h4>
                    <p>
                        +91 9554958024
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="course-area spirit-section pt-40 pb-40 why-participate register-process">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <h2 class="site-title">How to <span>Register?</span></h2>
                    <p>
                        Simple Registration Process
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            
            <div class="col-lg-6">
                <div class="registration-process text-center">
                    <div class="qr-img">
                        <img src="{{asset('fronted/assets/sunbeam-img/sathee/register-qr.png')}}" alt="register">
                    </div>
                    <p>Scan the above QR code or visit 
                        <a href="{{ url('/') }}"> 
                            www.sunbeamacademy.com
                        </a>
                    </p>
                    <p>
                        Fill in your details and choose your class.
                    </p>
                    <p>
                        Submit and receive confirmation.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection