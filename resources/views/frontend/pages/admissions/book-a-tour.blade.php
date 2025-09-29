@extends('frontend.layouts.master')
@section('title','Sunbeam Academy - Book a Tour')
@section('description', 'Let a child become an independent learner who is morally strong and environmentally aware.')
@section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective')
@section('main-content')
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h2 class="breadcrumb-title">Book a Tour</h2>
    </div>
</div>
<div class="alumni book-atour pt-120 pb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="content-img wow fadeInLeft" data-wow-delay=".25s">
                    <img src="{{asset('fronted/assets/sunbeam-img/about/about-us-page.jpg')}}" alt="book a tour" loading="lazy" decoding="async">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content-info wow fadeInUp" data-wow-delay=".25s">
                    <div class="site-heading mb-3">

                        <h2 class="site-title">
                            Book a <span>Tour </span>
                        </h2>
                    </div>
                    <p class="content-text">
                        Sunbeam Academy- Durgakund Campus tour is an exquisite opportunity for parents to discuss the school benefits, student life, curriculum, subjects offered, learning facilities, SMART Infrastructure, and much more.
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
<section class="steps-area p-relative first" style="background-color: #116f5f;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="tour-title wow fadeInLeft  animated" data-animation="fadeInLeft" data-delay=".4s">
                    <h3>Tour of the Campus</h3>
                </div>
                <div class="tour-details">
                    <p>
                        For a personalized campus visit, we motivate parents to register for a campus tour or a virtual meeting which will make the journey fulfilling and enduring. Our specialized team will assist you through the tour. We invite you to the amazing journey and be a part of the Sunbeam Academic Group Fraternity.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="step-img wow fadeInLeft  animated" data-animation="fadeInLeft" data-delay=".4s">
                    <img src="{{ asset('fronted/assets/sunbeam-img/tour-1.jpg') }}" alt="class image" loading="lazy" decoding="async">
                </div>
            </div>
        </div>

    </div>
</section>
<section class="steps-area p-relative second" style="background-color: #fda31b;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-7">
                <div class="step-img-left wow fadeInLeft  animated" data-animation="fadeInLeft" data-delay=".4s">
                    <img src="{{ asset('fronted/assets/sunbeam-img/tour-2.jpg') }}" alt="class image" loading="lazy" decoding="async">
                </div>
            </div>
            <div class="col-lg-5 col-md-5">
                <div class="tour-title wow fadeInLeft  animated" data-animation="fadeInLeft" data-delay=".4s">
                    <h3>Assessment</h3>
                </div>
                <div class="tour-details">
                    <p>
                        Specially-trained staff will walk you around the campus, viewing key student spaces to provide you with a better understanding of the full student experience. Guests are welcome to ask questions throughout the tour, including questions about your academic program of interest. Sunbeam Academy Group has an assessment process during the campus tour to analyze the capability and knowledge of the students and recommend the right learning journey.
                    </p>
                    <p>
                        This is a part of our admission process that is conducted by our admission counselors during the counseling session and just before the registration process.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="contact-area pt-80 pb-90">
    <div class="container">
        <div class="contact-wrapper">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-img">
                        <img src="{{ asset('fronted/assets/img/contact/01.jpg')}}" alt="" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-7 align-self-center">
                    <div class="contact-form">
                        <div class="contact-form-header">
                            <h2>Book Now</h2>
                            
                        </div>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" placeholder="Your phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="date">
                                    </div>
                                </div>
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