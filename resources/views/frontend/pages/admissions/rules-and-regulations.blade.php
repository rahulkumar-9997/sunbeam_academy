@extends('frontend.layouts.master')
@section('title','Sunbeam Academy - Rules and Regulations')
@section('description', 'Let a child become an independent learner who is morally strong and environmentally aware.')
@section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective')
@section('main-content')
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h2 class="breadcrumb-title">Rules and Regulations</h2>
    </div>
</div>
<div class="campus-tour pt-30 pb-80 rule-guide-parent">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="content-info wow fadeInUp" data-wow-delay=".25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                    <div class="site-heading mb-3">
                        <h2 class="site-title">
                            Guidelines for <span>parents</span>.
                        </h2>
                    </div>
                    <div class="feeulli">
                        <ul class="content-list mt-2">
                            <li class="li-flex">
                                <i class="fas fa-check-circle"></i>
                                <span>
                                    Parents/Guardians are not expected to visit their child/ward in classrooms anytime during the school operating hours, unless they are invited by the School.
                                </span>
                            </li>
                            <li class="li-flex">
                                <i class="fas fa-check-circle"></i>
                                <span>
                                    All belongings of the students should be carried by the child.
                                </span>
                            </li>
                            <li class="li-flex">
                                <i class="fas fa-check-circle"></i>
                                <span>
                                    No delivery of items is permitted in the School.
                                </span>
                            </li>
                            <li class="li-flex">
                                <i class="fas fa-check-circle"></i>
                                <span>
                                    Kindly ensure that the child reports to his/her classes on time.
                                </span>
                            </li>
                            <li class="li-flex">
                                <i class="fas fa-check-circle"></i>
                                <span>
                                    No student will be allowed to leave the School early, except in case of emergency or in case the student is unwell.
                                </span>
                            </li>
                            <li class="li-flex">
                                <i class="fas fa-check-circle"></i>
                                <span>
                                Such leave shall be granted on the discretion of the School Principal’s approval. Kindly ensure that your child does not carry any valuable item to the School. No mobile phone is allowed to be carried to the school by any student without explicit and written permission of the respective class teacher.
                                </span>
                            </li>
                            <li class="li-flex">
                                <i class="fas fa-check-circle"></i>
                                <span>
                                Parents should ensure that the child is dedicating time towards his or her home-work and gets complete set of books as per the prescribed time-table and booklist.
                                </span>
                            </li>
                            <li class="li-flex">
                                <i class="fas fa-check-circle"></i>
                                <span>
                                    Private tuitions are strictly discouraged.
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content-img wow fadeInRight" data-wow-delay=".25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInRight;">
                    <img src="{{asset('fronted/assets/sunbeam-img/about/about-us-page.jpg')}}" alt="about us">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="campus-life pt-30 pb-80 rule-code-of-conduct bg">
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
                            Code Of Conduct For <span>Students</span>.
                        </h2>
                    </div>
                    <div class="feeulli">
                        <ul class="content-list mt-2">
                            <li class="li-flex">
                                <i class="fas fa-check-circle"></i>
                                <span>
                                    Students are required to wear proper uniform and display their Student ID Cards at all times.
                                </span>
                            </li>
                            <li class="li-flex">
                                <i class="fas fa-check-circle"></i>
                                <span>
                                    All students should reach the School in time.
                                </span>
                            </li>
                            <li class="li-flex">
                                <i class="fas fa-check-circle"></i>
                                <span>
                                    Appropriate language must be used at all times.
                                </span>
                            </li>
                            <li class="li-flex">
                                <i class="fas fa-check-circle"></i>
                                <span>
                                    Complete abstinence from violence.
                                </span>
                            </li>
                            <li class="li-flex">
                                <i class="fas fa-check-circle"></i>
                                <span>
                                    Use of motorised vehicles in the School premises is strictly not allowed. Bullying or ragging is completely prohibited.
                                </span>
                            </li>
                            <li class="li-flex">
                                <i class="fas fa-check-circle"></i>
                                <span>
                                    High standards of discipline to be followed in the School premises at all times. The School reserves the right to suspend, rusticate or expel any student not following the code of conduct laid down by the School.
                                </span>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection