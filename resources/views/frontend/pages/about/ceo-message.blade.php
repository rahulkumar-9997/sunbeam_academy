@extends('frontend.layouts.master')
@section('title','Sunbeam Academy - CEO - Message')
@section('description', 'Let a child become an independent learner who is morally strong and environmentally aware.')
@section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective')
@section('main-content')
<!-- breadcrumb -->
<div class="site-breadcrumb bread-head">
    <div class="container">
        <h2 class="breadcrumb-title">CEO - Message</h2>
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
                    <img src="{{asset('fronted/assets/sunbeam-img/team/ceo-1.jpg')}}" alt="CEO - Message" loading="lazy" decoding="async">
                </div>
            </div>
            <div class="col-md-8">
                <div class="team-details">
                    <h3>Message by CEO – </h3>
                    <h4>Mr. Rohan Madhok</h4>
                    <strong>“Education is an ornament in prosperity and a refuge in adversity.”-Aristotle.</strong>
                    <p class="mt-1">
                        Education dispels the darkness of ignorance; it is the mirror of contemporary society. Proper education not only leads to the enlightenment of individuals but also plays a major role in the development of a nation. Thus, a school is an avenue, and a teacher is a medium through which children can avail quality education. We at Sunbeam Academy Group leave no stone unturned to make sure that our students develop into successful men and women of upright character and righteous conduct.
                    </p>
                    <p>
                        One of the foremost aims of this group is to lay the foundation of ethical and human values at a tender age. We encourage our students to be curious, compassionate, and good human beings to render their responsibilities towards Nation and mankind. We strive to create self-confidence in our students and give them the opportunity to bloom in goodness and Global Commitment.
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