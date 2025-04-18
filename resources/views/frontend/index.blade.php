@extends('frontend.layouts.master')
@section('title','Sunbeam Academy - Best School in Varanasi')
@section('description', 'Let a child become an independent learner who is morally strong and environmentally aware.')
@section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective')
@section('main-content')
@include('frontend.layouts.banner-top')
<!-- feature area -->
<div class="feature-area home-feature fa-negative home-branches">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-xl-12 col-lg-12">
                <div class="feature-wrapper">
                    <div class="row">
                        <div class="col-xl-20">
                            <div class="feature-item">
                                <!-- <span class="count">01</span> -->
                                <!--<div class="feature-icon">
                                            <img src="assets/img/icon/scholarship.svg" alt="">
                                        </div>-->
                                <div class="branch-feature">
                                    <h3>
                                        Sunbeam Academy Samneghat
                                    </h3>
                                </div>
                                <div class="feature-content">
                                    <!-- <h4 class="feature-title">Experienced Teachers</h4> -->
                                    <p>
                                    Young minds grow every day with care, creativity, and joyful learning all around.
                                    </p>
                                    <p>
                                        <a href="tel:+919554958414">
                                            +91 95549 58414
                                        </a>
                                    </p>
                                    <p>
                                        <a href="mailto:info@sunbeamacademy.com">
                                            info@sunbeamacademy.com
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-20">
                            <div class="feature-item">
                                <!-- <span class="count">02</span> -->
                                <!-- <div class="feature-icon">
                                            <img src="assets/img/icon/teacher.svg" alt="">
                                        </div> -->
                                <div class="branch-feature">
                                    <h3>
                                        Sunbeam Academy Durgakund
                                    </h3>
                                </div>
                                <div class="feature-content">
                                    <!-- <h4 class="feature-title">Experienced Teachers</h4> -->
                                    <p>
                                    A perfect blend of strong values, fun learning, and happy, active classrooms.
                                    </p>
                                    <p>
                                        <a href="tel:+919554958414">
                                            +91 95549 58414
                                        </a>
                                    </p>
                                    <p>
                                        <a href="mailto:info@sunbeamacademy.com">
                                            info@sunbeamacademy.com
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-20">
                            <div class="feature-item">
                                <!-- <span class="count">03</span> -->
                                <!-- <div class="feature-icon">
                                            <img src="assets/img/icon/library.svg" alt="">
                                        </div> -->
                                <div class="branch-feature">
                                    <h3>
                                        Sunbeam Academy Sarainandan
                                    </h3>
                                </div>
                                <div class="feature-content">
                                    <!-- <h4 class="feature-title">Experienced Teachers</h4> -->
                                    <p>
                                    Confidence, kindness, and joyful learning come together to shape every child’s day.
                                    </p>
                                    <p>
                                        <a href="tel:+919554958414">
                                            +91 95549 58414
                                        </a>
                                    </p>
                                    <p>
                                        <a href="mailto:info@sunbeamacademy.com">
                                            info@sunbeamacademy.com
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-20">
                            <div class="feature-item">
                                <!-- <span class="count">04</span> -->
                                <!-- <div class="feature-icon">
                                            <img src="assets/img/icon/money.svg" alt="">
                                        </div> -->
                                <div class="branch-feature">
                                    <h3>
                                        Sunbeam Academy Knowledge Park
                                    </h3>
                                </div>
                                <div class="feature-content">
                                    <!-- <h4 class="feature-title">Experienced Teachers</h4> -->
                                    <p>
                                    Curious minds become confident learners through playful and smart learning methods.
                                    </p>
                                    <p>
                                        <a href="tel:+919554958414">
                                            +91 95549 58414
                                        </a>
                                    </p>
                                    <p>
                                        <a href="mailto:info@sunbeamacademy.com">
                                            info@sunbeamacademy.com
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-20">
                            <div class="feature-item">
                                <!-- <span class="count">04</span> -->
                                <!-- <div class="feature-icon">
                                            <img src="assets/img/icon/money.svg" alt="">
                                        </div> -->
                                <div class="branch-feature">
                                    <h3>
                                        Sunbeam Academy Ghazipur
                                    </h3>
                                </div>
                                <div class="feature-content">
                                    <!-- <h4 class="feature-title">Experienced Teachers</h4> -->
                                    <p>
                                    Every child begins their journey with love, care, and bright learning experiences.
                                    </p>
                                    <p>
                                        <a href="tel:+919554958414">
                                            +91 95549 58414
                                        </a>
                                    </p>
                                    <p>
                                        <a href="mailto:info@sunbeamacademy.com">
                                            info@sunbeamacademy.com
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- feature area end -->
<!-- about area -->
<div class="about-area py-120">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                    <div class="about-img">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <img class="img-1" src="{{asset('fronted/assets/sunbeam-img/about/about-6.jpg')}}" alt="img">
                                <div class="about-experience mt-4">
                                    <div class="about-experience-icon">
                                        <img src="{{asset('fronted/assets/img/icon/exchange-idea.svg')}}" alt="img">
                                    </div>
                                    <b class="text-start">Driven by Dedication <br> Creating Impact with Care</b>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img class="img-2" src="{{asset('fronted/assets/sunbeam-img/about/about-7.jpg')}}" alt="img">
                                <img class="img-3 mt-4" src="{{asset('fronted/assets/sunbeam-img/about/about-1.jpg')}}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> About Us</span>
                        <h2 class="site-title">
                            Welcome to <span>Sunbeam Academy</span> .
                        </h2>
                    </div>
                    <p class="about-text">
                        At Sunbeam Academy, we lay the foundation for a bright future by providing quality education, strong values, and lots of opportunities for children to learn, grow, and dream big in a supportive atmosphere.
                    </p>
                    <div class="about-content">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="about-item">
                                    <div class="about-item-icon">
                                        <img src="{{asset('fronted/assets/img/icon/open-book.svg')}}" alt="">
                                    </div>
                                    <div class="about-item-content">
                                        <h5>Smart Learning</h5>
                                        <p>Children learn with fun activities, stories, games, and projects that make every day exciting and easy to understand.</p>
                                    </div>
                                </div>
                                <div class="about-item">
                                    <div class="about-item-icon">
                                        <img src="{{asset('fronted/assets/img/icon/global-education.svg')}}" alt="img">
                                    </div>
                                    <div class="about-item-content">
                                        <h5>Personalized Attention</h5>
                                        <p>Our teachers pay close attention to each child, making sure everyone gets the support they need to succeed.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="about-quote">
                                    <p>At Sunbeam Academy, we help your child become confident, kind, and ready for the future — all with a smile!</p>
                                    <i class="far fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-bottom">
                        <a href="{{ route('about-us') }}" class="theme-btn">Read More<i
                                class="fas fa-arrow-right-long"></i></a>
                        <div class="about-phone">
                            <div class="icon"><i class="fal fa-headset"></i></div>
                            <div class="number">
                                <span>Call Now</span>
                                <h6><a href="tel:++919554958414">+91 95549 58414</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about area end -->
