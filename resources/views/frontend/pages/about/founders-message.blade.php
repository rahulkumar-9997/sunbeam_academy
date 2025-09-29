@extends('frontend.layouts.master')
@section('title','Sunbeam Academy - About us')
@section('description', 'Let a child become an independent learner who is morally strong and environmentally aware.')
@section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective')
@section('main-content')
<!-- breadcrumb -->
<div class="site-breadcrumb bread-head">
    <div class="container">
        <h2 class="breadcrumb-title">Founder's Message</h2>
        <!-- <ul class="breadcrumb-menu">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active">About Us</li>
        </ul> -->
    </div>
</div>
<!-- breadcrumb end -->
<!-- team-area -->
<div class="team-area py-120 founders-section">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-4 col-lg-4">
                <div class="team-item wow fadeInUp" data-wow-delay=".25s">
                    <div class="team-img">
                        <img src="{{asset('fronted/assets/sunbeam-img/team/director-1.jpg')}}" alt="thumb" loading="lazy" decoding="async">
                    </div>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="team-content">
                        <div class="team-bio">
                            <h5><a href="#">Poonam Madhok</a></h5>
                            <span>Director</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="team-item wow fadeInUp" data-wow-delay=".50s">
                    <div class="team-img">
                        <img src="{{asset('fronted/assets/sunbeam-img/team/secretary-1.jpg')}}" alt="Jagdeep Madhok" loading="lazy" decoding="async">
                    </div>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="team-content">
                        <div class="team-bio">
                            <h5><a href="#">Jagdeep Madhok</a></h5>
                            <span>Secretary</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mx-auto message-section">
                <div class="site-heading text-center">
                    <h2 class="site-title">
                        Founder’s <span>Message</span>
                    </h2>
                </div>
                <p>
                    As a school, this institution has to fulfill the expectations of society that its young generation is successfully trained to brighten themselves towards self-sustenance as well as carry forward its legacy. What could this school do but use academics to achieve this legitimate social fulfillment!.
                </p>
                <p>
                    We have taken into consideration two aspects of modern learning; one, that every learner’s abilities are more complex than their scores on standardized tests, and two, that there is something seriously amiss in the contemporary obsession with economic growth, domination of technology over nature and the mad rush for competition. So, two seminal modes of holistic education are applied here, one for the early childhood learners as a way of cultivating the moral, emotional, psychological, spiritual, and physical dimensions along with intellect; the other for the upper and board class students as a way of creating their high caliber of employability yet more than the narrowness of simply molding them into future cloned workers or citizens. Still, that holistic education is in contrast with mainstream education, too much of it vied against the pressure of contemporary syllabus and competition would be proverbially like looking to London and talking to Tokyo. This school applies it only rationally.
                </p>
                <p>
                    How we make it happen materializes on the fact that we pick up the right teachers, strive to prompt effectiveness in their teaching, ensure that the academic infrastructure is updated to the modern parameters, and then see to it that all this readiness is actually delivered to the student.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mx-auto message-section">
                <div class="site-heading text-center">
                    <h2 class="site-title">
                        About The<span> Founder</span>
                    </h2>
                </div>
                <p>
                    As a school, this institution has to fulfill the expectations of society that its young generation is successfully trained to brighten themselves towards self-sustenance as well as carry forward its legacy. What could this school do but use academics to achieve this legitimate social fulfillment!.
                </p>
                <p>
                    We have taken into consideration two aspects of modern learning; one, that every learner’s abilities are more complex than their scores on standardized tests, and two, that there is something seriously amiss in the contemporary obsession with economic growth, domination of technology over nature and the mad rush for competition. So, two seminal modes of holistic education are applied here, one for the early childhood learners as a way of cultivating the moral, emotional, psychological, spiritual, and physical dimensions along with intellect; the other for the upper and board class students as a way of creating their high caliber of employability yet more than the narrowness of simply molding them into future cloned workers or citizens. Still, that holistic education is in contrast with mainstream education, too much of it vied against the pressure of contemporary syllabus and competition would be proverbially like looking to London and talking to Tokyo. This school applies it only rationally.
                </p>
                <p>
                    How we make it happen materializes on the fact that we pick up the right teachers, strive to prompt effectiveness in their teaching, ensure that the academic infrastructure is updated to the modern parameters, and then see to it that all this readiness is actually delivered to the student.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- team-area end -->
@endsection