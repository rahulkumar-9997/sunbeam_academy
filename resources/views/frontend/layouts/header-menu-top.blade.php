<!-- header start -->
<header id="xb-header-area" class="header-area header-style-two header-style-three is-sticky">
    <div class="xb-header">
        <div class="container">
            <div class="header__wrap ul_li_between">
                <div class="header-logo">
                    <a href="{{ url('/') }}">
                        <img class="logohead" src="{{asset('fronted/assets/sunbeam-img/logo.png')}}" alt="logo">
                        <!-- <img class="logoheadbig" src="{{asset('fronted/assets/sunbeam-img/sunbean-logo.png')}}" alt="logo"> -->
                    </a>
                </div>
                <div class="main-menu__wrap ul_li navbar navbar-expand-lg">
                    <nav class="main-menu collapse navbar-collapse">
                        <ul>
                            <!-- <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li> -->
                            <li class="menu-item-has-children active">
                                <a href="{{ url('/') }}">About Us</a>
                                <ul class="submenu">
                                    <li><a href="{{ url('/') }}">About Us</a></li>
                                    <li><a href="{{ url('/') }}">Founders Message</a></li>
                                    <li><a href="{{ url('/') }}">CEO Message</a></li>
                                    <li><a href="{{ url('/') }}">Deputy Directors Message</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children active">
                                <a href="{{ url('/') }}">Branches</a>
                                <ul class="submenu">
                                    <li><a href="{{ url('/') }}">Sunbeam Academy Samneghat</a></li>
                                    <li><a href="{{ url('/') }}">Sunbeam Academy Durgakund</a></li>
                                    <li><a href="{{ url('/') }}">Sunbeam Academy Sarainandan</a></li>
                                    <li><a href="{{ url('/') }}">Sunbeam Academy Knowledge Park</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="#!">Life@Sunbeam</a>
                                <ul class="submenu">
                                    <li><a href="{{ url('/') }}">Curriculum</a></li>
                                    <li><a href="{{ url('/') }}">Academic Support Programs</a></li>
                                    <li><a href="{{ url('/') }}">Holistic Educational Approach</a></li>
                                    <li><a href="{{ url('/') }}">Hostels</a></li>
                                    <li><a href="{{ url('/') }}">Rules & Regulations</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('/') }}">Classes</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#!">Admission</a>
                                <ul class="submenu">
                                    <li><a href="{{ url('/') }}">Admission</a></li>
                                    <li><a href="{{ url('/') }}">Book a Tour</a></li>
                                    <li><a href="{{ url('/') }}">Holistic Educational Approach</a></li>
                                    <li><a href="{{ url('/') }}">Hostels</a></li>
                                    <li><a href="{{ url('/') }}">Fee Rules</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('/') }}">Elite 11</a>
                            </li>
                            <li>
                                <a href="{{ url('/') }}">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="xb-header-wrap">
                        <div class="xb-header-menu">
                            <div class="xb-header-menu-scroll">
                                <div class="xb-menu-close xb-hide-xl xb-close"></div>
                                <div class="xb-logo-mobile xb-hide-xl">
                                    <a href="index.html" rel="home">
                                        <img src="{{asset('fronted/assets/img/logo/logo-2.svg')}}" alt="">
                                    </a>
                                </div>
                                <div class="xb-header-mobile-search xb-hide-xl">
                                    <form role="search" action="#">
                                        <input type="text" placeholder="Search..." name="s" class="search-field">
                                        <button class="search-submit" type="submit"><i class="far fa-search"></i></button>
                                    </form>
                                </div>
                                <nav class="xb-header-nav">
                                    <ul class="xb-menu-primary clearfix">
                                        <li class="menu-item menu-item-has-children">
                                            <a href="index.html">Home</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html">University</a></li>
                                                <li><a href="home-2.html">College</a></li>
                                                <li><a href="home-3.html">High School</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="admission.html">Admission</a>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#!">Courses</a>
                                            <ul class="sub-menu">
                                                <li><a href="courses.html">Courses</a></li>
                                                <li><a href="course-single.html">Course Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#!">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="about.html">About Us</a></li>
                                                <li class="menu-item menu-item-has-children"><a href="blog.html">Blog</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="blog.html">Blog</a></li>
                                                        <li class="menu-item"><a href="blog-single.html">Blog Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children"><a href="event.html">Event</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="event.html">Event</a></li>
                                                        <li class="menu-item"><a href="event-single.html">Event Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children"><a href="team.html">Team</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="team.html">Team</a></li>
                                                        <li class="menu-item"><a href="team-single.html">Team Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item"><a href="tuition-fees.html">Tuition & Fees</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="xb-header-menu-backdrop"></div>
                    </div>
                </div>
                <!--<div class="hs-header-right ul_li">
                    
                    <div class="hs-header-btn">
                        <a class="thm-btn thm-btn--stroke-black hover-2" href="tel:555-666-7777"><span><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.1513 9.85383C15.7572 9.85383 15.4455 9.533 15.4455 9.148C15.4455 8.80883 15.1063 8.103 14.538 7.48883C13.9788 6.893 13.3647 6.54466 12.8513 6.54466C12.4572 6.54466 12.1455 6.22383 12.1455 5.83883C12.1455 5.45383 12.4663 5.133 12.8513 5.133C13.768 5.133 14.7305 5.628 15.5738 6.51716C16.3622 7.35133 16.8663 8.38716 16.8663 9.13883C16.8663 9.533 16.5455 9.85383 16.1513 9.85383Z" fill="#161A2C" />
                                    <path d="M19.4611 9.85415C19.0669 9.85415 18.7553 9.53331 18.7553 9.14831C18.7553 5.89415 16.1061 3.25415 12.8611 3.25415C12.4669 3.25415 12.1553 2.93331 12.1553 2.54831C12.1553 2.16331 12.4669 1.83331 12.8519 1.83331C16.8853 1.83331 20.1669 5.11498 20.1669 9.14831C20.1669 9.53331 19.8461 9.85415 19.4611 9.85415Z" fill="#161A2C" />
                                    <path d="M10.8072 13.0258L7.80967 16.0233C7.47967 15.73 7.15884 15.4275 6.84717 15.1158C5.90301 14.1625 5.05051 13.1633 4.28967 12.1183C3.53801 11.0733 2.93301 10.0283 2.49301 8.99248C2.05301 7.94748 1.83301 6.94831 1.83301 5.99498C1.83301 5.37165 1.94301 4.77581 2.16301 4.22581C2.38301 3.66665 2.73134 3.15331 3.21717 2.69498C3.80384 2.11748 4.44551 1.83331 5.12384 1.83331C5.38051 1.83331 5.63717 1.88831 5.86634 1.99831C6.10467 2.10831 6.31551 2.27331 6.48051 2.51165L8.60717 5.50915C8.77217 5.73831 8.89134 5.94915 8.97384 6.15081C9.05634 6.34331 9.10217 6.53581 9.10217 6.70998C9.10217 6.92998 9.03801 7.14998 8.90967 7.36081C8.79051 7.57165 8.61634 7.79165 8.39634 8.01165L7.69967 8.73581C7.59884 8.83665 7.55301 8.95581 7.55301 9.10248C7.55301 9.17581 7.56217 9.23998 7.58051 9.31331C7.60801 9.38665 7.63551 9.44165 7.65384 9.49665C7.81884 9.79915 8.10301 10.1933 8.50634 10.67C8.91884 11.1466 9.35884 11.6325 9.83551 12.1183C10.1655 12.4391 10.4863 12.7508 10.8072 13.0258Z" fill="#161A2C" />
                                    <path d="M20.139 16.8025C20.139 17.0592 20.0931 17.325 20.0015 17.5817C19.974 17.655 19.9465 17.7283 19.9098 17.8017C19.754 18.1317 19.5523 18.4433 19.2865 18.7367C18.8373 19.2317 18.3423 19.5892 17.7831 19.8183C17.774 19.8183 17.7648 19.8275 17.7556 19.8275C17.2148 20.0475 16.6281 20.1667 15.9956 20.1667C15.0606 20.1667 14.0615 19.9467 13.0073 19.4975C11.9531 19.0483 10.899 18.4433 9.85397 17.6825C9.49647 17.4167 9.13897 17.1508 8.7998 16.8667L11.7973 13.8692C12.054 14.0617 12.2831 14.2083 12.4756 14.3092C12.5215 14.3275 12.5765 14.355 12.6406 14.3825C12.714 14.41 12.7873 14.4192 12.8698 14.4192C13.0256 14.4192 13.1448 14.3642 13.2456 14.2633L13.9423 13.5758C14.1715 13.3467 14.3915 13.1725 14.6023 13.0625C14.8131 12.9342 15.024 12.87 15.2531 12.87C15.4273 12.87 15.6106 12.9067 15.8123 12.9892C16.014 13.0717 16.2248 13.1908 16.454 13.3467L19.4881 15.5008C19.7265 15.6658 19.8915 15.8583 19.9923 16.0875C20.084 16.3167 20.139 16.5458 20.139 16.8025Z" fill="#161A2C" />
                                </svg></span>call us now
                        </a>
                    </div>
                </div>-->
                <div class="header-bar-mobile side-menu d-lg-none">
                    <a class="xb-nav-mobile" href="javascript:void(0);"><i class="fal fa-bars"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->
<!-- header search start -->
<div class="header-search-form-wrapper">
    <div class="xb-search-close xb-close"></div>
    <div class="header-search-container">
        <form role="search" class="search-form" action="#">
            <input type="search" class="search-field" placeholder="Search …" value="" name="s">
            <button type="submit" class="search-submit"><i class="far fa-search"></i></button>
        </form>
    </div>
</div>
<div class="body-overlay"></div>