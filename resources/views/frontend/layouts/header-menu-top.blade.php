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
                     <div class="search-btn">
                         <button type="button" class="nav-right-link search-box-outer">
                             <i class="far fa-search"></i>
                         </button>
                     </div>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                         data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                     </button>
                 </div>
                 <div class="collapse navbar-collapse" id="main_nav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                             <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                         </li>
                         <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Branches</a>
                             <ul class="dropdown-menu fade-down">
                                 <li><a class="dropdown-item" href="#">Sunbeam Academy Samneghat</a></li>
                                 <li><a class="dropdown-item" href="#">Sunbeam Academy Durgakund</a></li>
                                 <li><a class="dropdown-item" href="#">Sunbeam Academy Sarainandan</a></li>
                                 <li><a class="dropdown-item" href="#">Sunbeam Academy Knowledge Park</a></li>
                                 <li><a class="dropdown-item" href="#">Sunbeam Academy Ghazipur</a></li>
                             </ul>
                         </li>
                         <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Academics</a>
                             <ul class="dropdown-menu fade-down">
                                 <li>
                                    <a class="dropdown-item" href="{{ route('life-at-sunbeam.curriculum') }}">Curriculum</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('life-at-sunbeam.academic-support-programs') }}">School Levels</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('life-at-sunbeam.holistic-educational-approach') }}">Holistic Educational Approach</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('life-at-sunbeam.hostels') }}">Academic Support Programs</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('life-at-sunbeam.rules-and-regulations') }}"> Day Bording in-house Coaching</a>
                                </li>
                             </ul>
                         </li>
                         
                         <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Admissions</a>
                             <ul class="dropdown-menu fade-down">
                                 <li><a class="dropdown-item" href="#">Book a Tour</a></li>
                                 <li><a class="dropdown-item" href="#">Fee Structure</a></li>
                                 <li><a class="dropdown-item" href="#">Rules and Regulations</a></li>
                             </ul>
                         </li>
                         <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Schlorships</a>
                             <ul class="dropdown-menu fade-down">
                                 <li><a class="dropdown-item" href="#">Elite 11 </a></li>
                                 <li><a class="dropdown-item" href="#">Sathee</a></li>
                             </ul>
                         </li>
                         <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Life at Sunbeam</a>
                             <ul class="dropdown-menu fade-down">
                                 <li><a class="dropdown-item" href="#">Hobby Classes</a></li>
                                 <li><a class="dropdown-item" href="#">School Cinema</a></li>
                                 <li><a class="dropdown-item" href="#">STEM Labs</a></li>
                                 <li><a class="dropdown-item" href="#">Early Learning Labs</a></li>
                                 <li><a class="dropdown-item" href="#">Music Labs</a></li>
                                 <li><a class="dropdown-item" href="#">Shooting Academy</a></li>
                                 <li><a class="dropdown-item" href="#">Cricket Academy</a></li>
                                 <li><a class="dropdown-item" href="#">Dramatics Sunbeam Radio</a></li>
                             </ul>
                         </li>
                         <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Hostel</a>
                             <ul class="dropdown-menu fade-down">
                                 <li><a class="dropdown-item" href="#">Boys Hostel</a></li>
                                 <li><a class="dropdown-item" href="#">Girls Hostel</a></li>
                                 <li><a class="dropdown-item" href="#">Weekly Boarding</a></li>
                                 <li><a class="dropdown-item" href="#">Rule and Regulations</a></li>
                                 
                             </ul>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="#">Contact</a>
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