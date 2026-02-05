@extends('frontend.layouts.master')
@section('title','Contact Us | Sunbeam School Varanasi')
@section('description', 'Learn about Contact Us at Sunbeam Academy Varanasi, covering academics, activities, facilities, and student development.')
<!-- @section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective') -->
@section('main-content')
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h1 class="breadcrumb-title"> Contact Us</h1>
    </div>
</div>
<div class="contact-area py-120">
    <div class="container">
        <div class="contact-content">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="contact-info">
                        <div class="contact-info-icon">
                            <i class="fal fa-map-location-dot"></i>
                        </div>
                        <div class="contact-info-content">
                            <h5>Address</h5>
                            <p>
                                Garhwa Ghat Rd, Samne Ghat, Bhagwanpur, Varanasi, Uttar Pradesh 221005
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="contact-info">
                        <div class="contact-info-icon">
                            <i class="fal fa-phone-volume"></i>
                        </div>
                        <div class="contact-info-content">
                            <h5>Call Us</h5>
                            <p>
                                <a href="tel:+919554958414">
                                 +919554958414
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="contact-info">
                        <div class="contact-info-icon">
                            <i class="fal fa-envelopes"></i>
                        </div>
                        <div class="contact-info-content">
                            <h5>Email Us</h5>
                            <p>
                                <a href="mailto:info@sunbeamacademy.com">
                                    info@sunbeamacademy.com
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="contact-info">
                        <div class="contact-info-icon">
                            <i class="fal fa-alarm-clock"></i>
                        </div>
                        <div class="contact-info-content">
                            <h5>Open Time</h5>
                            <p>Mon - Sat (08:00AM - 05:00PM)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-wrapper">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-img">
                        <img src="{{asset('fronted/assets/img/contact/01.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-7 align-self-center">
                    <div class="contact-form">
                        <div class="contact-form-header">
                            <h2>Get In Touch</h2>
                            
                        </div>
                        @include('frontend.pages.common.branches-enquiry-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection