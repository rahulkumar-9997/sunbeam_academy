@extends('frontend.layouts.master')
@section('title','Girls Hostel at Sunbeam Academy Varanasi CBSE School')
@section('description', 'Know more about Girls Hostel at Sunbeam Academy Varanasi, covering academics, activities, facilities, and student development.')
<!-- @section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective') -->
@section('main-content')
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h1 class="breadcrumb-title">Girls Hostel</h1>
    </div>
</div>
<div class="campus-tour pt-50 pb-30 weekly-boarding-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="content-info wow fadeInUp" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <h2 class="site-title">
                            <span>A Safe & Caring Home for Young Girls </span>
                        </h2>
                    </div>
                    <p class="content-text">
                        The Girls Hostel is thoughtfully designed to provide a safe, comfortable, and supportive environment where students can focus on their education while enjoying a homely atmosphere. Every aspect of the hostel is planned to ensure that students feel secure, relaxed, and well cared for during their stay. Clean and spacious rooms, proper supervision, and well-maintained facilities create a positive environment that supports both academic and personal growth. The hostel encourages discipline, responsibility, and independence, helping students develop important life skills while staying connected to their goals. With a structured routine and caring staff, students are guided in a way that makes their stay productive and stress-free.
                    </p>
                    <p class="content-text mt-0">
                       Along with comfortable living, the hostel promotes healthy eating, regular study habits, and overall well-being. Nutritious meals, hygienic surroundings, and a peaceful environment ensure that students remain physically and mentally active. Safety and supervision are given top priority, allowing parents to feel confident about their child’s well-being. The hostel also encourages participation in creative and co-curricular activities that help students build confidence and improve their social and communication skills. By providing a balanced environment that focuses on comfort, safety, and development, the Girls Hostel becomes a place where students can learn, grow, and prepare themselves for a bright and successful future.
                    </p>
                    
                </div>
            </div>
            <div class="col-lg-5">
                <div class="content-img wow fadeInRight" data-wow-delay=".25s">
                    <img src="{{asset('fronted/assets/sunbeam-img/page-img/girls-hostel.jpg')}}" alt="girls hostels" loading="lazy" decoding="async">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="campus-tour pt-10 pb-40 bg girls-hostel-adv">
    <div class="container">
        <div class="row mt-none-30 justify-content-center">
            <div class="col-lg-4 mt-30">
                <div class="mission-vission-item wow fadeInRight" data-wow-delay=".25s">
                    <h3 class="xb-item--title">
                       Comfortable & Peaceful Living
                    </h3>
                    <ul class="content-list mt-2">
                        <li class="li-flex">
                            <span>
                                Well-maintained and spacious rooms designed for comfort, privacy, and a homely atmosphere. 
                            </span>
                        </li>
                        <li class="li-flex">
                            <span>
                                Proper ventilation and clean surroundings that create a healthy and peaceful living environment. 
                            </span>
                        </li>                        
                    </ul>
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
            <div class="col-lg-4 mt-30">
                <div class="mission-vission-item wow fadeInLeft" data-wow-delay=".25s">
                    <h3 class="xb-item--title">Healthy & Hygienic Dining</h3>
                    <ul class="content-list mt-2">
                        <li class="li-flex">
                            <span>
                                Nutritious and balanced meals prepared under strict hygiene and quality standards. 
                            </span>
                        </li>
                        <li class="li-flex">
                            <span>
                                Clean and organized dining facilities that promote healthy eating habits and daily wellness. 
                            </span>
                        </li>                        
                    </ul>
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
            <div class="col-lg-4 mt-30">
                <div class="mission-vission-item wow fadeInLeft" data-wow-delay=".25s">
                    <h3 class="xb-item--title">Safety & 24×7 Care</h3>
                    <ul class="content-list mt-2">
                        <li class="li-flex">
                            <span>
                               Round-the-clock supervision by responsible wardens and trained staff for student safety. 
                            </span>
                        </li>
                        <li class="li-flex">
                            <span>
                                CCTV monitoring and secure entry systems ensuring a protected and disciplined environment. 
                            </span>
                        </li>                        
                    </ul>
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
            <div class="col-lg-4 mt-30">
                <div class="mission-vission-item wow fadeInLeft" data-wow-delay=".25s">
                    <h3 class="xb-item--title">Academic Support & Study Environment</h3>
                    <ul class="content-list mt-2">
                        <li class="li-flex">
                            <span>
                               Dedicated study hours and structured routines to help students stay focused on academics. 
                            </span>
                        </li>
                        <li class="li-flex">
                            <span>
                                Supportive guidance that encourages discipline, time management, and consistent learning habits. 
                            </span>
                        </li>                        
                    </ul>
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
            <div class="col-lg-4 mt-30">
                <div class="mission-vission-item wow fadeInLeft" data-wow-delay=".25s">
                    <h3 class="xb-item--title">Personal Growth & Well-being</h3>
                    <ul class="content-list mt-2">
                        <li class="li-flex">
                            <span>
                               Encouraging environment that builds confidence, independence, and responsibility in students. 
                            </span>
                        </li>
                        <li class="li-flex">
                            <span>
                                Opportunities to participate in creative and co-curricular activities for overall development.
                            </span>
                        </li>                        
                    </ul>
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