@extends('frontend.layouts.master')
@section('title','School Cinema at Sunbeam Academy Varanasi | CBSE School')
@section('description', 'Get insights into School Cinema at Sunbeam Academy Varanasi, covering academics, activities, facilities, and student development.')
<!-- @section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective') -->
@section('main-content')
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h1 class="breadcrumb-title">School Cinema</h1>
    </div>
</div>
<div class="campus-tour pt-50 pb-30 shooting-academy-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="content-info wow fadeInUp" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <h2 class="site-title">
                            School Cinema – Learning <span>Through Visual</span> Experience
                        </h2>
                    </div>
                    <p class="content-text">
                        School Cinema is an innovative initiative that helps students learn important life lessons through meaningful and educational films. It provides a unique platform where students can understand values, emotions, social responsibility, and real-life situations through carefully selected visual content. This approach makes learning more engaging, interactive, and relatable, allowing students to connect with important topics in a simple and effective way.
                    </p>
                    <p class="content-text mt-0">
                        Through School Cinema, students are introduced to stories and situations that encourage positive thinking, emotional intelligence, and responsible behavior. Watching educational films in a structured environment helps students understand real-life challenges, improve their decision-making skills, and develop a broader perspective about the world around them. It creates a healthy learning atmosphere where students can reflect, discuss, and learn valuable life skills beyond textbooks.
                    </p>
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content-img wow fadeInRight" data-wow-delay=".25s">
                    <img src="{{asset('fronted/assets/sunbeam-img/page-img/school-cinema.jpg')}}" alt="School Cinema" loading="lazy" decoding="async">
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
                    <h3 class="xb-item--title">
                        Value-Based Learning Through Films
                    </h3>
                    <p class="xb-item--content">
                        School Cinema focuses on delivering value-based education through carefully selected films and visual content. These films are designed to teach students important lessons such as respect, discipline, teamwork, honesty, empathy, and social awareness. By watching and discussing these films, students develop a better understanding of human values and ethical behavior in everyday life.
                    </p>
                    <p class="xb-item--content">
                        The visual format makes it easier for students to grasp complex ideas and situations in a simple and engaging manner. After each screening, students are encouraged to share their thoughts and learn from the experiences shown in the films. This interactive learning process helps them develop critical thinking, emotional understanding, and the ability to apply these lessons in real-life situations. School Cinema becomes a powerful tool for shaping responsible and thoughtful individuals.
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
                    <h3 class="xb-item--title">Interactive & Engaging Learning Environment</h3>
                    <p class="xb-item--content">
                        School Cinema creates an interactive and enjoyable learning environment where students actively participate in discussions and reflections after watching the films. This encourages open communication, confidence, and better understanding of different perspectives. Students learn to express their thoughts, listen to others, and develop a balanced approach to problem-solving and decision-making.
                    </p>
                    <p class="xb-item--content">
                        The initiative also supports emotional and social development by helping students understand relationships, teamwork, and self-awareness. It provides a safe space where students can explore real-life situations and learn how to handle challenges with confidence and maturity. By combining education with visual storytelling, School Cinema makes learning more interesting and impactful, helping students grow into responsible, confident, and socially aware individuals ready to face the future with strong values and clear understanding.
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