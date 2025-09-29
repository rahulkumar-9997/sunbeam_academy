@extends('frontend.layouts.master')
@section('title','Sunbeam Academy - Academic Support Programs')
@section('description', 'Let a child become an independent learner who is morally strong and environmentally aware.')
@section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective')
@section('main-content')
<!-- breadcrumb -->
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h2 class="breadcrumb-title">Academic Support Programs</h2>
    </div>
</div>
<!-- breadcrumb end -->
<div class="campus-tour pt-120 pb-60 academic-one-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="content-info wow fadeInUp" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <h2 class="site-title">
                            Our Academic Support<span> Programs</span>
                        </h2>
                    </div>
                    <p class="content-text">
                        A core component of holistic education is the Extra-Curricular and Co-Curricular activities that shape the development of students. They are instrumental in honing the talents and developing social skills, critical thinking and teamwork.
                    </p>
                    <p class="content-text mt-0">
                        Our school has an array of Extra Curricular Activities and Co-Curricular Activities for the benefit of our students. It is mandatory for our students to participate in at least one activity under both categories. To instil a sense of belonging, camaraderie and brotherhood among students, many of these activities are held by grouping students into four Houses which encourages healthy competition, a hunger for winning and pride in accomplishments.
                    </p>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="content-img wow fadeInRight" data-wow-delay=".25s">
                    <img src="{{asset('fronted/assets/sunbeam-img/about/about-us-page.jpg')}}" alt="about us" loading="lazy" decoding="async">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="alumni pt-80 pb-80 academic-two-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="content-img wow fadeInLeft" data-wow-delay=".25s">
                    <img src="{{asset('fronted/assets/sunbeam-img/about/about-us-page.jpg')}}" alt="about" loading="lazy" decoding="async">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content-info wow fadeInUp" data-wow-delay=".25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                    <div class="site-heading mb-3">
                        <h2 class="site-title">
                            Co-Curricular <span>Activities</span>
                        </h2>
                    </div>
                    <p class="content-text">
                        Co-curricular activities take what students are learning in the classroom and build upon that through talent shows, performances, competitions, clubs and additional classroom work. These clubs and activities encourage our students to delve deeper into activities and subject areas that they are passionate about.
                    </p>
                    <p class="content-text">
                        Across all the innovation, extra-curricular, or co-curricular activities, our primary goal is to incite passion and provide a fun way for students to discover and embrace the spirit of relentless learning, inside as well as outside the classroom, so they can identify with different interests, passions and personalities.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="campus-tour pt-80 pb-60 academic-three-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="content-info wow fadeInUp" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <h2 class="site-title">
                            Extra-Curricular  <span>Activities</span>
                        </h2>
                    </div>
                    <p class="content-text">
                        Extracurricular activities are those activities, often sports-based, that take place outside of the classroom, helping students develop their personalities and physical aptitude. Trained coaches and instructors ensure that your child is well instructed in a host of extra-curricular activities at no extra cost.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content-img wow fadeInRight" data-wow-delay=".25s">
                    <img src="{{asset('fronted/assets/sunbeam-img/about/about-us-page.jpg')}}" alt="about us" loading="lazy" decoding="async">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection