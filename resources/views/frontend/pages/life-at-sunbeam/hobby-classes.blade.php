@extends('frontend.layouts.master')
@section('title','Sunbeam Academy Hobby Classes & Activities')
@section('description', 'Explore Hobby Classes at Sunbeam Academy Varanasi, covering academics, activities, facilities, and student development.')
<!-- @section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective') -->
@section('main-content')
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h1 class="breadcrumb-title">Hobby Classes</h1>
    </div>
</div>
<div class="campus-tour pt-50 pb-30 shooting-academy-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="content-info wow fadeInUp" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <h2 class="site-title">
                            <span> Hobby Classes – </span>Encouraging Creativity and Overall Development
                        </h2>
                    </div>
                    <p class="content-text">
                        Hobby Classes are an important part of a student’s overall growth and personality development. They provide students with opportunities to explore their interests, develop new skills, and express their creativity beyond regular academics. These classes help students relax, learn something new, and discover their hidden talents in a supportive and engaging environment. The aim is to create a balanced learning experience where students not only focus on studies but also enjoy activities that enhance their confidence and imagination.
                    </p>
                    <p class="content-text mt-0">
                       Hobby classes play a vital role in reducing academic stress and improving mental well-being. When students participate in creative and skill-based activities, they develop better focus, communication skills, and problem-solving abilities. These activities encourage teamwork, discipline, and self-expression, helping students grow into confident and well-rounded individuals. By providing structured hobby sessions, the school ensures that students get equal opportunities to explore their passions and build skills that will benefit them in the future.
                    </p>
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content-img wow fadeInRight" data-wow-delay=".25s">
                    <img src="{{asset('fronted/assets/sunbeam-img/page-img/hobby-classess.jpg')}}" alt="Hobby Classess" loading="lazy" decoding="async">
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
                        Creative & Skill-Based Learning
                    </h3>
                    <p class="xb-item--content">
                        Hobby classes offer a wide range of creative and skill-based activities that help students explore their interests and talents. Activities such as art and craft, music, dance, drawing, painting, and other creative sessions allow students to express themselves freely and develop their artistic abilities. These sessions are designed to encourage imagination, creativity, and innovation among students while making learning enjoyable and interactive.
                    </p>
                    <p class="xb-item--content">
                        The classes are conducted in a structured and supportive environment where students receive proper guidance and encouragement from trained instructors. Each activity helps students develop patience, concentration, and confidence, which are essential for both academic and personal success. By participating in these creative sessions, students learn to think differently, express their ideas, and build a strong sense of self-belief.
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
                    <h3 class="xb-item--title">Personality Development & Balanced Growth</h3>
                    <p class="xb-item--content">
                        Hobby classes also focus on improving students' personality and overall development. Participation in various activities helps students become more confident, disciplined, and socially active. It encourages teamwork, leadership, and communication skills, which are important for their future growth. Students learn how to manage their time effectively and balance their academic responsibilities with creative and recreational activities.
                    </p>
                    <p class="xb-item--content">
                        These classes also promote mental relaxation and emotional well-being, allowing students to stay motivated and energetic throughout their academic journey. Engaging in hobbies helps students build a positive attitude, reduce stress, and maintain a healthy balance between studies and personal interests. By encouraging students to participate in hobby classes, the school creates an environment that supports creativity, confidence, and holistic development, helping every student grow into a skilled and well-rounded individual ready to achieve their goals.
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