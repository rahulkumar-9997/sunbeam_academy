@extends('frontend.layouts.master')
@section('title','Sunbeam Samneghat - Best School in Varanasi')
@section('description', 'Let a child become an independent learner who is morally strong and environmentally aware.')
@section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective')
@section('main-content')
<div class="hero-btns">
    <div class="text-center branches-div">
        <h4>Our Branches</h4>
    </div>
    <div class="btns ul_li_center">
        <a class="thm-btn thm-btn--stroke-white sec-btn" href="#">
            Gurgakund
        </a>
        <a class="thm-btn thm-btn--stroke-white sec-btn" href="#">
            Samneghat
        </a>
        <a class="thm-btn thm-btn--stroke-white sec-btn" href="#">
            Sarainandan
        </a>
        <a class="thm-btn thm-btn--stroke-white sec-btn" href="#">
            Knowledge Park
        </a>
    </div>
</div>
<!-- feature + about section start  -->
<section class="about hs-about pt-115 pb-115 pos-rel home-box">
    <div class="container">
        <div class="row mt-none-30">
            <div class="col-lg-3 mt-30">
                <div class="xb-feature_wrap sh-featuree_wrap pos-rel ul_li">
                    <div class="xb-item--icon">
                        <img src="{{asset('fronted/assets/img/icon/teacher-icon.png')}}" alt="">
                    </div>
                    <div class="xb-item--holder">
                        <h3 class="xb-item--title">Experienced Teachers</h3>
                        <span class="xb-item--content">
                            Experience can make a huge difference in students’ lives. Our experienced teachers assist the children to develop and grow during a crucial period of their lives.
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-30">
                <div class="xb-feature_wrap sh-featuree_wrap pos-rel ul_li">
                    <div class="xb-item--icon bg_blue">
                        <img src="{{asset('fronted/assets/img/icon/book-white.png')}}" alt="">
                    </div>
                    <div class="xb-item--holder">
                        <h3 class="xb-item--title">Global Perspective</h3>
                        <span class="xb-item--content">
                            We aim at nurturing knowledgeable and active learners who develop global competence to live and work in today’s interconnected world.
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-30">
                <div class="xb-feature_wrap sh-featuree_wrap pos-rel ul_li">
                    <div class="xb-item--icon bg_green">
                        <img src="{{asset('fronted/assets/img/icon/customer-support.png')}}" alt="">
                    </div>
                    <div class="xb-item--holder pr-15">
                        <h3 class="xb-item--title">Technology Perspective</h3>
                        <span class="xb-item--content">
                            Technology develops creative learning processes and helps retain the concept for a longer period of time. Online tools help explore more to acquaint knowledge.
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-30">
                <div class="xb-feature_wrap sh-featuree_wrap pos-rel ul_li">
                    <div class="xb-item--icon bg_yellow">
                        <img src="{{asset('fronted/assets/img/icon/school-bag-1.png')}}" alt="">
                    </div>
                    <div class="xb-item--holder pr-15">
                        <h3 class="xb-item--title">Safe Environment</h3>
                        <span class="xb-item--content">We believe that a safe and caring learning environment facilitates proper learning. Our teachers maintain discipline which helps improve the quality of education for all learners.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center pt-100">
            <div class="col-lg-6">
                <div class="hs-about_left mt-20">
                    <div class="about-img wow skewIn">
                        <img src="{{asset('fronted/assets/sunbeam-img/about-us.png')}}" alt="about us">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hs-about-right ml-70 mt-20 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration=".6s">
                    <div class="section-title mb-20">
                        <span class="sub-title">about us</span>
                        <h1 class="title">Welcome to Sunbeam Academy – Samneghat</h1>
                        <p class="hs-content mt-25">
                            Sunbeam Academy schools are considered to be one of the best schools in and around Varanasi where your child will explore all the areas of art, education, and much more. We make sure that your child receives the best of education from the best faculty at a reputed school in Varanasi so that he/she has a brighter future and will make this nation a better place for everyone with their knowledge.
                        </p>
                    </div>
                    <ul class="xb-item--list list-unstyled">
                        <li>A strong school community.</li>
                        <!-- <li>Available in three timezones.</li> -->
                        <li>Student Leadership Initiatives.</li>
                    </ul>
                    <div class="xb-btn mt-35">
                        <a class="thm-btn thm-btn--stroke-black hover-2" href="contact.html">Read More
                            <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 4.84993V16.7399C22 17.7099 21.21 18.5999 20.24 18.7199L19.93 18.7599C18.29 18.9799 15.98 19.6599 14.12 20.4399C13.47 20.7099 12.75 20.2199 12.75 19.5099V5.59993C12.75 5.22993 12.96 4.88993 13.29 4.70993C15.12 3.71993 17.89 2.83993 19.77 2.67993H19.83C21.03 2.67993 22 3.64993 22 4.84993Z" fill="#170006"></path>
                                    <path d="M10.71 4.70993C8.87999 3.71993 6.10999 2.83993 4.22999 2.67993H4.15999C2.95999 2.67993 1.98999 3.64993 1.98999 4.84993V16.7399C1.98999 17.7099 2.77999 18.5999 3.74999 18.7199L4.05999 18.7599C5.69999 18.9799 8.00999 19.6599 9.86999 20.4399C10.52 20.7099 11.24 20.2199 11.24 19.5099V5.59993C11.24 5.21993 11.04 4.88993 10.71 4.70993ZM4.99999 7.73993H7.24999C7.65999 7.73993 7.99999 8.07993 7.99999 8.48993C7.99999 8.90993 7.65999 9.23993 7.24999 9.23993H4.99999C4.58999 9.23993 4.24999 8.90993 4.24999 8.48993C4.24999 8.07993 4.58999 7.73993 4.99999 7.73993ZM7.99999 12.2399H4.99999C4.58999 12.2399 4.24999 11.9099 4.24999 11.4899C4.24999 11.0799 4.58999 10.7399 4.99999 10.7399H7.99999C8.40999 10.7399 8.74999 11.0799 8.74999 11.4899C8.74999 11.9099 8.40999 12.2399 7.99999 12.2399Z" fill="#170006"></path>
                                </svg></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="xb-shape">
        <img src="{{asset('fronted/assets/img/shape/angle-shape01.png')}}" alt="">
    </div>
</section>
<!-- feature + about section end  -->

<!-- program section start  -->
<!--<section class="program pt-115 pb-120">
    <div class="container">
        <div class="section-title text-center mb-30">
            <span class="sub-title">Our academics offerings</span>
            <h1 class="title">School Levels</h1>
            <p>Our program from Kindergarten to Grade 8 is a comprehensive curriculum that makes our students innovators, & Leaders of promise.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="hs-program_inner">
                    <div class="bg_img" data-background="{{asset('fronted/assets/img/program/hs-pro_bg01.png')}}">
                        <div class="xb-item--holder">
                            <h3 class="xb-item--title">Technical Education..</h3>
                            <div class="xb-item--link">
                                <a href="course-single.html">Read More <span><svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z" fill="white" />
                                        </svg></span></a>
                            </div>
                        </div>
                        <div class="xb-item--img">
                            <img src="{{asset('fronted/assets/img/program/hs-program01.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="hs-program_inner">
                    <div class="bg_img" data-background="{{asset('fronted/assets/img/program/hs-pro_bg02.png')}}">
                        <div class="xb-item--holder">
                            <h3 class="xb-item--title">Advanced Mathematics..</h3>
                            <div class="xb-item--link">
                                <a href="course-single.html">Read More <span><svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z" fill="white" />
                                        </svg></span></a>
                            </div>
                        </div>
                        <div class="xb-item--img">
                            <img src="{{asset('fronted/assets/img/program/hs-program02.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="hs-program_inner">
                    <div class="bg_img" data-background="{{asset('fronted/assets/img/program/hs-pro_bg03.png')}}">
                        <div class="xb-item--holder">
                            <h3 class="xb-item--title">Writing and Literature..</h3>
                            <div class="xb-item--link">
                                <a href="course-single.html">Read More <span><svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z" fill="white" />
                                        </svg></span></a>
                            </div>
                        </div>
                        <div class="xb-item--img">
                            <img src="{{asset('fronted/assets/img/program/hs-program03.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="hs-program_inner">
                    <div class="bg_img" data-background="{{asset('fronted/assets/img/program/hs-pro_bg04.png')}}">
                        <div class="xb-item--holder">
                            <h3 class="xb-item--title">Environmental Science..</h3>
                            <div class="xb-item--link">
                                <a href="course-single.html">Read More <span><svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z" fill="white" />
                                        </svg></span></a>
                            </div>
                        </div>
                        <div class="xb-item--img">
                            <img src="{{asset('fronted/assets/img/program/hs-program04.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="hs-program_inner">
                    <div class="bg_img" data-background="{{asset('fronted/assets/img/program/hs-pro_bg05.png')}}">
                        <div class="xb-item--holder">
                            <h3 class="xb-item--title">World Languages class..</h3>
                            <div class="xb-item--link">
                                <a href="course-single.html">Read More <span><svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z" fill="white" />
                                        </svg></span></a>
                            </div>
                        </div>
                        <div class="xb-item--img">
                            <img src="{{asset('fronted/assets/img/program/hs-program05.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="hs-program_inner">
                    <div class="bg_img" data-background="{{asset('fronted/assets/img/program/hs-pro_bg06.png')}}">
                        <div class="xb-item--holder">
                            <h3 class="xb-item--title">drawing class..</h3>
                            <div class="xb-item--link">
                                <a href="course-single.html">Read More <span><svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z" fill="white" />
                                        </svg></span></a>
                            </div>
                        </div>
                        <div class="xb-item--img">
                            <img src="{{asset('fronted/assets/img/program/hs-program06.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hs-pro-bottom ul_li_between mt-30">
            <div class="xb-content mt-20">
                <p>Discover dreams, and change the world! <br>
                    Enjoy access to modern classrooms, cutting-edge laboratories.</p>
            </div>
            <div class="pro-btn mt-20">
                <a class="thm-btn thm-btn--stroke-black hover-2" href="#!">view all programs
                    <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 4.84993V16.7399C22 17.7099 21.21 18.5999 20.24 18.7199L19.93 18.7599C18.29 18.9799 15.98 19.6599 14.12 20.4399C13.47 20.7099 12.75 20.2199 12.75 19.5099V5.59993C12.75 5.22993 12.96 4.88993 13.29 4.70993C15.12 3.71993 17.89 2.83993 19.77 2.67993H19.83C21.03 2.67993 22 3.64993 22 4.84993Z" fill="#170006"></path>
                            <path d="M10.71 4.70993C8.87999 3.71993 6.10999 2.83993 4.22999 2.67993H4.15999C2.95999 2.67993 1.98999 3.64993 1.98999 4.84993V16.7399C1.98999 17.7099 2.77999 18.5999 3.74999 18.7199L4.05999 18.7599C5.69999 18.9799 8.00999 19.6599 9.86999 20.4399C10.52 20.7099 11.24 20.2199 11.24 19.5099V5.59993C11.24 5.21993 11.04 4.88993 10.71 4.70993ZM4.99999 7.73993H7.24999C7.65999 7.73993 7.99999 8.07993 7.99999 8.48993C7.99999 8.90993 7.65999 9.23993 7.24999 9.23993H4.99999C4.58999 9.23993 4.24999 8.90993 4.24999 8.48993C4.24999 8.07993 4.58999 7.73993 4.99999 7.73993ZM7.99999 12.2399H4.99999C4.58999 12.2399 4.24999 11.9099 4.24999 11.4899C4.24999 11.0799 4.58999 10.7399 4.99999 10.7399H7.99999C8.40999 10.7399 8.74999 11.0799 8.74999 11.4899C8.74999 11.9099 8.40999 12.2399 7.99999 12.2399Z" fill="#170006"></path>
                        </svg></span>
                </a>
            </div>
        </div>
    </div>
</section>-->
<!-- program section end  -->
<!-- program section start  -->
<section class="program pt-115 pb-120">
    <div class="container">
        <div class="pro-top ul_li_between mb-40">
            <div class="section-title mb-20">
                <span class="sub-title">Our academics offerings</span>
                <h1 class="title">School Levels</h1>
            </div>
            <div class="pro-btn mb-20">
                <a class="thm-btn thm-btn--stroke-black" href="courses.html">View All Classes
                    <span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 4.84993V16.7399C22 17.7099 21.21 18.5999 20.24 18.7199L19.93 18.7599C18.29 18.9799 15.98 19.6599 14.12 20.4399C13.47 20.7099 12.75 20.2199 12.75 19.5099V5.59993C12.75 5.22993 12.96 4.88993 13.29 4.70993C15.12 3.71993 17.89 2.83993 19.77 2.67993H19.83C21.03 2.67993 22 3.64993 22 4.84993Z" fill="#170006" />
                            <path d="M10.71 4.70993C8.87999 3.71993 6.10999 2.83993 4.22999 2.67993H4.15999C2.95999 2.67993 1.98999 3.64993 1.98999 4.84993V16.7399C1.98999 17.7099 2.77999 18.5999 3.74999 18.7199L4.05999 18.7599C5.69999 18.9799 8.00999 19.6599 9.86999 20.4399C10.52 20.7099 11.24 20.2199 11.24 19.5099V5.59993C11.24 5.21993 11.04 4.88993 10.71 4.70993ZM4.99999 7.73993H7.24999C7.65999 7.73993 7.99999 8.07993 7.99999 8.48993C7.99999 8.90993 7.65999 9.23993 7.24999 9.23993H4.99999C4.58999 9.23993 4.24999 8.90993 4.24999 8.48993C4.24999 8.07993 4.58999 7.73993 4.99999 7.73993ZM7.99999 12.2399H4.99999C4.58999 12.2399 4.24999 11.9099 4.24999 11.4899C4.24999 11.0799 4.58999 10.7399 4.99999 10.7399H7.99999C8.40999 10.7399 8.74999 11.0799 8.74999 11.4899C8.74999 11.9099 8.40999 12.2399 7.99999 12.2399Z" fill="#170006" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        <div class="row mt-none-60">
            <div class="col-md-12">
                <div class="mt-10">
                    <p>Our program from Kindergarten to Grade 8 is a comprehensive curriculum that makes our students innovators, & Leaders of promise.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-60">
                <div class="xb-program__wrapper">
                    <div class="xb-item--img text-center">
                        <a href="course-single.html">
                            <img src="{{asset('fronted/assets/sunbeam-img/school-level/school-level-kindergarten.jpg')}}" alt="Kindergarden">
                        </a>
                    </div>
                    <div class="xb-item--holder">
                        <h2 class="xb-item--title border-effect-2">
                            <a href="course-single.html">Kindergarden</a>
                        </h2>
                        <div class="main-content">
                            <p>We offer the best practices of modern pre-school education.</p>
                        </div>
                        <div class="xb-item--dep-btn">
                            <a href="course-single.html">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-60">
                <div class="xb-program__wrapper">
                    <div class="xb-item--img text-center">
                        <a href="course-single.html">
                            <img src="{{asset('fronted/assets/sunbeam-img/school-level/school-level-primary-1.jpg')}}" alt="Primary School">
                        </a>
                    </div>
                    <div class="xb-item--holder">
                        <h2 class="xb-item--title border-effect-2">
                            <a href="course-single.html">Primary School</a>
                        </h2>
                        <div class="main-content">
                            <p>A quick glance at our primary school program and facilities</p>
                        </div>
                        <div class="xb-item--dep-btn">
                            <a href="course-single.html">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-60">
                <div class="xb-program__wrapper">
                    <div class="xb-item--img text-center">
                        <a href="course-single.html">
                            <img src="{{asset('fronted/assets/sunbeam-img/school-level/school-level-secondary-1.jpg')}}" alt="Secondary School">
                        </a>
                    </div>
                    <div class="xb-item--holder">
                        <h2 class="xb-item--title border-effect-2">
                            <a href="course-single.html">Secondary School</a>
                        </h2>
                        <div class="main-content">
                            <p>Focuses on the all – around development of 11 to 14 year-olds.</p>
                        </div>
                        <div class="xb-item--dep-btn">
                            <a href="course-single.html">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- program section end  -->

