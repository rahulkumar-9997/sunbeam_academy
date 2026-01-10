 @php
    $mainDomain = env('MAIN_DOMAIN', 'https://sunbeamacademy.com');
@endphp

 <footer class="footer-area">
     <div class="footer-shape">
         <img src="{{asset('fronted/assets/img/shape/03.png')}}" alt="shape">
     </div>
     <div class="footer-widget">
         <div class="container">
             <div class="row footer-widget-wrapper pt-100 pb-70">
                 <div class="col-md-6 col-lg-5">
                     <div class="footer-widget-box about-us">
                         <a href="#" class="footer-logo">
                             <img src="{{asset('fronted/assets/sunbeam-img/logo.png')}}" alt="footer logo">
                         </a>
                         <p class="mb-3">
                             Sunbeam Academy schools are considered to be one of the best schools in and around Varanasi where your child will explore all the areas of art, education, and much more.
                         </p>
                         <ul class="footer-contact f-contact">
                             <li>
                                 <a href="tel:+919554958414">
                                     <div class="f-icon">
                                         <i class="far fa-phone"></i>
                                     </div>
                                     <span>+91 95549 58414</span>
                                 </a>
                             </li>
                             <li>
                                 <div class="f-icon">
                                     <i class="far fa-map-marker-alt"></i>
                                 </div>
                                 <span>
                                     Garhwa Ghat Rd, Samne Ghat, Bhagwanpur, Varanasi, Uttar Pradesh 221005
                                 </span>
                             </li>
                             <li>
                                 <a href="mailto:info@sunbeamacademy.com">
                                     <div class="f-icon">
                                         <i class="far fa-envelopes"></i>
                                     </div>
                                     <span class="__cf_email__">info@sunbeamacademy.com</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
                <div class="col-md-6 col-lg-2">
                     <div class="footer-widget-box list">
                         <h4 class="footer-widget-title">Quick Links</h4>
                         <ul class="footer-list">
                             <li><a href="{{ $mainDomain }}/about-us"><i class="fas fa-caret-right"></i>About Us</a></li>
                             <li><a href="{{ $mainDomain }}/contact-us"><i class="fas fa-caret-right"></i>Contact Us</a></li>
                             <li><a href="{{ $mainDomain }}/blog"><i class="fas fa-caret-right"></i>Blog</a></li>
                             <li><a href="{{ $mainDomain }}/admissions/rules-and-regulations"><i class="fas fa-caret-right"></i>Rules & Regulations</a></li>
                             <li><a href="{{ $mainDomain }}/career"><i class="fas fa-caret-right"></i>Career</a></li>
                             <!-- <li><a href="#"><i class="fas fa-caret-right"></i>Privacy policy</a></li>
                             <li><a href="#"><i class="fas fa-caret-right"></i>Terms & Condition</a></li> -->
                         </ul>
                     </div>
                 </div>

                 <div class="col-md-6 col-lg-2">
                     <div class="footer-widget-box list">
                         <h4 class="footer-widget-title">For Users</h4>
                         <ul class="footer-list">
                             <li><a href="{{ $mainDomain }}/academics/curriculum"><i class="fas fa-caret-right"></i>Curriculum</a></li>
                             <li><a href="{{ $mainDomain }}/hostel/boys-hostel"><i class="fas fa-caret-right"></i>Hostels</a></li>
                             <li><a href="{{ $mainDomain }}/classes"><i class="fas fa-caret-right"></i>Classes</a></li>
                             <li><a href="https://forms.gle/XZTmoZ17AHvkWdHx7" target="_blank"><i class="fas fa-caret-right"></i>Admissions</a></li>
                             <li><a href="{{ $mainDomain }}/admissions/fee-structure"><i class="fas fa-caret-right"></i>Fees Rule</a></li>
                             <li><a href="{{ $mainDomain }}/schlorships/elite-11"><i class="fas fa-caret-right"></i>Elite 11</a></li>
                         </ul>
                     </div>
                 </div>

                 <div class="col-md-6 col-lg-3">
                     <div class="footer-widget-box list">
                         <h4 class="footer-widget-title">Branches</h4>
                         <ul class="footer-list">                             
                            @foreach(branch_urls() as $branch)
                            <li>
                                <a href="{{ $branch['external'] ? $branch['url'] : route($branch['slug']) }}"  {{ $branch['external'] ? 'target=_blank' : '' }}>{{ $branch['name'] }}</a>
                            </li> 
                            @endforeach
                         </ul>
                     </div>
                 </div>

             </div>
         </div>
     </div>
     <div class="copyright">
         <div class="container">
             <div class="copyright-wrapper">
                 <div class="row">
                     <div class="col-md-6 align-self-center">
                         <p class="copyright-text">
                             &copy; Copyright <span id="date"></span> <a href="#"> Sunbeam Academy </a> All Rights Reserved.
                         </p>
                     </div>
                     <div class="col-md-6 align-self-center">
                         <ul class="footer-social">
                             <li>
                                 <a target="_blank" href="https://www.facebook.com/Sunbeamacademy1972">
                                     <i class="fab fa-facebook-f"></i>
                                 </a>
                             </li>
                             <li>
                                 <a target="_blank" href="https://www.linkedin.com/company/sunbeam-academy">
                                     <i class="fab fa-linkedin-in"></i>
                                 </a>
                             </li>
                             <li>
                                 <a target="_blank" href="https://www.instagram.com/sunbeam.academy/">
                                     <i class="fab fa-instagram"></i>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- footer area end -->
 @if(session('success') || session('error'))
 <div class="toast-container position-fixed top-0 start-50 translate-middle-x p-3" style="z-index: 1055;">
     <div class="toast align-items-center text-white {{ session('success') ? 'bg-success' : 'bg-danger' }} border-0 show" role="alert">
         <div class="d-flex">
             <div class="toast-body">
                 {{ session('success') ?? session('error') }}
             </div>
             <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
         </div>
     </div>
 </div>
 @endif

 <div id="loader" class="loader-wrapper" style="display: none;">
     <span class="site-loader"> </span>
     <h3 class="loader-content"> Loading . . . </h3>
 </div>
 <!--enquiry modal code-->
<div class="modal location-modal fade theme-modal" id="autoOpenModal" tabindex="-1">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sunbeam Academy Online Admission Form</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal">
            </button>
         </div>
         <div class="modal-body">
            <div class="modal-render-data">

            </div>
         </div>
      </div>
   </div>
</div>
<!--enquiry modal code-->