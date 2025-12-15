@extends('frontend.layouts.master')
@section('title','Sunbeam Academy - Boys Hostel')
@section('description', 'Let a child become an independent learner who is morally strong and environmentally aware.')
@section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective')
@section('main-content')
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h2 class="breadcrumb-title">Boys Hostel</h2>
        <h5 style="color:#ffffff; margin-top: 10px;">Ekalavya Hostel</h5>
    </div>
</div>
<div class="youtube-video-section pb-10 pt-20">
    <div class="container">
        <div class="youtube-video-content">
            <div class="row justify-content-md-center">
                <div class="col-lg-7 col-md-12">
                    <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
                        <iframe
                            class="w-100 h-100 border-0"
                            src="https://www.youtube.com/embed/_4rKIh4l2tM?autoplay=1&mute=1&loop=1&playlist=_4rKIh4l2tM&controls=0&playsinline=1&rel=0"
                            title="YouTube video player"
                            allow="autoplay; encrypted-media; picture-in-picture"
                            allowfullscreen
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="alumni boys-hostel-main pt-120 pb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="content-img wow fadeInLeft" data-wow-delay=".25s">
                    <img src="{{ asset('fronted/assets/sunbeam-img/ekalavya-hostel.jpg')}}" alt="Ekalavya Hostel" loading="lazy">
                </div>
            </div>
            <div class="col-lg-7 boys-side-content">
                <div class="content-info wow fadeInUp" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <h2 class="site-title">
                            A Modern Haven for <span>Bright Young</span> Minds.
                        </h2>
                    </div>
                    <p class="content-text">
                        <strong>Ekalavya Hostel,</strong> an abode of excellence where contemporary design meets unmatched comfort. Thoughtfully planned and elegantly executed, Ekalavya Hostel stands as a symbol of modern student living in Eastern Uttar Pradesh.
                    </p>
                    <p class="content-text">
                        Every corner of this architectural marvel reflects innovation, safety, and convenience. With state-of-the-art infrastructure, spacious rooms, and all the modern amenities a student could ask for, Ekalavya Hostel redefines what it means to live, learn, and grow away from home.
                    </p>
                    <p class="content-text">
                        From high-speed connectivity and smart study zones to recreation lounges and hygienic dining facilities — every feature has been designed keeping the needs of today’s learners in mind.
                    </p>
                    <p class="content-text">
                        At Ekalavya Hostel, we go beyond providing accommodation — we create an environment that inspires confidence, fosters community, and nurtures the leaders of tomorrow.
                    </p>
                    <p class="content-text">
                        Experience a new benchmark in student living, where comfort and care come together to make every day a step toward excellence.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="campus-tour pt-10 pb-40 boys-hostel-facaulities boys-h-bg">
    <div class="container">
        <div class="row mt-none-30 justify-content-center">
            <div class="col-lg-4 mt-30">
                <div class="mission-vission-item wow fadeInRight" data-wow-delay=".25s">
                    <h3 class="xb-item--title">Modern & Comfortable Living</h3>

                    <ul class="content-list mt-2">
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                <strong>Air-conditioned hostels,</strong> ensuring privacy, comfort, and a homely atmosphere.
                            </span>
                        </li>
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                <strong>Spacious dormitories </strong> and <strong> well-ventilated rooms</strong>, designed to offer the perfect balance between personal space and community living.
                            </span>
                        </li>

                    </ul>
                    <div class="xb-item--shape">
                        <div class="shape shape--1">
                            <img src="{{ asset('fronted/assets/sunbeam-img/about/vm_shape1.png')}}" alt="img" loading="lazy" decoding="async">
                        </div>
                        <div class="shape shape--2">
                            <img src="{{ asset('fronted/assets/sunbeam-img/about/vm_shape2.png')}}" alt="img" loading="lazy" decoding="async">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-30">
                <div class="mission-vission-item wow fadeInLeft" data-wow-delay=".25s">
                    <h3 class="xb-item--title">Nutritious Dining Experience</h3>
                    <ul class="content-list mt-2">
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                A <strong>mess with all modern amenities</strong> serving wholesome, balanced, and delicious meals.
                            </span>
                        </li>
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                Hygienic dining facilities that promote healthy eating habits and overall well-being.
                            </span>
                        </li>
                    </ul>
                    <div class="xb-item--shape">
                        <div class="shape shape--1">
                            <img src="{{ asset('fronted/assets/sunbeam-img/about/vm_shape1.png')}}" alt="img" loading="lazy" decoding="async">
                        </div>
                        <div class="shape shape--2">
                            <img src="{{ asset('fronted/assets/sunbeam-img/about/vm_shape2.png')}}" alt="img" loading="lazy" decoding="async">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-30">
                <div class="mission-vission-item wow fadeInLeft" data-wow-delay=".25s">
                    <h3 class="xb-item--title">Safety & Supervision</h3>
                    <ul class="content-list mt-2">
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                <strong>24x7 warden supervision</strong> and constant <strong>CCTV monitoring</strong> for complete security.
                            </span>
                        </li>
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                <strong>Regulated entry and exit</strong> systems ensuring a safe and disciplined environment for every resident.
                            </span>
                        </li>
                    </ul>
                    <div class="xb-item--shape">
                        <div class="shape shape--1">
                            <img src="{{ asset('fronted/assets/sunbeam-img/about/vm_shape1.png')}}" alt="img" loading="lazy" decoding="async">
                        </div>
                        <div class="shape shape--2">
                            <img src="{{ asset('fronted/assets/sunbeam-img/about/vm_shape2.png')}}" alt="img" loading="lazy" decoding="async">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-30">
                <div class="mission-vission-item wow fadeInLeft" data-wow-delay=".25s">
                    <h3 class="xb-item--title">Academic & Personal Growth</h3>
                    <ul class="content-list mt-2">
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                <strong>Remedial classes</strong> for academic support and skill enhancement.
                            </span>
                        </li>
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                <strong> Hobby classes</strong> that encourage creativity, expression, and balanced development
                            </span>
                        </li>
                    </ul>
                    <div class="xb-item--shape">
                        <div class="shape shape--1">
                            <img src="{{ asset('fronted/assets/sunbeam-img/about/vm_shape1.png')}}" alt="img" loading="lazy" decoding="async">
                        </div>
                        <div class="shape shape--2">
                            <img src="{{ asset('fronted/assets/sunbeam-img/about/vm_shape2.png')}}" alt="img" loading="lazy" decoding="async">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-30">
                <div class="mission-vission-item wow fadeInLeft" data-wow-delay=".25s">
                    <h3 class="xb-item--title">Beyond the Classroom</h3>
                    <ul class="content-list mt-2">
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                <strong> Access to extra-curricular activities</strong> even beyond school hours, allowing students to continue exploring their interests.
                            </span>
                        </li>
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                World-class <strong>Cricket Academy</strong> and <strong>Shooting Range,</strong> nurturing sporting talent and instilling a spirit of excellence.
                            </span>
                        </li>
                    </ul>
                    <div class="xb-item--shape">
                        <div class="shape shape--1">
                            <img src="{{ asset('fronted/assets/sunbeam-img/about/vm_shape1.png')}}" alt="img" loading="lazy" decoding="async">
                        </div>
                        <div class="shape shape--2">
                            <img src="{{ asset('fronted/assets/sunbeam-img/about/vm_shape2.png')}}" alt="img" loading="lazy" decoding="async">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection