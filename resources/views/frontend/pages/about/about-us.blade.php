@extends('frontend.layouts.master')
@section('title','Sunbeam Academy - About us')
@section('description', 'Let a child become an independent learner who is morally strong and environmentally aware.')
@section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective')
@section('main-content')
<!-- breadcrumb -->
<!-- <div class="site-breadcrumb bread-head">
    <div class="container">
        <h2 class="breadcrumb-title">About Us</h2>
        
    </div>
</div> -->
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h2 class="breadcrumb-title">About Us</h2>
    </div>
</div>
<!-- breadcrumb end -->
<!-- about area -->
<div class="campus-tour pt-120 pb-30">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="content-info wow fadeInUp" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <span class="site-title-tagline">About Us</span>
                        <h2 class="site-title">
                            Welcome to <span>Sunbeam Academy</span>.
                        </h2>
                    </div>
                    <p class="content-text">
                        Sunbeam Academy schools are considered to be one of the best schools in and around Varanasi where your child will explore all the areas of art, education, and much more. We make sure that your child receives the best of education from the best faculty at a reputed school in Varanasi so that he/she has a brighter future and will make this nation a better place for everyone with their knowledge.
                    </p>
                    <p class="content-text mt-0">
                        Our thought and philosophy are based on deep-rooted Indian values and rich culture integrated with a global mindset. Our policies represent a vibrancy and sensitivity to the needs of all stakeholders. We aspire to equip our students with skills that will help them excel in life and prepare for their greater role in shaping the nation tomorrow.
                    </p>
                    <div class="about-button">
                        <a href="#" class="theme-btn">
                            CEO's Message
                            <i class="fas fa-arrow-right-long"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content-img wow fadeInRight" data-wow-delay=".25s">
                    <img src="{{asset('fronted/assets/sunbeam-img/about/about-us-page.jpg')}}" alt="about us">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about area -->
<!-- mission vission area -->
<div class="campus-tour pt-10 pb-40 bg">
    <div class="container">
        <div class="row mt-none-30">
            <div class="col-lg-6 mt-30">
                <div class="mission-vission-item wow fadeInRight" data-wow-delay=".25s">
                    <h3 class="xb-item--title">Our Mission</h3>
                    <p class="xb-item--content">
                        The Sunbeam Academy is committed to nurturing the inherent potential and talent of each child, creating lifelong learners who will be the leaders of tomorrow. With parents as our partners, we aspire to create global citizens who are innovative and have a strong sense of values.
                    </p>
                    <ul class="content-list mt-2">
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                To Give knowledge that can help a child to hold his head high with self-esteem in the future.
                            </span>
                        </li>
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                Impart knowledge which can provide his Hand a decent livelihood.
                            </span>
                        </li>
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                To fill the children’s hearts with compassion and sensibilities towards society and the Nation.
                            </span>
                        </li>
                    </ul>
                    <div class="xb-item--shape">
                        <div class="shape shape--1">
                            <img src="{{asset('fronted/assets/sunbeam-img/about/vm_shape1.png')}}" alt="img">
                        </div>
                        <div class="shape shape--2">
                            <img src="{{asset('fronted/assets/sunbeam-img/about/vm_shape2.png')}}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-30">
                <div class="mission-vission-item wow fadeInLeft" data-wow-delay=".25s">
                    <h3 class="xb-item--title">Our Vision</h3>
                    <p class="xb-item--content">
                        Sunbeam Academy strives to create an atmosphere of love, order, and freedom to help the child to have a balanced development of body, intellect, and emotion. Since our founding, our goal has been to become a global role model for teaching and learning. We aspire to prepare students for moral, healthy, productive, and successful lives. One of the foremost aims of this school is to lay the foundation of ethical and human values at a tender age. The Academy motivates the child to work without the temptation of reward, fear of punishment, or any kind of comparison and inspires the young ones to achieve excellence in every walk of life.
                    </p>
                    <ul class="content-list mt-2">
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                Values of honesty, compassion, tolerance, and respect for others.
                            </span>
                        </li>
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                Development of democratic and secular values.
                            </span>
                        </li>
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                Respect for our country's rich and varied heritage and a sense of national pride.
                            </span>
                        </li>
                    </ul>
                    <div class="xb-item--shape">
                        <div class="shape shape--1">
                            <img src="{{asset('fronted/assets/sunbeam-img/about/vm_shape1.png')}}" alt="img">
                        </div>
                        <div class="shape shape--2">
                            <img src="{{asset('fronted/assets/sunbeam-img/about/vm_shape2.png')}}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mission vission area -->
<!-- Spirit of Sunbeam Academy area -->
<div class="course-area spirit-section pt-40 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <h2 class="site-title">Spirit of <span>Sunbeam Academy</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="course-item spirit-section-item wow fadeInUp" data-wow-delay=".25s">
                    <a href="#">
                        <div class="course-content">
                            <h4 class="course-title">
                                Unrelenting Integrity
                            </h4>                        
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="course-item spirit-section-item wow fadeInUp" data-wow-delay=".25s">
                    <a href="#">
                        <div class="course-content">
                            <h4 class="course-title">
                                Unparalleled Studies
                            </h4>                        
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="course-item spirit-section-item wow fadeInUp" data-wow-delay=".25s">
                    <a href="#">
                        <div class="course-content">
                            <h4 class="course-title">
                                Unrivaled Activities
                            </h4>                        
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="course-item spirit-section-item wow fadeInUp" data-wow-delay=".25s">
                    <a href="#">
                        <div class="course-content">
                            <h4 class="course-title">
                                Undisputed Leadership
                            </h4>                        
                        </div>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- Spirit of Sunbeam Academy area -->
@endsection