<!-- fanfact + principal section start  -->
<section class="fanfact hs-fanfact_bg pt-120 pb-90 pos-rel">
    <div class="container">
        <div class="section-title text-center mb-60">
            <span class="sub-title">Our achievements</span>
            <h1 class="title">you can count on us</h1>
        </div>
        <div class="hs-fanfact_wrapper">
            <div class="row mt-none-30">
                <div class="col-lg-3 col-md-6 mt-30">
                    <div class="hs-fanfact_inner text-center">
                        <div class="xb-item--icon">
                            <img src="{{asset('fronted/assets/img/icon/teacher-icon01.png')}}" alt="">
                        </div>
                        <div class="xb-item--holder pos-rel">
                            <h2 class="xb-item--number">4,000+</h2>
                            <span><svg width="266" height="57" viewBox="0 0 266 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0132 11.796C12.9019 8.92931 15.5192 6.94812 18.5195 6.87104L258.083 0.716251C262.46 0.603807 265.864 4.49148 265.175 8.8151L258.44 51.1012C257.898 54.4992 254.968 57 251.527 57H7.49864C2.78284 57 -0.58381 52.4316 0.812534 47.9273L12.0132 11.796Z" fill="#FDB714" />
                                </svg></span>
                        </div>
                        <span class="xb-item--profile">college profiles</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-30">
                    <div class="hs-fanfact_inner text-center">
                        <div class="xb-item--icon">
                            <img src="{{asset('fronted/assets/img/icon/stamp.png')}}" alt="">
                        </div>
                        <div class="xb-item--holder pos-rel">
                            <h2 class="xb-item--number">45Million+</h2>
                            <span><svg width="266" height="57" viewBox="0 0 266 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0132 11.796C12.9019 8.92931 15.5192 6.94812 18.5195 6.87104L258.083 0.716251C262.46 0.603807 265.864 4.49148 265.175 8.8151L258.44 51.1012C257.898 54.4992 254.968 57 251.527 57H7.49864C2.78284 57 -0.58381 52.4316 0.812534 47.9273L12.0132 11.796Z" fill="#D9293A" />
                                </svg></span>
                        </div>
                        <span class="xb-item--profile">in scholarship value</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-30">
                    <div class="hs-fanfact_inner text-center">
                        <div class="xb-item--icon">
                            <img src="{{asset('fronted/assets/img/icon/counter-icon.png')}}" alt="">
                        </div>
                        <div class="xb-item--holder pos-rel">
                            <h2 class="xb-item--number">3Million+</h2>
                            <span><svg width="265" height="57" viewBox="0 0 265 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.5132 11.796C12.4019 8.92931 15.0192 6.94812 18.0195 6.87104L257.583 0.716251C261.96 0.603807 265.364 4.49148 264.675 8.8151L257.94 51.1012C257.398 54.4992 254.468 57 251.027 57H6.99864C2.28284 57 -1.08381 52.4316 0.312534 47.9273L11.5132 11.796Z" fill="#2F76CF" />
                                </svg></span>
                        </div>
                        <span class="xb-item--profile">students registered / year</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-30">
                    <div class="hs-fanfact_inner text-center">
                        <div class="xb-item--icon">
                            <img src="{{asset('fronted/assets/img/icon/clock01.png')}}" alt="">
                        </div>
                        <div class="xb-item--holder pos-rel">
                            <h2 class="xb-item--number">26 Hours</h2>
                            <span><svg width="266" height="57" viewBox="0 0 266 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0132 11.796C12.9019 8.92931 15.5192 6.94812 18.5195 6.87104L258.083 0.716251C262.46 0.603807 265.864 4.49148 265.175 8.8151L258.44 51.1012C257.898 54.4992 254.968 57 251.527 57H7.49864C2.78284 57 -0.58381 52.4316 0.812534 47.9273L12.0132 11.796Z" fill="#34D171" />
                                </svg></span>
                        </div>
                        <span class="xb-item--profile">of time savings</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hs-fan_shape">
        <img src="{{asset('fronted/assets/img/shape/angle-white.png')}}" alt="">
    </div>