<!-- counter area -->
<div class="counter-area pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="counter-box">
                    <div class="icon">
                        <img src="{{asset('fronted/assets/img/icon/course.svg')}}" alt="">
                    </div>
                    <div>
                        <span class="counter" data-count="+" data-to="4000" data-speed="3000">4000</span>
                        <h6 class="title">+ No. of Current Students </h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="counter-box">
                    <div class="icon">
                        <img src="{{asset('fronted/assets/img/icon/graduation.svg')}}" alt="">
                    </div>
                    <div>
                        <span class="counter" data-count="+" data-to="150" data-speed="3000">150</span>
                        <h6 class="title">+ No. of Teachers</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="counter-box">
                    <div class="icon">
                        <img src="{{asset('fronted/assets/img/icon/teacher-2.svg')}}" alt="">
                    </div>
                    <div>
                        <span class="counter" data-count="+" data-to="400" data-speed="3000">400</span>
                        <h6 class="title">+ No. of Hostel Students</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="counter-box">
                    <div class="icon">
                        <img src="{{asset('fronted/assets/img/icon/award.svg')}}" alt="">
                    </div>
                    <div>
                        <span class="counter" data-count="+" data-to="5000" data-speed="3000">5000</span>
                        <h6 class="title">+ Strength of Alumni</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- counter area end -->
<!-- course-area -->
<div class="course-area pt-120 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline"><i class="far fa-book-open-reader"></i>Our Academic  Offerings</span>
                    <h2 class="site-title">School <span>Levels</span></h2>
                    <p>
                    Sunbeam Academy nurtures creativity and leadership, helping students build the skills they need to thrive and lead the future.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="course-item wow fadeInUp" data-wow-delay=".25s">
                    <div class="course-img">
                        <span class="course-tag">
                            <i class="far fa-bookmark"></i>
                            Kindergarden
                        </span>
                        <img src="{{asset('fronted/assets/sunbeam-img/school-level/school-level-kindergarten.jpg')}}" alt="img">
                        <a href="#" class="btn"><i class="far fa-link"></i></a>
                    </div>
                    <div class="course-content">
                        <!-- <div class="course-meta">
                                    <span class="course-meta-left"><i class="far fa-book"></i> 10 Lessons</span>
                                    <div class="course-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span>(4.0)</span>
                                    </div>
                                </div> -->
                        <h4 class="course-title">
                            <a href="#">Kindergarden</a>
                        </h4>
                        <p class="course-text">
                            We offer the best practices of modern pre-school education.
                        </p>
                        <!-- <div class="course-bottom">
                                    <div class="course-bottom-left">
                                        <span><i class="far fa-users"></i>75 Seats</span>
                                        <span><i class="far fa-clock"></i>04 Years</span>
                                    </div>
                                    <span class="course-price">$750</span>
                                </div> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="course-item wow fadeInUp" data-wow-delay=".50s">
                    <div class="course-img">
                        <span class="course-tag"><i class="far fa-bookmark"></i> Primary</span>
                        <img src="{{asset('fronted/assets/sunbeam-img/school-level/school-level-primary-1.jpg')}}" alt="img">
                        <a href="#" class="btn"><i class="far fa-link"></i></a>
                    </div>
                    <div class="course-content">

                        <h4 class="course-title">
                            <a href="#">Primary School</a>
                        </h4>
                        <p class="course-text">
                            A quick glance at our primary school program and facilities.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="course-item wow fadeInUp" data-wow-delay=".75s">
                    <div class="course-img">
                        <span class="course-tag"><i class="far fa-bookmark"></i> Secondary </span>
                        <img src="{{asset('fronted/assets/sunbeam-img/school-level/school-level-secondary-1.jpg')}}" alt="img">
                        <a href="#" class="btn"><i class="far fa-link"></i></a>
                    </div>
                    <div class="course-content">

                        <h4 class="course-title">
                            <a href="#">Secondary School</a>
                        </h4>
                        <p class="course-text">
                            Focuses on the all – around development of 11 to 14 year-olds.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-12">
                <div class="text-center">
                    <a href="#" class="theme-btn mt-20">View All Classes
                        <i class="fas fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- course-area -->
<!-- video-area -->
<!--<div class="video-area">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Latest Video</span>
                        <h2 class="site-title">
                            Let's Check Our <span>Latest</span> Video
                        </h2>
                    </div>
                    <p class="about-text">
                        There are many variations of passages available but the majority have suffered
                        alteration in some form by injected humour look even slightly believable.
                    </p>
                    <a href="about.html" class="theme-btn mt-30">Learn More<i class="fas fa-arrow-right-long"></i></a>
                </div>
                <div class="col-lg-8 wow fadeInRight" data-wow-delay=".25s">
                    <div class="video-content" style="background-image: url({{asset('fronted/assets/img/video/01.jpg')}});">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="video-wrapper">
                                    <a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=ckHzmP1evNU">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
<!-- video-area end -->
<!-- team-area -->
<div class="team-area pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline"><i class="far fa-book-open-reader"></i>Our Honorable Team </span>
                    <h2 class="site-title">Meet Our <span>Team</span></h2>
                    <p>Our team at Sunbeam Academy is committed to helping every student learn, grow, and succeed.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-6 col-lg-4">
                <div class="team-item wow fadeInUp" data-wow-delay=".25s">
                    <div class="team-img">
                        <img src="{{asset('fronted/assets/sunbeam-img/team/secretary-1.jpg')}}" alt="thumb">
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
            <div class="col-md-6 col-lg-4">
                <div class="team-item wow fadeInUp" data-wow-delay=".50s">
                    <div class="team-img">
                        <img src="{{asset('fronted/assets/sunbeam-img/team/director-1.jpg')}}" alt="thumb">
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
            <div class="col-md-6 col-lg-4">
                <div class="team-item wow fadeInUp" data-wow-delay=".75s">
                    <div class="team-img">
                        <img src="{{asset('fronted/assets/sunbeam-img/team/ceo-1.jpg')}}" alt="thumb">
                    </div>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="team-content">
                        <div class="team-bio">
                            <h5><a href="teacher-single.html">Rohan Madhok</a></h5>
                            <span>CEO</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="team-item wow fadeInUp" data-wow-delay="1s">
                    <div class="team-img">
                        <img class="w-100" src="{{asset('fronted/assets/sunbeam-img/team/duty-director.jpeg')}}" alt="thumb">
                    </div>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="team-content">
                        <div class="team-bio">
                            <h5><a href="teacher-single.html">K K Panda</a></h5>
                            <span>Deputy Director</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- team-area end -->
<!-- choose-area -->
<div class="choose-area pt-80 pb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="choose-content wow fadeInUp" data-wow-delay=".25s">
                    <div class="choose-content-info">
                        <div class="site-heading mb-0">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Why Choose Us ?</span>
                            <h2 class="site-title text-white mb-10">Your success is <span>our mission !</span></h2>
                            <p class="text-white">
                            At Sunbeam Academy, we mix smart learning with care, so every student feels confident and ready for the future.
                            </p>
                        </div>
                        <div class="choose-content-wrap">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="choose-item">
                                        <div class="choose-item-icon">
                                            <img src="{{asset('fronted/assets/img/icon/teacher-2.svg')}}" alt="img">
                                        </div>
                                        <div class="choose-item-info">
                                            <h4>Expert Teachers</h4>
                                            <p>Our teachers aren’t just qualified — they care. They explain things in simple ways and are always ready to help.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="choose-item">
                                        <div class="choose-item-icon">
                                            <img src="{{asset('fronted/assets/img/icon/course-material.svg')}}" alt="img">
                                        </div>
                                        <div class="choose-item-info">
                                            <h4>Course Material</h4>
                                            <p>Well-planned notes, easy explanations, and practice work that really prepares you for exams.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="choose-item">
                                        <div class="choose-item-icon">
                                            <img src="{{asset('fronted/assets/img/icon/online-course.svg')}}" alt="img">
                                        </div>
                                        <div class="choose-item-info">
                                            <h4>Personal Attention</h4>
                                            <p>Every student matters to us. We guide you step-by-step and clear every doubt.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="choose-item">
                                        <div class="choose-item-icon">
                                            <img src="{{asset('fronted/assets/img/icon/money.svg')}}" alt="img">
                                        </div>
                                        <div class="choose-item-info">
                                            <h4>Safe & Supportive Environment</h4>
                                            <p>A place where you feel safe, respected, and motivated to do your best.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="choose-img wow fadeInRight" data-wow-delay=".25s">
                    <img src="{{asset('fronted/assets/sunbeam-img/why-choose-us.jpg')}}" alt="img">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- choose-area end -->
