@extends('frontend.layouts.master')
@section('title','Careers at Sunbeam Academy | Teaching & Staff Jobs')
@section('description', 'Browse information on Career at Sunbeam Academy Varanasi, covering academics, activities, facilities, and student development.')
@section('main-content')
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h1 class="breadcrumb-title">Career</h1>
    </div>
</div>
<div class="department-area pt-50 pb-20 sathee-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <h2 class="site-title">Online Application Form</h2>                    
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-lg-3">
                <div class="career-btn">
                    <a href="https://forms.gle/SLqm47YEBvdiLn99A" target="_blank" class="theme-btn mt-1 w-100">
                        Click Here
                    </a>
                </div>
            </div>  
        </div>
    </div>
</div>
<div class="campus-tour pt-50 pb-30 shooting-academy-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="content-info wow fadeInUp" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <h2 class="site-title">
                           <span>Careers at Sunbeam Academy Group – Build a Rewarding Future in Education </span>
                        </h2>
                    </div>
                    <p class="content-text">
                        Sunbeam Academy Group invites passionate, dedicated, and talented individuals to become a part of its growing educational family. With multiple campuses across Varanasi, the institution offers excellent opportunities for both teaching and non-teaching professionals who are committed to making a difference in the field of education. Whether you are an experienced educator or a fresher with a passion for teaching, this is the perfect platform to begin or grow your career.
                    </p>
                    <p class="content-text mt-0">
                       Working here means being part of a progressive and student-focused environment where innovation, discipline, and quality education are at the core. The institution believes that teachers and staff play a vital role in shaping young minds and building a strong foundation for the future. With a supportive work culture and modern infrastructure, every team member is encouraged to perform at their best and grow professionally. If you are looking for school jobs in Varanasi and want to work in a respected and dynamic institution, this is an ideal opportunity to achieve your career goals.
                    </p>
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content-img wow fadeInRight" data-wow-delay=".25s">
                    <img src="{{asset('fronted/assets/sunbeam-img/page-img/career.jpg')}}" alt="Hobby Classess" loading="lazy" decoding="async">
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
                        Why Work With Us?
                    </h3>
                    <ul class="content-list mt-2">
                        <li class="li-flex">
                            <span>
                                 The institution offers a positive and professional work environment that supports growth, learning, and collaboration. Employees are provided with opportunities to enhance their skills, improve their teaching methods, and build a strong career in the education sector. A supportive leadership team and teamwork-driven culture ensure that every staff member feels valued and motivated.
                            </span>
                        </li>
                        <li class="li-flex">
                            <span>
                                The organization focuses on continuous development by encouraging innovation and modern teaching practices. With access to advanced infrastructure and learning tools, teachers and staff can deliver high-quality education effectively. Competitive salary packages, a structured work environment, and career growth opportunities make it a preferred choice for professionals seeking stability and long-term success. The focus is always on creating a workplace where dedication and performance are recognized and appreciated.
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
            <div class="col-lg-6 mt-30">
                <div class="mission-vission-item wow fadeInLeft" data-wow-delay=".25s">
                    <h3 class="xb-item--title">Opportunities & Application Process</h3>
                    <ul class="content-list mt-2">
                        <li class="li-flex">
                            <span>
                                The institution regularly hires for a wide range of roles, including Primary and Secondary Teachers, Subject Teachers (such as Maths, Science, English, Social Science, and Computer), Pre-Primary Teachers, Sports and Activity Instructors, Administrative Staff, and Front Office or Support Staff. Candidates may be placed across different campuses based on requirements and suitability.
                            </span>
                        </li>
                        <li class="li-flex">
                            <span>
                                Applications are open to qualified teachers, experienced professionals, fresh graduates with a passion for teaching, and skilled non-teaching staff. The selection process is designed to identify individuals who are committed to excellence, discipline, and student development.
                            </span>
                        </li>
                        <li class="li-flex">
                            <span>
                                Interested candidates can apply by filling out the Staff Recruitment Application Form or by submitting their updated resume through the official communication channel. Applicants are advised to provide complete and accurate details while applying. Shortlisted candidates will be contacted for further steps in the selection process.
                            </span>
                        </li>
                        <li class="li-flex">
                            <span>
                                Joining Sunbeam Academy Group is more than just a career opportunity—it is a chance to be part of a trusted institution that is dedicated to shaping the future of education. With the right environment, support, and opportunities, every individual can grow, succeed, and contribute meaningfully to the academic journey of students.
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