</section>
<!-- fanfact + principal section end  -->

<!-- testimonial section start  -->
<section class="testimonial  pt-120 pb-130">
    <div class="section-title text-center mb-60">
        <span class="sub-title">Memoirs of our Alumni</span>
        <h1 class="title">why student love us</h1>
    </div>
    <div class="hs-testimonial-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hs-testimonial_wrapper">
                    <div class="xb-item--inner">
                        <div class="xb-item--rating ul_li mb-30">
                            <span class="xb-item--number">4.0</span>
                            <span class="xb-item--star">
                                <img src="{{asset('fronted/assets/img/icon/rating01.png')}}" alt="">
                            </span>
                        </div>
                        <p class="xb-item--content">"The quality of education and the supportive community at Edubost High School have truly helped me excel. The teachers are exceptional and care about student success."</p>
                    </div>
                    <div class="xb-item--author ul_li">
                        <div class="xb-item--avater mr-10">
                            <img src="{{asset('fronted/assets/img/testimonial/hs-tes-img03.png')}}" alt="">
                        </div>
                        <div class="xb-item--holder">
                            <h3 class="xb-item--name">James Michael</h3>
                            <span class="xb-item--desig">James Michael</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hs-testimonial_wrapper">
                    <div class="xb-item--inner">
                        <div class="xb-item--rating ul_li mb-30">
                            <span class="xb-item--number">4.9</span>
                            <span class="xb-item--star">
                                <img src="{{asset('fronted/assets/img/icon/rating01.png')}}" alt="">
                            </span>
                        </div>
                        <p class="xb-item--content">"The quality of education and the supportive community at Edubost High School have truly helped me excel. The teachers are exceptional and care about student success."</p>
                    </div>
                    <div class="xb-item--author ul_li">
                        <div class="xb-item--avater mr-10">
                            <img src="{{asset('fronted/assets/img/testimonial/hs-tes-img01.png')}}" alt="">
                        </div>
                        <div class="xb-item--holder">
                            <h3 class="xb-item--name">James Michael</h3>
                            <span class="xb-item--desig">James Michael</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hs-testimonial_wrapper">
                    <div class="xb-item--inner">
                        <div class="xb-item--rating ul_li mb-30">
                            <span class="xb-item--number">4.7</span>
                            <span class="xb-item--star">
                                <img src="{{asset('fronted/assets/img/icon/rating01.png')}}" alt="">
                            </span>
                        </div>
                        <p class="xb-item--content">"Edubost High School’s focus on career readiness and real-world learning has prepared me well for the future. The hands-on career programs have been invaluable."</p>
                    </div>
                    <div class="xb-item--author ul_li">
                        <div class="xb-item--avater mr-10">
                            <img src="{{asset('fronted/assets/img/testimonial/hs-tes-img02.png')}}" alt="">
                        </div>
                        <div class="xb-item--holder">
                            <h3 class="xb-item--name">Jennifer Lynn</h3>
                            <span class="xb-item--desig">September 22, 2024</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hs-testimonial_wrapper">
                    <div class="xb-item--inner">
                        <div class="xb-item--rating ul_li mb-30">
                            <span class="xb-item--number">4.8</span>
                            <span class="xb-item--star">
                                <img src="{{asset('fronted/assets/img/icon/rating01.png')}}" alt="">
                            </span>
                        </div>
                        <p class="xb-item--content">"After over a decade at Edubost High School, I’m continually to student success. The collaborative and innovative environment makes it a fantastic place to teach."</p>
                    </div>
                    <div class="xb-item--author ul_li">
                        <div class="xb-item--avater mr-10">
                            <img src="{{asset('fronted/assets/img/testimonial/hs-tes-img03.png')}}" alt="">
                        </div>
                        <div class="xb-item--holder">
                            <h3 class="xb-item--name">Michael Edward</h3>
                            <span class="xb-item--desig">December 18, 2024</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hs-testimonial_wrapper">
                    <div class="xb-item--inner">
                        <div class="xb-item--rating ul_li mb-30">
                            <span class="xb-item--number">4.9</span>
                            <span class="xb-item--star">
                                <img src="{{asset('fronted/assets/img/icon/rating01.png')}}" alt="">
                            </span>
                        </div>
                        <p class="xb-item--content">"Edubost High School provided my child with exceptional support and opportunities. The emphasis on both and personal development has been outstanding."</p>
                    </div>
                    <div class="xb-item--author ul_li">
                        <div class="xb-item--avater mr-10">
                            <img src="{{asset('fronted/assets/img/testimonial/hs-tes-img01.png')}}" alt="">
                        </div>
                        <div class="xb-item--holder">
                            <h3 class="xb-item--name">Nicole Marie</h3>
                            <span class="xb-item--desig">August 30, 2024</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial section end  -->