<!-- gallery-area -->
<div class="gallery-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Our Moments</span>
                    <h2 class="site-title">Snapshots of  <span>School Life</span></h2>
                    <p>From classroom fun to stage performances, these photos capture the heart of Sunbeam Academy.
                        <br>Have a look at the smiles, creativity, and memories we create every day!
                    </p>
                </div>
            </div>
        </div>
        <div class="row popup-gallery">
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".25s">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img src="{{asset('fronted/assets/sunbeam-img/gallery/gallery-1.jpg')}}" alt="img">
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{asset('fronted/assets/sunbeam-img/gallery/gallery-1.jpg')}}">
                            <i class="fal fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".25s">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img src="{{asset('fronted/assets/sunbeam-img/gallery/gallery-2.jpg')}}" alt="">
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{asset('fronted/assets/sunbeam-img/gallery/gallery-2.jpg')}}"><i
                                class="fal fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".50s">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img src="{{asset('fronted/assets/sunbeam-img/gallery/gallery-3.jpg')}}" alt="">
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{asset('fronted/assets/sunbeam-img/gallery/gallery-3.jpg')}}"><i
                                class="fal fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".25s">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img src="{{asset('fronted/assets/sunbeam-img/gallery/gallery-4.jpg')}}" alt="">
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{asset('fronted/assets/sunbeam-img/gallery/gallery-4.jpg')}}"><i
                                class="fal fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".75s">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img src="{{asset('fronted/assets/sunbeam-img/gallery/gallery-5.jpg')}}" alt="">
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{asset('fronted/assets/sunbeam-img/gallery/gallery-5.jpg')}}"><i
                                class="fal fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".25s">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img src="{{asset('fronted/assets/sunbeam-img/gallery/gallery-6.jpg')}}" alt="">
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{asset('fronted/assets/sunbeam-img/gallery/gallery-6.jpg')}}"><i
                                class="fal fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".25s">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img src="{{asset('fronted/assets/sunbeam-img/gallery/gallery-7.jpg')}}" alt="">
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{asset('fronted/assets/sunbeam-img/gallery/gallery-7.jpg')}}"><i
                                class="fal fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".25s">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img src="{{asset('fronted/assets/sunbeam-img/gallery/gallery-8.jpg')}}" alt="">
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{asset('fronted/assets/sunbeam-img/gallery/gallery-8.jpg')}}"><i
                                class="fal fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".25s">
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img src="{{asset('fronted/assets/sunbeam-img/gallery/gallery-9.jpg')}}" alt="">
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{asset('fronted/assets/sunbeam-img/gallery/gallery-9.jpg')}}"><i
                                class="fal fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- gallery-area end -->
<!-- enroll area-->
<div class="enroll-area pt-80 pb-80">
    <div class="container">
        <div class="col-lg-12">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="enroll-left wow fadeInLeft" data-wow-delay=".25s">
                        <div class="enroll-form">
                            <div class="enroll-form-header">
                                <h3>Start Your Journey With Us</h3>
                                <p>Join Sunbeam Academy – where learning begins with care and confidence.</p>
                            </div>
                            <form action="#">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <select class="form-select" name="service">
                                        <option value="">Choose Course</option>
                                        <option value="1">Art And Design</option>
                                        <option value="2">Acting And Drama</option>
                                        <option value="3">Accounting And Finance</option>
                                        <option value="4">Biology And Conservation</option>
                                        <option value="5">Science And Engineering</option>
                                        <option value="6">Health Administration</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Type Message"
                                        rows="4"></textarea>
                                </div>
                                <button class="theme-btn">Enroll Now<i class="fas fa-arrow-right-long"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="enroll-right wow fadeInUp" data-wow-delay=".25s">
                        <div class="skill-content">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Our Skills</span>
                                <h2 class="site-title text-white">
                                What Makes <span>Sunbeam Academy </span>Special
                                </h2>
                            </div>
                            <p class="text-white">
                            We focus on every part of a child’s growth — from studies to skills, confidence to creativity. Here’s a glimpse of our strengths.
                            </p>
                            <div class="skills-section">
                                <div class="progress-box">
                                    <h5>
                                        Student Happiness 
                                        <span class="pull-right">90%</span>
                                    </h5>
                                    <p>
                                        Our students love coming to school and feel supported.
                                    </p>
                                    <div class="progress" data-value="90">
                                        <div class="progress-bar" role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <h5>Teacher Dedication  <span class="pull-right">95%</span></h5>
                                    <p>
                                        Caring, qualified, and passionate educators.
                                    </p>
                                    <div class="progress" data-value="95">
                                        <div class="progress-bar" role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <h5>Creative Learning <span class="pull-right">85%</span></h5>
                                    <p>
                                        Hands-on activities, smart classes, and modern teaching.
                                    </p>
                                    <div class="progress" data-value="85">
                                        <div class="progress-bar" role="progressbar"></div>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <h5>Safe Environment  <span class="pull-right">100%</span></h5>
                                    <p>
                                        We ensure a happy and secure space for all children.
                                    </p>
                                    <div class="progress" data-value="100">
                                        <div class="progress-bar" role="progressbar"></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- enroll area end -->
<!-- blog area -->
<div class="blog-area home-blog py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Our Blog</span>
                    <h2 class="site-title">Sunbeam Updates & <span>Highlights</span></h2>
                    <p>Your one-stop corner for everything new and exciting at our school.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                    <!-- <div class="blog-date"><i class="fal fa-calendar-alt"></i> June 18, 2024</div> -->
                    <div class="blog-item-img">
                        <img src="{{asset('fronted/assets/sunbeam-img/blog/1.jpg')}}" alt="Thumb">
                    </div>
                    <div class="blog-item-info">
                        <!--<div class="blog-item-meta">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                    </ul>
                                </div>-->
                        <h4 class="blog-title">
                            <a href="#">
                                Beyond the Books: Our Co-Curricular Activities in Action
                            </a>
                        </h4>
                        <a class="theme-btn" href="#">Read More
                            <i class="fas fa-arrow-right-long"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="blog-item wow fadeInUp" data-wow-delay=".50s">

                    <div class="blog-item-img">
                        <img src="{{asset('fronted/assets/sunbeam-img/blog/2.jpg')}}" alt="Thumb">
                    </div>
                    <div class="blog-item-info">

                        <h4 class="blog-title">
                            <a href="#">
                                Science Made Fun: Quiz Competitions That Sparked Curiosity
                            </a>
                        </h4>
                        <a class="theme-btn" href="#">Read More
                            <i class="fas fa-arrow-right-long"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="blog-item wow fadeInUp" data-wow-delay=".75s">

                    <div class="blog-item-img">
                        <img src="{{asset('fronted/assets/sunbeam-img/blog/3.jpg')}}" alt="Thumb">
                    </div>
                    <div class="blog-item-info">

                        <h4 class="blog-title">
                            <a href="#">
                                Unity in Diversity: Highlights from Our Inter-Branch Competitions
                            </a>
                        </h4>
                        <a class="theme-btn" href="#">Read More
                            <i class="fas fa-arrow-right-long"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog area end -->
