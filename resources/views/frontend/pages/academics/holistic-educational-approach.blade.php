@extends('frontend.layouts.master')
@section('title','Sunbeam Academy - Holistic Educational Approach')
@section('description', 'Let a child become an independent learner who is morally strong and environmentally aware.')
@section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective')
@section('main-content')
<!-- breadcrumb -->
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h2 class="breadcrumb-title">Holistic Educational Approach</h2>
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
                            Holistic <span> Educational Approach</span>
                        </h2>
                    </div>
                    <p class="content-text">
                        Ours is a dynamic educational framework aimed at fostering all-round development of students through an integrated, holistic approach to learning. We emphasise on academic excellence, but also focus on other aspects of student growth including sports excellence, skills development, leadership skills, artistic skills and universal values taking learning beyond academics with equal focus on sports, skills and values.
                    </p>
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

<div class="alumni pt-80 pb-80 academic-two-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="content-img wow fadeInLeft" data-wow-delay=".25s">
                    <img src="{{asset('fronted/assets/sunbeam-img/about/about-us-page.jpg')}}" alt="">
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
                    <img src="{{asset('fronted/assets/sunbeam-img/about/about-us-page.jpg')}}" alt="about us">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection