<header class="header">
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
        @php
        $mainDomain = env('MAIN_DOMAIN', 'https://sunbeamacademy.com');
        @endphp
        <nav class="navbar navbar-expand-lg">
            <div class="container position-relative">
                <a class="navbar-brand" href="{{ $mainDomain }}">
                    <img src="{{ asset('fronted/assets/sunbeam-img/logo.png') }}" alt="logo"    width="221" height="52" decoding="async" loading="lazy">
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
                            <a class="nav-link" href="{{ $mainDomain }}/about-us">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Branches</a>
                            <ul class="dropdown-menu fade-down">
                                @foreach(branch_urls() as $branch)
                                <li><a class="dropdown-item" href="{{ $branch['external'] ? $branch['url'] : route($branch['slug']) }}"  {{ $branch['external'] ? 'target=_blank' : '' }}>{{ $branch['name'] }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Academics</a>
                            <ul class="dropdown-menu fade-down">
                                <li><a class="dropdown-item" href="{{ $mainDomain }}/academics/curriculum">Curriculum</a></li>
                                <li><a class="dropdown-item" href="{{ $mainDomain }}/academics/school-levels">School Levels</a></li>
                                <li><a class="dropdown-item" href="{{ $mainDomain }}/academics/holistic-educational-approach">Holistic Educational Approach</a></li>
                                <li><a class="dropdown-item" href="{{ $mainDomain }}/academics/academic-support-programs">Academic Support Programs</a></li>
                                <li><a class="dropdown-item" href="{{ $mainDomain }}/academics/day-bording-in-house">Day Bording in-house Coaching</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Admissions</a>
                            <ul class="dropdown-menu fade-down">
                                <li><a class="dropdown-item" href="{{ $mainDomain }}/admissions/book-a-tour">Book a Tour</a></li>
                                <li><a class="dropdown-item" href="{{ $mainDomain }}/admissions/fee-structure">Fee Structure</a></li>
                                <li><a class="dropdown-item" href="{{ $mainDomain }}/admissions/rules-and-regulations">Rules and Regulations</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Scholarships</a>
                            <ul class="dropdown-menu fade-down">
                                <!--<li><a class="dropdown-item" href="{{ $mainDomain }}/schlorships/elite-11">Elite 11</a></li>-->
								<li><a class="dropdown-item" href="https://elite11.co.in/Elite11_.aspx" target="_blank">Elite 11</a></li>
                                <li><a class="dropdown-item" href="{{ $mainDomain }}/schlorships/sathee">Sathee</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Life at Sunbeam</a>
                            <ul class="dropdown-menu fade-down">
                                <li><a class="dropdown-item" href="{{ $mainDomain }}/life-at-sunbeam/hobby-classes">Hobby Classes</a></li>
                                <li><a class="dropdown-item" href="{{ $mainDomain }}/life-at-sunbeam/school-cinema">School Cinema</a></li>
                                <li><a class="dropdown-item" href="{{ $mainDomain }}/life-at-sunbeam/stem-labs">STEM Labs</a></li>
                                <li><a class="dropdown-item" href="{{ $mainDomain }}/life-at-sunbeam/early-learning-labs">Early Learning Labs</a></li>
                                <li><a class="dropdown-item" href="{{ $mainDomain }}/life-at-sunbeam/music-labs">Music Labs</a></li>
                                <li><a class="dropdown-item" href="{{ $mainDomain }}/life-at-sunbeam/shooting-academy">Shooting Academy</a></li>
                                <li><a class="dropdown-item" href="{{ $mainDomain }}/life-at-sunbeam/cricket-academy">Cricket Academy</a></li>
                                <li><a class="dropdown-item" href="{{ $mainDomain }}/life-at-sunbeam/dramatics-radio">Dramatics & Sunbeam Radio</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Hostel</a>
                            <ul class="dropdown-menu fade-down">
                                <li><a class="dropdown-item" href="{{ $mainDomain }}/hostel/boys-hostel">Boys Hostel</a></li>
                                <li><a class="dropdown-item" href="{{ $mainDomain }}/hostel/girls-hostel">Girls Hostel</a></li>
                                <li><a class="dropdown-item" href="{{ $mainDomain }}/hostel/weekly-boarding">Weekly Boarding</a></li>
                                <li><a class="dropdown-item" href="{{ $mainDomain }}/hostel/rules-regulations">Rules and Regulations</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $mainDomain }}/career">Career</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $mainDomain }}/contact-us">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
</header>