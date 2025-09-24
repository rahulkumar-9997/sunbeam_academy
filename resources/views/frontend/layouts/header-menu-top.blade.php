 <!-- header area -->
 <header class="header">
     <!-- header top -->
     <div class="header-top">
         <div class="container">
             <div class="header-top-wrap">
                 <div class="header-top-left">
                     <div class="header-top-social">
                         <span>Follow Us: </span>
                         <a target="_blank" href="https://www.facebook.com/Sunbeamacademy1972">
                             <i class="fab fa-facebook-f"></i>
                         </a>
                         <a target="_blank" href="https://www.linkedin.com/company/sunbeam-academy">
                             <i class="fab fa-linkedin"></i>
                         </a>
                         <a target="_blank" href="https://www.instagram.com/sunbeam.academy/">
                             <i class="fab fa-instagram"></i>
                         </a>
                     </div>
                 </div>
                 <div class="header-top-right">
                     <div class="header-top-contact">
                         <ul>
                             <li>
                                 <a href="#">
                                     <i class="far fa-location-dot"></i>
                                     Varanasi, Uttar Pradesh 221005
                                 </a>
                             </li>
                             <li>
                                 <a href="mailto:info@sunbeamacademy.com">
                                     <i class="far fa-envelopes"></i>
                                     <span class="__cf_email__">info@sunbeamacademy.com</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="tel:+919554958414"><i class="far fa-phone-volume"></i> +91 95549 58414</a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="main-navigation">
         <nav class="navbar navbar-expand-lg">
             <div class="container position-relative">
                 <a class="navbar-brand" href="{{ url('/') }}">
                     <img src="{{asset('fronted/assets/sunbeam-img/logo.png')}}" alt="logo">
                 </a>
                 <div class="mobile-menu-right">
                     
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                         data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                     </button>
                 </div>
                 <div class="collapse navbar-collapse mobile-menu-dis" id="main_nav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                             <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                         </li>
                         <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Branches</a>
                             <ul class="dropdown-menu fade-down">
                                 <!-- <li><a class="dropdown-item" href="{{ route('sunbeam-academy-samneghat') }}">Sunbeam Academy Samneghat</a></li>
                                 <li><a class="dropdown-item" href="{{ route('sunbeam-academy-durgakund') }}">Sunbeam Academy Durgakund</a></li>
                                 <li><a class="dropdown-item" href="{{ route('sunbeam-academy-sarainandan') }}">Sunbeam Academy Sarainandan</a></li>
                                 <li><a class="dropdown-item" href="{{ route('sunbeam-academy-knowledge-park')}}">Sunbeam Academy Knowledge Park</a></li> -->
                                @foreach(branch_urls() as $branch)
                                    <li><a class="dropdown-item" href="{{ $branch['url'] }}" target="_blank">{{ $branch['name'] }}</a></li>
                                @endforeach
                             </ul>
                         </li>
                         <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Academics</a>
                             <ul class="dropdown-menu fade-down">
                                 <li>
                                    <a class="dropdown-item" href="{{ route('curriculum') }}">Curriculum</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('school-levels') }}">School Levels</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('holistic-educational-approach') }}">Holistic Educational Approach</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('academic-support-programs') }}">Academic Support Programs</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('day-bording-in-house') }}"> Day Bording in-house Coaching</a>
                                </li>
                             </ul>
                         </li>
                         
                         <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Admissions</a>
                             <ul class="dropdown-menu fade-down">
                                 <li><a class="dropdown-item" href="{{ route('book-a-tour')}}">Book a Tour</a></li>
                                 <li><a class="dropdown-item" href="{{ route('fee-structure')}}">Fee Structure</a></li>
                                 <li><a class="dropdown-item" href="{{ route('rules-and-regulations')}}">Rules and Regulations</a></li>
                             </ul>
                         </li>
                         <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Scholarships</a>
                             <ul class="dropdown-menu fade-down">
                                 <li><a class="dropdown-item" href="{{ route('elite-11')}}">Elite 11 </a></li>
                                 <li><a class="dropdown-item" href="{{ route('sathee')}}">Sathee</a></li>
                             </ul>
                         </li>
                         <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Life at Sunbeam</a>
                            <ul class="dropdown-menu fade-down">
                                <li><a class="dropdown-item" href="{{ route('life.hobby-classes') }}">Hobby Classes</a></li>
                                <li><a class="dropdown-item" href="{{ route('life.school-cinema') }}">School Cinema</a></li>
                                <li><a class="dropdown-item" href="{{ route('life.stem-labs') }}">STEM Labs</a></li>
                                <li><a class="dropdown-item" href="{{ route('life.early-learning-labs') }}">Early Learning Labs</a></li>
                                <li><a class="dropdown-item" href="{{ route('life.music-labs') }}">Music Labs</a></li>
                                <li><a class="dropdown-item" href="{{ route('life.shooting-academy') }}">Shooting Academy</a></li>
                                <li><a class="dropdown-item" href="{{ route('life.cricket-academy') }}">Cricket Academy</a></li>
                                <li><a class="dropdown-item" href="{{ route('life.dramatics-radio') }}">Dramatics & Sunbeam Radio</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Hostel</a>
                            <ul class="dropdown-menu fade-down">
                                <li><a class="dropdown-item" href="{{ route('hostel.boys') }}">Boys Hostel</a></li>
                                <li><a class="dropdown-item" href="{{ route('hostel.girls') }}">Girls Hostel</a></li>
                                <li><a class="dropdown-item" href="{{ route('hostel.weekly-boarding') }}">Weekly Boarding</a></li>
                                <li><a class="dropdown-item" href="{{ route('hostel.rules') }}">Rules and Regulations</a></li>
                            </ul>
                        </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('contact-us') }}">Contact</a>
                         </li>
                     </ul>
                     <!--<div class="nav-right">
                            
                            <div class="nav-right-btn mt-2">
                                <a href="application-form.html" class="theme-btn"><span
                                        class="fal fa-pencil"></span>Apply Now</a>
                            </div>
                        </div>-->
                 </div>
             </div>
         </nav>
     </div>
 </header>
 <!-- header area end -->