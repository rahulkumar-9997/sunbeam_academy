@extends('frontend.layouts.master')
@section('title','Shooting Academy at Sunbeam Academy Varanasi | CBSE School')
@section('description', 'Find details on Shooting Academy at Sunbeam Academy Varanasi, covering academics, activities, facilities, and student development.')
<!-- @section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective') -->
@section('main-content')
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h1 class="breadcrumb-title">Shooting Academy</h1>
    </div>
</div>
<div class="campus-tour pt-50 pb-30 shooting-academy-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="content-info wow fadeInUp" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <h2 class="site-title">
                            Shooting Academy – Building <span>Focus, Discipline, and Sporting Excellence</span> .
                        </h2>
                    </div>
                    <p class="content-text">
                        The Shooting Academy provides students with a professional platform to learn and practice the sport of shooting in a safe and disciplined environment. It is designed to develop concentration, precision, and self-control among students while promoting sportsmanship and confidence. Shooting as a sport requires patience, mental strength, and steady focus, and the academy helps students build these qualities through structured training and proper guidance. The aim of the Shooting Academy is to nurture young talent and provide them with opportunities to explore shooting as a competitive sport while maintaining the highest standards of safety and discipline.
                    </p>
                    <p class="content-text mt-0">
                        The academy offers a well-managed and controlled environment where students can learn the basics of shooting and gradually improve their skills under expert supervision. With proper infrastructure and trained instructors, students receive the right guidance to understand techniques, safety measures, and discipline required in the sport. This initiative encourages students to develop confidence, improve concentration, and maintain mental balance, which also supports their academic performance and overall personality development.
                    </p>
                    
                </div>
            </div>
            <div class="col-lg-5">
                <div class="content-img wow fadeInRight" data-wow-delay=".25s">
                    <img src="{{asset('fronted/assets/sunbeam-img/page-img/sunbeam-shooting-academy.jpg')}}" alt="Shooting Academy" loading="lazy" decoding="async">
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
                    <h3 class="xb-item--title">Modern Infrastructure & Safe Training Environment</h3>
                    <p class="xb-item--content">
                        The Shooting Academy is equipped with modern facilities that provide a safe and structured training environment for students. The range is designed with proper safety measures, controlled supervision, and organized practice sessions to ensure that students learn the sport responsibly. Every activity in the academy follows strict safety guidelines, and trained professionals supervise all sessions to maintain discipline and security at all times.
                    </p>
                    <p class="xb-item--content">
                        Students are introduced to shooting techniques step by step, starting from basic training to advanced practice. Proper instructions, regular monitoring, and guided sessions help students understand the importance of safety, control, and responsibility while practicing the sport. The structured environment ensures that students feel confident and comfortable while learning, making the academy a safe and professional place for skill development. Parents can also feel assured that their children are training in a secure and well-regulated environment.
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
                    <h3 class="xb-item--title">Skill Development, Focus & Competitive Growth</h3>
                    <p class="xb-item--content">
                        The Shooting Academy focuses on improving students’ focus, patience, and mental strength through regular practice and training sessions. Shooting requires deep concentration and calmness, and students gradually learn how to control their mind and body during practice. This helps them develop discipline, self-control, and confidence, which are valuable qualities for both sports and academics. Regular training sessions also improve hand-eye coordination, decision-making ability, and consistency in performance.
                    </p>
                    <p class="xb-item--content">
                        The academy also encourages students to participate in competitions and events to gain exposure and practical experience. Competitive participation helps students build confidence, learn teamwork, and understand the spirit of sportsmanship. With proper training and continuous encouragement, students can develop their skills and aim for higher levels in the sport. The Shooting Academy creates a balanced environment where discipline, focus, and sports excellence come together to support students in achieving their full potential and building a strong and confident future.
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