@extends('frontend.layouts.master')
@section('title','Sunbeam Academy - Deputy Directors Message')
@section('description', 'Let a child become an independent learner who is morally strong and environmentally aware.')
@section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective')
@section('main-content')
<!-- breadcrumb -->
<div class="site-breadcrumb bread-head">
    <div class="container">
        <h2 class="breadcrumb-title">Deputy Director's Message</h2>
        <!-- <ul class="breadcrumb-menu">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active">About Us</li>
        </ul> -->
    </div>
</div>
<!-- breadcrumb end -->
<!-- team single -->
<div class="team-single pt-120 pb-80 single-team">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="team-single-img">
                    <img src="{{asset('fronted/assets/sunbeam-img/team/duty-director.jpeg')}}" alt="Mr. K K Panda" class="w-100" loading="lazy" decoding="async">
                </div>
            </div>
            <div class="col-md-8">
                <div class="team-details">
                    <h3>Message by Deputy Director – </h3>
                    <h4> Mr. K K Panda</h4>
                    <strong>“Success is when your signature changes to autograph”-DR. APJ ABDUL KALAM.</strong>
                    <p class="mt-1">
                        Sunbeam Academy Group aspires all its students to succeed in their lives. We offer a wide variety of creative, enjoyable, and successful curricular opportunities, athletic programs, performing arts, and musical programs with various clubs and activities for the holistic development of each student to inculcate the 21st Century skills like creative thinking, problem-solving and impressive communication. We offer various seminars and counseling sessions that lead to the success of students at secondary and senior secondary stages as these workshops and seminars assess students’ ability to process, interpret and use information rather than assessing students’ knowledge.
                    </p>
                    <p>
                    Our schools are also committed to the optimum usage of technology to empower the mission of digital, clean, green, healthy, peaceful, and safe India. Academic excellence with character & personality development is our ultimate goal. The well-planned academic and co-curricular programs enable the students to attend their full potential and develop competent work habits. Highly personalized guidance and supervision are maintained for academic growth, as we believe that every child is special and must grow with a unique talent.
                    </p>
                    <div class="team-details-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- team single end -->

@endsection