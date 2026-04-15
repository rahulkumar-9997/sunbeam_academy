@extends('frontend.layouts.master')
@section('title','Sunbeam School Cricket Academy | Sports Training')
@section('description', 'Check official updates for Cricket Academy at Sunbeam Academy Varanasi, covering academics, activities, facilities, and student development.')
<!-- @section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective') -->
@section('main-content')
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h1 class="breadcrumb-title">Cricket Academy</h1>
    </div>
</div>
<div class="campus-tour pt-50 pb-30 cricket-academy-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="content-info wow fadeInUp" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <h2 class="site-title">
                            <span>Cricket Academy – </span> Shaping Future Champions with <span>Skill </span> and Discipline.
                        </h2>
                    </div>
                    <p class="content-text">
                        The Cricket Academy is designed to provide students with a professional platform to learn and develop their cricketing skills in a structured and disciplined environment. Cricket is not just a sport; it teaches teamwork, patience, leadership, and dedication. The academy focuses on nurturing young talent by providing proper training, modern facilities, and expert guidance so that students can improve their game while building confidence and sportsmanship. The aim is to create an environment where students can learn the fundamentals of cricket and grow into skilled and disciplined players.
                    </p>
                    <p class="content-text mt-0">
                        The academy encourages students to actively participate in sports along with academics to maintain a healthy and balanced lifestyle. Regular practice sessions, guided coaching, and a supportive atmosphere help students understand the importance of hard work, consistency, and discipline. Cricket training also improves physical fitness, mental strength, and decision-making abilities, which are essential for both sports and everyday life. By providing a professional training environment, the Cricket Academy helps students develop their potential and work towards excellence in the sport.
                    </p>
                    
                </div>
            </div>
            <div class="col-lg-5">
                <div class="content-img wow fadeInRight" data-wow-delay=".25s">
                    <img src="{{asset('fronted/assets/sunbeam-img/page-img/sunbeam-cricekt-academy.jpg')}}" alt="Cricket Academy" loading="lazy" decoding="async">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="campus-tour pt-10 pb-40 bg others-two-scti">
    <div class="container">
        <div class="row mt-none-30">
            <div class="col-lg-6 mt-30">
                <div class="mission-vission-item wow fadeInRight" data-wow-delay=".25s">
                    <h3 class="xb-item--title">Modern Infrastructure & Professional Training</h3>
                    <p class="xb-item--content">
                        The Cricket Academy is equipped with modern infrastructure to provide students with a high-quality training experience. Well-maintained practice grounds, proper training equipment, and organized practice sessions create a professional environment where students can focus on improving their skills. The academy provides facilities for batting, bowling, and fielding practice, allowing students to develop all aspects of the game in a systematic manner.
                    </p>
                    <p class="xb-item--content">
                        Trained coaches guide students at every stage, from basic techniques to advanced cricket skills. They help students understand the correct posture, grip, bowling action, and fielding techniques to improve their overall performance. Regular practice and proper supervision ensure that students learn the game in a disciplined and safe environment. The structured training system helps students build confidence and develop a strong foundation in cricket.
                    </p>
                    <div class="xb-item--shape">
                        <div class="shape shape--1">
                            <img src="{{asset('fronted/assets/sunbeam-img/about/vm_shape1.png')}}" alt="img" loading="lazy" decoding="async">
                        </div>
                        <div class="shape shape--2">
                            <img src="{{asset('fronted/assets/sunbeam-img/about/vm_shape2.png')}}" alt="img" loading="lazy" decoding="async">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-30">
                <div class="mission-vission-item wow fadeInLeft" data-wow-delay=".25s">
                    <h3 class="xb-item--title">Fitness, Teamwork & Competitive Exposure</h3>
                    <p class="xb-item--content">
                        The Cricket Academy focuses on building physical fitness, teamwork, and competitive spirit among students. Regular fitness sessions, warm-up exercises, and practice matches help students improve stamina, coordination, and strength. Cricket requires strong teamwork and communication, and students learn how to work together, support their teammates, and perform under pressure during matches and training sessions.
                    </p>
                    <p class="xb-item--content">
                        The academy also encourages students to participate in tournaments and competitions to gain real match experience and exposure. Competitive participation helps students understand the spirit of sportsmanship and develop confidence in their abilities. Through regular matches and events, students learn how to handle success and challenges with a positive attitude. The Cricket Academy creates a balanced environment where discipline, training, and sportsmanship come together to shape confident players and responsible individuals ready to achieve their goals in sports and life.
                    </p>
                    <div class="xb-item--shape">
                        <div class="shape shape--1">
                            <img src="{{asset('fronted/assets/sunbeam-img/about/vm_shape1.png')}}" alt="img" loading="lazy" decoding="async">
                        </div>
                        <div class="shape shape--2">
                            <img src="{{asset('fronted/assets/sunbeam-img/about/vm_shape2.png')}}" alt="img" loading="lazy" decoding="async">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection