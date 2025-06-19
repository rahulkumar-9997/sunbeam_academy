@extends('frontend.layouts.master')
@section('title','Sunbeam Academy - Contact Us')
@section('description', 'Let a child become an independent learner who is morally strong and environmentally aware.')
@section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective')
@section('main-content')
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h2 class="breadcrumb-title"> Contact Us</h2>
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
                        <form method="post" action="" id="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Your Name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" placeholder="Your Subject" required="">
                            </div>
                            <div class="form-group">
                                <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Write Your Message"></textarea>
                            </div>
                            <button type="submit" class="theme-btn">Send
                                Message <i class="far fa-paper-plane"></i></button>
                            <div class="col-md-12 mt-3">
                                <div class="form-messege text-success"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection