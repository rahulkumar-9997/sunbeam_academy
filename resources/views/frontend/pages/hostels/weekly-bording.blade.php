@extends('frontend.layouts.master')
@section('title','Sunbeam School Weekly Boarding Facility')
@section('description', 'Browse information on Weekly Boarding at Sunbeam Academy Varanasi, covering academics, activities, facilities, and student development.')
<!-- @section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective') -->
@section('main-content')
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h1 class="breadcrumb-title">Weekly Boarding</h1>
    </div>
</div>
<div class="campus-tour pt-50 pb-30 weekly-boarding-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="content-info wow fadeInUp" data-wow-delay=".25s">
                    <div class="site-heading mb-3">
                        <h2 class="site-title">
                            <span>Weekly Boarding - </span> A Perfect Balance of Discipline and Comfort
                        </h2>
                    </div>
                    <p class="content-text">
                        Weekly Boarding is designed to give students a structured and safe environment during the weekdays while allowing them to return home and spend quality time with their families on weekends. This system helps students stay focused on their studies and daily routine without feeling disconnected from their homes. It creates a balanced lifestyle where students can grow academically, socially, and personally in a supportive atmosphere. With proper supervision, comfortable living arrangements, and a disciplined schedule, weekly boarding provides a secure and positive environment for students to learn and develop confidence.
                    </p>
                    <p class="content-text mt-0">
                       The concept of weekly boarding is ideal for parents who want their children to receive proper guidance, academic support, and a well-managed daily routine. It allows students to stay in a peaceful and organized environment during school days and enjoy family time on weekends. This balance helps students become more responsible, independent, and disciplined while maintaining strong emotional connections with their families. The structured lifestyle encourages students to manage their time effectively and focus on their goals with clarity and determination.
                    </p>
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content-img wow fadeInRight" data-wow-delay=".25s">
                    <img src="{{asset('fronted/assets/sunbeam-img/page-img/weekly-boarding.jpg')}}" alt="Weekly Boarding" loading="lazy" decoding="async">
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
                       Safe & Comfortable Living Environment
                    </h3>
                    <p class="xb-item--content">
                       The weekly boarding facility offers a comfortable and homely environment where students can stay peacefully during the weekdays. Clean and spacious rooms, proper ventilation, and well-maintained surroundings ensure that students feel relaxed and secure throughout their stay. The hostel environment is carefully designed to promote discipline, hygiene, and comfort, allowing students to concentrate on their academic and personal growth.
                    </p>
                    <p class="xb-item--content">
                        Safety is given the highest priority, with dedicated wardens and staff available to supervise and support students at all times. The campus follows proper security measures and clear guidelines to maintain a disciplined and protected environment. Regular monitoring and responsible management ensure that students live in a safe space where their well-being is always taken care of. Parents can feel confident knowing that their children are staying in a secure and caring environment during the weekdays.
                    </p>
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
                    <h3 class="xb-item--title">Structured Routine & Academic Support</h3>
                    <p class="xb-item--content">
                        Weekly boarding focuses strongly on building academic discipline and good daily habits among students. A structured routine with fixed study hours helps students stay consistent with their learning and complete their academic tasks on time. The peaceful environment encourages focus, concentration, and better understanding of subjects, which improves overall academic performance.
                    </p>
                    <p class="xb-item--content">
                        Along with studies, students are encouraged to follow healthy daily habits such as proper meal timings, rest, and participation in activities that support overall development. Nutritious and hygienic meals ensure that students remain energetic and active throughout the week. The balanced routine helps students develop time management, responsibility, and self-discipline, which are essential for their future success. By combining academic focus, safety, comfort, and personal growth, weekly boarding provides a complete and supportive environment where students can grow with confidence and work towards a bright future.
                    </p>
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