<!-- cta section start  -->
<section class="cta pos-rel bg_img z-1 pt-120 pb-120 mb-none-55">
    <div class="hs-cta_bg bg_img" data-background="{{asset('fronted/assets/img/bg/cta-bg02.png')}}"></div>
    <div class="container">
        <div class="hs-cta-inner pb-170">
            <div class="section-title text-center mb-50">
                <span class="sub-title">What makes us different?</span>
                <h1 class="title">Why student’s love Sunbeam Academy Group</h1>
            </div>
            <ul class="xb-item--list list-unstyled ul_li">
                <li><span><img src="{{asset('fronted/assets/img/icon/Check-icon.svg')}}" alt=""></span>Opportunities to socialise</li>
                <li><span><img src="{{asset('fronted/assets/img/icon/Check-icon.svg')}}" alt=""></span>A flexible school</li>
                <li><span><img src="{{asset('fronted/assets/img/icon/Check-icon.svg')}}" alt=""></span>Teacher-led education</li>
            </ul>
            <div class="text-center">
                <p class="xb-item--content">We empower students to achieve their dreams through diverse programs, modern facilities, and a supportive community.</p>
            </div>
            <div class="hs-btn text-center mt-30">
                <a class="thm-btn thm-btn--two" href="#">apply now
                    <span><img src="{{asset('fronted/assets/img/icon/learning01.png')}}" alt=""></span>
                </a>
            </div>
        </div>
    </div>
    
</section>
<!-- cta section end  -->

<!-- news section start  -->
<section class="news news-bg">
    <div class="container">
        <div class="xb-news-top text-center mb-40">
            <div class="section-title wow fadeInUp">
                <span class="sub-title">Our academics news</span>
                <h1 class="title">our latest news</h1>
            </div>
        </div>
        <div class="row justify-content-center mt-none-30">
            <div class="col-lg-4 col-md-6 mt-20">
                <div class="news-wrap xb-news-left hs-news wow fadeInUp" data-wow-delay="100ms" data-wow-duration=".4s">
                    <div class="xb-item--img pos-rel">
                        <img src="{{asset('fronted/assets/sunbeam-img/blog/1.jpg')}}" alt="blog">
                        <a href="#!" class="div-link"></a>
                    </div>
                    <div class="xb-news-contant mt-25">

                        <h3 class="xb-item--title mt-10 border-effect"><a href="#!">Exciting New Extracurricular Starting This Semester..</a></h3>
                    </div>
                    <div class="xb-link text-center mt-35">
                        <a href="#!">Read More <span><svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z" fill="white" />
                                </svg></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-20">
                <div class="news-wrap xb-news-left hs-news wow fadeInUp" data-wow-delay="200ms" data-wow-duration=".4s">
                    <div class="xb-item--img pos-rel">
                        <img src="{{asset('fronted/assets/sunbeam-img/blog/2.jpg')}}" alt="Blog">
                        <a href="#!" class="div-link"></a>
                    </div>
                    <div class="xb-news-contant mt-25">

                        <h3 class="xb-item--title mt-10 border-effect"><a href="#!">Student Achievement Awards Highlights Top Performers..</a></h3>
                    </div>
                    <div class="xb-link text-center mt-35">
                        <a href="#!">Read More <span><svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z" fill="white" />
                                </svg></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-20">
                <div class="news-wrap xb-news-left hs-news wow fadeInUp" data-wow-delay="300ms" data-wow-duration=".4s">
                    <div class="xb-item--img pos-rel">
                        <img src="{{asset('fronted/assets/sunbeam-img/blog/3.jpg')}}" alt="blof">
                        <a href="#!" class="div-link"></a>
                    </div>
                    <div class="xb-news-contant mt-25">

                        <h3 class="xb-item--title mt-10 border-effect"><a href="#!">Annual Art Show Showcases Student Creativity and Talent..</a></h3>
                    </div>
                    <div class="xb-link text-center mt-35">
                        <a href="#!">Read More <span><svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z" fill="white" />
                                </svg></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="news-btn text-center mt-40 wow fadeInUp" data-wow-delay="400ms" data-wow-duration=".4s">
            <a class="thm-btn thm-btn--stroke-black hover-2" href="#">More news
                <span class="icon"><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.4795 21C9.10959 21 7.81507 20.7539 6.59589 20.2617C5.37671 19.7695 4.30137 19.0962 3.36986 18.2417C2.43836 17.3872 1.67808 16.3857 1.08904 15.2373C0.486301 14.0752 0.123288 12.8311 0 11.5049V11.4639H8.56849V14.3145C8.56849 14.5742 8.66096 14.7998 8.84589 14.9912C9.03082 15.1826 9.25342 15.2783 9.5137 15.2783C9.65068 15.2783 9.7774 15.251 9.89384 15.1963C10.0103 15.1416 10.1096 15.0732 10.1918 14.9912L14.0137 11.1768C14.0959 11.0947 14.1644 10.9956 14.2192 10.8794C14.274 10.7632 14.3014 10.6367 14.3014 10.5C14.3014 10.3633 14.274 10.2368 14.2192 10.1206C14.1644 10.0044 14.0959 9.90527 14.0137 9.82324L10.1918 6.00879C10.1096 5.92676 10.0103 5.8584 9.89384 5.80371C9.7774 5.74902 9.65068 5.72168 9.5137 5.72168C9.25342 5.72168 9.0274 5.81738 8.83562 6.00879C8.64384 6.2002 8.54794 6.42578 8.54794 6.68555V9.53613H0C0.123288 8.19629 0.486301 6.94531 1.08904 5.7832C1.67808 4.62109 2.44178 3.61279 3.38014 2.7583C4.31849 1.90381 5.39041 1.23047 6.59589 0.738281C7.81507 0.246094 9.10959 0 10.4795 0C11.9315 0 13.2945 0.273439 14.5685 0.820312C15.8425 1.38086 16.9555 2.13623 17.9075 3.08643C18.8596 4.03662 19.6096 5.14746 20.1575 6.41895C20.7192 7.69043 21 9.05078 21 10.5C21 11.9492 20.7192 13.3096 20.1575 14.5811C19.6096 15.8662 18.8596 16.9839 17.9075 17.9341C16.9555 18.8843 15.8425 19.6328 14.5685 20.1797C13.2945 20.7266 11.9315 21 10.4795 21Z" fill="#161A2C" />
                    </svg></span>
            </a>
        </div>
    </div>
</section>
<!-- news section end  -->

@endsection