@extends('frontend.layouts.master')
@section('title','Sunbeam Academy - Curriculum')
@section('description', 'Let a child become an independent learner who is morally strong and environmentally aware.')
@section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective')
@section('main-content')
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h2 class="breadcrumb-title">Curriculum</h2>
    </div>
</div>
<div class="campus-tour pt-120 pb-60 curr-one-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="content-info wow fadeInUp" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <h2 class="site-title">
                            Our <span>Methodology</span>
                        </h2>
                    </div>
                    <p class="content-text">
                        We at Sunbeam Academy, completely discard the practice of copying answers from the board. Hence, we start working on languages from an early age. The students frame and write their own answers in their notebooks/ workbooks and in the worksheets. As a result, the students of this school never face the challenge of cramming information.
                    </p>
                    <p class="content-text mt-0">
                        “The Sunbeam school provides for additional programmes as tutorial help and remedial teaching for slow learners to help them to cope with the courses taught in the main streams. This helps in easier understanding and curtails the need for private tuition.”
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

<div class="alumni pt-80 pb-80 curr-two-section">
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
                            Exposure To New <span>Activities</span>
                        </h2>
                    </div>
                    <p class="content-text">
                        Besides academics, the curriculum of Sunbeam Academy concentrates on a lot of new activities which include sports which helps in relaxation of mind, and Team-building, social programs which improve interpersonal skills.
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="campus-tour pt-80 pb-60 curr-three-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="content-info wow fadeInUp" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <h2 class="site-title">
                            Interactive <span>STEM Labs</span>
                        </h2>
                    </div>
                    <p class="content-text">
                        In recognition of Sunbeam Academy’s genuine high standards of academics, We have established a high-level stem laboratory for higher dissemination of knowledge on science, technology, engineering, and mathematics to pre-university standard students, believing that in future technology is going to be an indispensable force to cause social impact and equality, and which is why the upcoming generation of children in India need to accomplish a three-pronged vision, first fostering in themselves curiosity, creativity, and imagination about design knowledge, computational thinking, problem-solving skills, and adaptive learning; second, creating from among themselves one million innovators who will create jobs of tomorrow; third, adapting themselves to the dramatically altering rapid technological change in order to succeed in future. The modus operandi is to let young students tinker with technological designs and concepts in order to try out their own independent and liberal ways of redoing the same technology.
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

<div class="campus-tour pt-50 pb-60 curr-four-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-info wow fadeInUp" data-wow-delay=".25s">
                    <div class="site-heading mb-6 text-center">
                        <h2 class="site-title">
                            Difference Between <span>Science Lab and STEM Lab</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="details-left">
                    <h3 class="mb-3">Science Labs</h3>
                    <ul class="content-list mt-2">
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                Science Labs are designed for guided Experimenting.
                            </span>
                        </li>
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                Science Labs may have Expensive or fragile equipment.
                            </span>
                        </li>
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                Science Labs have a static design.
                            </span>
                        </li>
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                Science Labs activities correspond to topic in text books.
                            </span>
                        </li>
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                Science Labs have a fixed curriculum.
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="details-right">
                    <h3 class="mb-3">STEM Labs</h3>
                    <ul class="content-list mt-2">
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                Stem Labs are for open-ended experimenting, with no single solution.
                            </span>
                        </li>
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                Stem Labs have equipment appropriate to the age of the intended students so that they can tinker without the fear of damaging equipment.
                            </span>
                        </li>
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                Stem Labs are intended to evolve with the institution.
                            </span>
                        </li>
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                Stem Labs are intended towards life and creative skills. The skills developed in Tinkering Labs may or may not directly help in academics, but an indirect advantage is most certainly observed.
                            </span>
                        </li>
                        <li class="li-flex">
                            <i class="fas fa-check-circle"></i>
                            <span>
                                Stem Labs have a directional curriculum that is not restrictive and provides students with the scope to create and innovate.
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="campus-tour pt-60 pb-120 curr-five-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="content-info wow fadeInUp" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <h2 class="site-title">
                            Our <span>Teacher</span>
                        </h2>
                    </div>
                    <p class="content-text">
                        Our school follows top-notch teaching and learning processes that are practical, experimental, and fun to learn.
                    </p>
                    <p class="content-text mt-0">
                        Our experienced and well-qualified teaching faculty have years of experience in the field, which makes them one of the best teachers in education. They undergo constant upgrading through workshops and certification courses.
                    </p>
                    <p>
                        Their specialised teaching methodology through the use of digital spaces and interactive technologies makes them easily accessible to students and teachers.
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