<!-- testimonial area -->
<div class="testimonial-area bg pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">
                        <i class="far fa-book-open-reader"></i>
                        Hear From Our Community
                    </span>
                    <h2 class="site-title">What People  <span>Say About Us</span></h2>
                    <p>From everyday activities to special events.
                        It is a long established fact that visuals speak louder than words and offer a deeper connection to our journey.</p>                        
                    </p>
                   
                </div>
            </div>
        </div>
        <div class="testimonial-slider owl-carousel owl-theme">
            <div class="testimonial-item">
                <div class="testimonial-rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="testimonial-quote">
                    <p>
                    Every dream gets wings at this school. Every talent is nurtured and given a platform. It’s the best school, with a perfect combination of ...
                    </p>
                    <a href="javascript: void(0);" class="btn btn-link read-more-tes" data-bs-toggle="modal" data-bs-target="#modal1">Read More</a>
                </div>
                <div class="testimonial-content">
                    <div class="testimonial-author-img">
                        <img src="{{asset('fronted/assets/img/testimonial/02.jpg')}}" alt="">
                    </div>
                    <div class="testimonial-author-info">
                        <h4>Sumit</h4>
                        <p>Student</p>
                    </div>
                </div>
                <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="testimonial-quote">
                    <p>
                    One of the most trusted schools in Varanasi. My nephew, Bhavy Seth (V-B), is studying here. The facilities, transport, security, and infrastructure are excellent. 
                    </p>
                    <a href="javascript: void(0);" class="btn btn-link read-more-tes" data-bs-toggle="modal" data-bs-target="#modal2">Read More</a>
                </div>
                <div class="testimonial-content">
                    <div class="testimonial-author-img">
                        <img src="{{asset('fronted/assets/img/testimonial/03.jpg')}}" alt="">
                    </div>
                    <div class="testimonial-author-info">
                        <h4>Pramod kumar Seth
                        </h4>
                        <p>Student</p>
                    </div>
                </div>
                <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="testimonial-quote">
                    <p>
                    I am truly impressed with this school and the positive impact it has had on the children. It’s clear that the school is committed to providing top-notch...
                    </p>
                    <a href="javascript: void(0);" class="btn btn-link read-more-tes" data-bs-toggle="modal" data-bs-target="#modal3">Read More</a>
                </div>
                <div class="testimonial-content">
                    <div class="testimonial-author-img">
                        <img src="{{asset('fronted/assets/img/testimonial/04.jpg')}}" alt="">
                    </div>
                    <div class="testimonial-author-info">
                        <h4>Aryaj singh</h4>
                        <p>Student</p>
                    </div>
                </div>
                <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
            </div>
            
        </div>
    </div>
</div>
<!-- testimonial area end -->
<div class="modal fade" id="modal1" tabindex="-1">
  <div class="modal-dialog"><div class="modal-content">
    <div class="modal-header"><h5 class="modal-title">Testimonial - Sumit</h5><button class="btn-close" data-bs-dismiss="modal"></button></div>
    <div class="modal-body">
      Every dream gets wings at this school. Every talent is nurtured and given a platform. It’s the best school, with a perfect combination of academics and co-curricular activities. Strict discipline is maintained. I had a great experience in a supportive environment. A special mention to Rachana Ma’am at the front desk—her quick problem resolution and excellent service have made every interaction a positive one.
    </div>
  </div></div>
</div>

<div class="modal fade" id="modal2" tabindex="-1">
  <div class="modal-dialog"><div class="modal-content">
    <div class="modal-header"><h5 class="modal-title">Testimonial - Pramod Kumar Seth</h5><button class="btn-close" data-bs-dismiss="modal"></button></div>
    <div class="modal-body">
      One of the most trusted schools in Varanasi. My nephew, Bhavy Seth (V-B), is studying here. The facilities, transport, security, and infrastructure are excellent. The teachers are good, and the front office service is quick and efficient. Rachana, Ma’am is polite and cooperative. A great place for a child’s dynamic growth.
    </div>
  </div></div>
</div>

<div class="modal fade" id="modal3" tabindex="-1">
  <div class="modal-dialog"><div class="modal-content">
    <div class="modal-header"><h5 class="modal-title">Testimonial - Aryaj Singh</h5><button class="btn-close" data-bs-dismiss="modal"></button></div>
    <div class="modal-body">
      I am truly impressed with this school and the positive impact it has had on the children. It’s clear that the school is committed to providing top-notch education in a nurturing and supportive environment. A special mention to Rachana Ma’am at the front desk—her quick problem resolution and excellent service have made every interaction smooth and positive.
    </div>
  </div></div>
</div>

<div class="modal fade" id="modal4" tabindex="-1">
  <div class="modal-dialog"><div class="modal-content">
    <div class="modal-header"><h5 class="modal-title">Testimonial</h5><button class="btn-close" data-bs-dismiss="modal"></button></div>
    <div class="modal-body">
      This is one of those rare schools where a student not only unlocks his or her potential to stand on their own feet, but also becomes a better human being in the process.
    </div>
  </div></div>
</div>  
@endsection