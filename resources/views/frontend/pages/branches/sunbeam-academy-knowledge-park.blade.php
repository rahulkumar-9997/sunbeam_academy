@extends('frontend.layouts.master')
@section('title','Sunbeam Academy - Knowledge Park')
@section('description', 'Let a child become an independent learner who is morally strong and environmentally aware.')
@section('keywords', 'Sunbeam Academy, Knowledge Park Varanasi, Experienced Teachers, Global Perspective,Technology Perspective')
@section('main-content')
<!--===== HERO AREA STARTS =======-->
<div class="hero1-section-area knowledge-park-hero">
	<div class="bg1">
		<img src="{{asset('fronted/assets/sunbeam-img/branches/samneghat/header-bg2.png')}}" alt="" class="header-bg1" />
	</div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="hero1-header heading1 wow fadeInLeft" data-wow-delay=".25s">

					<h1 class="text-anime-style-3">
						Welcome to Sunbeam Academy <span>Knowledge Park.</span>
					</h1>
					<p data-aos="fade-left" data-aos-duration="900">
						{!! $branch->address !!}
					</p>
					<div class="branches-head-con">
						<ul>
                            
                             <li>
                                 <a href="mailto:{{ $branch->email_1 }}">
                                     <i class="far fa-envelopes"></i>
                                     {{ $branch->email_1 }}
                                 </a>
                             </li>
                             <li>
                                 <a href="tel:+91{{ $branch->phone_1 }}"><i class="far fa-phone-volume"></i> +91 {{ $branch->phone_1 }}</a>
                             </li>
                         </ul>
					</div>
					<!-- <div class="btn-area1" data-aos="fade-left" data-aos-duration="1100">
						<a href="#" class="theme-btn">Visit Website<i class="fas fa-arrow-right-long"></i></a>
					</div> -->
				</div>
			</div>
			<div class="col-lg-6">
				<div class="header-images wow fadeInRight" data-wow-delay=".25s">
					<!-- <div class="img1" data-aos="zoom-in" data-aos-duration="1000">
						<img src="{{asset('fronted/assets/img/all-images/hero/hero-img1.png')}}" alt="" />
					</div> -->
					<div class="images-content-area" data-aos="fade-up">
						<div class="home-video-wrapper">
							<iframe
								class="video-iframe"
								loading="lazy"
								frameborder="0"
								allowfullscreen
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
								referrerpolicy="strict-origin-when-cross-origin"
								title="Sunbeam academy"
								src="https://www.youtube.com/embed/NtZNHjHSnk0?autoplay=1&mute=1&controls=1&rel=0&playsinline=1&modestbranding=1&enablejsapi=1&loop=1&playlist=NtZNHjHSnk0"
								id="widget2">
							</iframe>
						</div>

					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!--===== HERO AREA ENDS =======-->
<!--Principal Message-->
<div class="team-single pt-30 pb-40 branches-p-message">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mx-auto">
				<div class="site-heading text-center">
					<h2 class="site-title">Principal’s <span>Message </span></h2>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-md-4">
				<div class="team-single-img  branches-img-div text-center">
					<img src="{{asset('fronted/assets/sunbeam-img/noperson-male.png')}}" class="" alt="principal">
				</div>
			</div>
			<div class="col-md-8">
				<div class="team-details">
					<h3>Principal’s</h3>
					<strong>Mr. Pankaj Mishra</strong>
					<p class="mt-3">
						“Welcome to our Durgakund Campus! We take immense pride in fostering an environment where every child feels seen, supported, and inspired to achieve greatness. We look forward to partnering with you in your child’s educational journey.”
					</p>
					<p>— Principal</p>

					<div class="team-details-social">
						<a href="#"><i class="fab fa-linkedin-in"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Principal Message-->
<div class="feature-area pt-30 pb-30 brnche-campus">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mx-auto">
				<div class="site-heading text-center">
					<span class="site-title-tagline">
						Welcome to Our Campus</span>
					<h2 class="site-title">A vibrant learning community at the heart of <span>Varanasi</span></h2>
				</div>
			</div>
		</div>
		<div class="row g-4">
			<div class="col-md-6 col-lg-3">
				<div class="feature-item wow fadeInUp" data-wow-delay=".25s">
					<span class="count">01</span>
					<div class="feature-icon">
						<img src="{{asset('fronted/assets/sunbeam-img/branches/samneghat/icon/established.png')}}" alt="icon">
					</div>
					<div class="feature-content">
						<h4 class="feature-title">Established in 2010</h4>
						<p>Since 2016, Sunbeam Academy Samne Ghat has been shaping young minds with a perfect mix of traditional values and modern education.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="feature-item active wow fadeInDown" data-wow-delay=".25s">
					<span class="count">02</span>
					<div class="feature-icon">
						<img src="{{asset('fronted/assets/sunbeam-img/branches/samneghat/icon/grades.png')}}" alt="icon">
					</div>
					<div class="feature-content">
						<h4 class="feature-title">Grades K–12</h4>
						<p>We offer a complete learning journey from Kindergarten to Grade 12, ensuring consistent academic and personal growth at every stage.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="feature-item wow fadeInUp" data-wow-delay=".25s">
					<span class="count">03</span>
					<div class="feature-icon">
						<img src="{{asset('fronted/assets/sunbeam-img/branches/samneghat/icon/40-classrooms.png')}}" alt="icon">
					</div>
					<div class="feature-content">
						<h4 class="feature-title">40+ Classrooms with Smart Tech</h4>
						<p>Our 40+ smart classrooms create an interactive and tech-friendly environment that makes learning more engaging and effective.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="feature-item wow fadeInDown" data-wow-delay=".25s">
					<span class="count">04</span>
					<div class="feature-icon">
						<img src="{{asset('fronted/assets/sunbeam-img/branches/samneghat/icon/award-winning-faculty.png')}}" alt="icon">
					</div>
					<div class="feature-content">
						<h4 class="feature-title">Award-winning faculty and academic programs</h4>
						<p>Led by award-winning teachers, our academic programs are designed to inspire excellence and prepare students for a brighter tomorrow.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="steps-area p-relative" style="background-color: #116f5f;">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-6">
				<div class="tour-title wow fadeInLeft   animated" data-animation="fadeInLeft" data-delay=".4s" style="visibility: visible; animation-name: fadeInLeft;">
					<h3>Sunbeam Academy Samneghat</h3>
				</div>
				<div class="tour-details">
					<p>
						Sunbeam Academy – Samneghat is known for its commitment to academic excellence, holistic development, and innovative learning environments. With over a decade of nurturing young minds, our campus stands as a beacon of progressive education in the region.
					</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="step-img wow fadeInLeft  animated" data-animation="fadeInLeft" data-delay=".4s">
					<img src="{{asset('fronted/assets/sunbeam-img/branches/samneghat/samneghat.jpg')}}" alt="class image" class="w100">
				</div>
			</div>
		</div>

	</div>
</section>
<div class="team-area2 pb-10 pt-40">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mx-auto">
				<div class="site-heading text-center">
					<span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Sunbeam Academy Teachers</span>
					<h2 class="site-title">Meet Our <span>Educators</span></h2>
					<p>
						Our dedicated team of educators brings passion, experience, and a commitment to continuous learning. Each faculty member is carefully selected not only for their academic excellence but also for their ability to inspire and nurture students.
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-3">
				<div class="team-item wow fadeInUp" data-wow-delay=".25s">
					<div class="team-img">
						<img src="{{asset('fronted/assets/img/team/05.jpg')}}" alt="thumb">
					</div>
					<div class="team-social">
						<a href="#"><i class="fab fa-linkedin-in"></i></a>
					</div>
					<div class="team-content">
						<div class="team-bio">
							<h5><a href="teacher-single.html">Angela T. Vigil</a></h5>
							<span>Associate Professor</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="team-item wow fadeInUp" data-wow-delay=".50s">
					<div class="team-img">
						<img src="{{asset('fronted/assets/img/team/06.jpg')}}" alt="thumb">
					</div>
					<div class="team-social">
						<a href="#"><i class="fab fa-linkedin-in"></i></a>
					</div>
					<div class="team-content">
						<div class="team-bio">
							<h5><a href="teacher-single.html">Frank A. Mitchell</a></h5>
							<span>Associate Professor</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="team-item wow fadeInUp" data-wow-delay=".75s">
					<div class="team-img">
						<img src="{{asset('fronted/assets/img/team/07.jpg')}}" alt="thumb">
					</div>
					<div class="team-social">
						<a href="#"><i class="fab fa-linkedin-in"></i></a>
					</div>
					<div class="team-content">
						<div class="team-bio">
							<h5><a href="teacher-single.html">Susan D. Lunsford</a></h5>
							<span>CEO &amp; Founder</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="team-item wow fadeInUp" data-wow-delay="1s">
					<div class="team-img">
						<img src="{{asset('fronted/assets/img/team/08.jpg')}}" alt="thumb">
					</div>
					<div class="team-social">
						<a href="#"><i class="fab fa-linkedin-in"></i></a>
					</div>
					<div class="team-content">
						<div class="team-bio">
							<h5><a href="teacher-single.html">Dennis A. Pruitt</a></h5>
							<span>Associate Professor</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="blog-area pb-40 pt-10 branches-achievers bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mx-auto">
				<div class="site-heading text-center">
					<h2 class="site-title">Achie<span>vers</span></h2>
					<p>
						Sunbeam Academy Durgakund takes pride in its students who have excelled in academics, arts, and sports—both nationally and internationally.
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-4">
				<div class="blog-item wow fadeInUp" data-wow-delay=".25s">
					<div class="blog-item-img">
						<img src="{{asset('fronted/assets/sunbeam-img/branches/samneghat/achievers/pratyaksha-agarwal.png')}}" alt="Thumb">
					</div>
					<div class="blog-item-info">
						<h4 class="blog-title">
							<a href="#"> Sneha Kumari (97.6%) Commerce</a>
						</h4>
						<p>
							There are many variations passage have suffered available.
						</p>
						<a class="theme-btn" href="#">Read More<i class="fas fa-arrow-right-long"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="blog-item wow fadeInUp" data-wow-delay=".25s">
					<div class="blog-item-img">
						<img src="{{asset('fronted/assets/sunbeam-img/branches/samneghat/achievers/samiksha-mishita-mahi.png')}}" alt="Thumb">
					</div>
					<div class="blog-item-info">
						<h4 class="blog-title">
							<a href="#"> Sneha Kumari (97.6%) Commerce</a>
						</h4>
						<p>
							There are many variations passage have suffered available.
						</p>
						<a class="theme-btn" href="#">Read More<i class="fas fa-arrow-right-long"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="blog-item wow fadeInUp" data-wow-delay=".25s">
					<div class="blog-item-img">
						<img src="{{asset('fronted/assets/sunbeam-img/branches/samneghat/achievers/sneha-kumari.png')}}" alt="Thumb">
					</div>
					<div class="blog-item-info">
						<h4 class="blog-title">
							<a href="#">Pratyaksha Agarwal (95.8%)</a>
						</h4>
						<p>
							There are many variations passage have suffered available.
						</p>
						<a class="theme-btn" href="#">Read More<i class="fas fa-arrow-right-long"></i></a>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- testimonial area -->
<div class="testimonial-area ts-bg pt-30 pb-80 branches-alumni">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mx-auto">
				<div class="site-heading text-center">

					<h2 class="site-title text-white">Our<span> Alumni</span></h2>
					<p class="text-white">
						Our alumni are shaping the world in remarkable ways — from top universities to successful careers across industries.
					</p>
				</div>
			</div>
		</div>
		<div class="testimonial-slider owl-carousel owl-theme">
			<div class="testimonial-item">
				<div class="testimonial-quote">
					<p>
						There are many variations of tend to repeat chunks some all form necessary injected for the going are humour words.
					</p>
				</div>
				<div class="testimonial-content">
					<div class="testimonial-author-img">
						<img src="{{asset('fronted/assets/img/testimonial/01.jpg')}}" alt="">
					</div>
					<div class="testimonial-author-info">
						<h4>Anthony Nicoll</h4>
						<p>Student</p>
					</div>
				</div>
				<span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
			</div>
			<div class="testimonial-item">

				<div class="testimonial-quote">
					<p>
						There are many variations of tend to repeat chunks some all form necessary injected for the going are humour words.
					</p>
				</div>
				<div class="testimonial-content">
					<div class="testimonial-author-img">
						<img src="{{asset('fronted/assets/img/testimonial/02.jpg')}}" alt="">
					</div>
					<div class="testimonial-author-info">
						<h4>Richard Lock</h4>
						<p>Student</p>
					</div>
				</div>
				<span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
			</div>
			<div class="testimonial-item">

				<div class="testimonial-quote">
					<p>
						There are many variations of tend to repeat chunks some all form necessary injected for the going are humour words.
					</p>
				</div>
				<div class="testimonial-content">
					<div class="testimonial-author-img">
						<img src="{{asset('fronted/assets/img/testimonial/03.jpg')}}" alt="">
					</div>
					<div class="testimonial-author-info">
						<h4>Randal Grand</h4>
						<p>Student</p>
					</div>
				</div>
				<span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
			</div>
			<div class="testimonial-item">

				<div class="testimonial-quote">
					<p>
						There are many variations of tend to repeat chunks some all form necessary injected for the going are humour words.
					</p>
				</div>
				<div class="testimonial-content">
					<div class="testimonial-author-img">
						<img src="{{asset('fronted/assets/img/testimonial/04.jpg')}}" alt="">
					</div>
					<div class="testimonial-author-info">
						<h4>Edward Miles</h4>
						<p>Student</p>
					</div>
				</div>
				<span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
			</div>
			<div class="testimonial-item">

				<div class="testimonial-quote">
					<p>
						There are many variations of tend to repeat chunks some all form necessary injected for the going are humour words.
					</p>
				</div>
				<div class="testimonial-content">
					<div class="testimonial-author-img">
						<img src="{{asset('fronted/assets/img/testimonial/05.jpg')}}" alt="">
					</div>
					<div class="testimonial-author-info">
						<h4>Ninal Gordon</h4>
						<p>Student</p>
					</div>
				</div>
				<span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
			</div>
		</div>
	</div>
</div>
<!-- testimonial area end -->
<!-- gallery-area -->
<div class="gallery-area pt-30 pb-80 branches-gallery">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mx-auto">
				<div class="site-heading text-center">
					<h2 class="site-title">Gall<span>ery</span></h2>
				</div>
			</div>
		</div>
		<div class="row popup-gallery">
			<div class="col-md-4 wow fadeInUp" data-wow-delay=".25s">
				<div class="gallery-item">
					<div class="gallery-img">
						<img src="{{asset('fronted/assets/sunbeam-img/branches/samneghat/gallery/1.png')}}" alt="">
					</div>
					<div class="gallery-content">
						<a class="popup-img gallery-link" href="{{asset('fronted/assets/sunbeam-img/branches/samneghat/gallery/1.png')}}"><i
								class="fal fa-plus"></i></a>
					</div>
				</div>

			</div>
			<div class="col-md-4 wow fadeInUp" data-wow-delay=".50s">

				<div class="gallery-item">
					<div class="gallery-img">
						<img src="{{asset('fronted/assets/sunbeam-img/branches/samneghat/gallery/2.png')}}" alt="">
					</div>
					<div class="gallery-content">
						<a class="popup-img gallery-link" href="{{asset('fronted/assets/sunbeam-img/branches/samneghat/gallery/2.png')}}"><i
								class="fal fa-plus"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-4 wow fadeInUp" data-wow-delay=".75s">

				<div class="gallery-item">
					<div class="gallery-img">
						<img src="{{asset('fronted/assets/sunbeam-img/branches/samneghat/gallery/3.png')}}" alt="">
					</div>
					<div class="gallery-content">
						<a class="popup-img gallery-link" href="{{asset('fronted/assets/sunbeam-img/branches/samneghat/gallery/3.png')}}"><i
								class="fal fa-plus"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-4 wow fadeInUp" data-wow-delay=".75s">

				<div class="gallery-item">
					<div class="gallery-img">
						<img src="{{asset('fronted/assets/sunbeam-img/branches/samneghat/gallery/4.png')}}" alt="">
					</div>
					<div class="gallery-content">
						<a class="popup-img gallery-link" href="{{asset('fronted/assets/sunbeam-img/branches/samneghat/gallery/4.png')}}"><i
								class="fal fa-plus"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-4 wow fadeInUp" data-wow-delay=".75s">

				<div class="gallery-item">
					<div class="gallery-img">
						<img src="{{asset('fronted/assets/sunbeam-img/branches/samneghat/gallery/5.png')}}" alt="">
					</div>
					<div class="gallery-content">
						<a class="popup-img gallery-link" href="{{asset('fronted/assets/sunbeam-img/branches/samneghat/gallery/5.png')}}"><i
								class="fal fa-plus"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-4 wow fadeInUp" data-wow-delay=".75s">

				<div class="gallery-item">
					<div class="gallery-img">
						<img src="{{asset('fronted/assets/sunbeam-img/branches/samneghat/gallery/6.png')}}" alt="">
					</div>
					<div class="gallery-content">
						<a class="popup-img gallery-link" href="{{asset('fronted/assets/sunbeam-img/branches/samneghat/gallery/6.png')}}"><i
								class="fal fa-plus"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- gallery-area end -->
<div class="blog-area pb-60 pt-40 branches-achievers bg branches-con-dire">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mx-auto">
				<div class="site-heading text-center">
					<h2 class="site-title">Contact & <span>Directions</span></h2>

				</div>
			</div>
		</div>
		<div class="row  align-items-center">
			<div class="col-lg-6">
				<div class="branches-contact">
					<div class="row">
						<div class="col-md-6 mb-2">
							<div class="contact-info">
								<div class="contact-info-icon">
									<i class="fal fa-phone-volume"></i>
								</div>
								<div class="contact-info-content">
									<h5>Call Us</h5>
									<p>
										<a href="tel:+919554958414">
											+91 9554958414
										</a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 mb-2">
							<div class="contact-info">
								<div class="contact-info-icon">
									<i class="fal fa-envelopes"></i>
								</div>
								<div class="contact-info-content">
									<h5>Email</h5>
									<p>
										<a href="mailto:info@sunbeamacademy.com">
											info@sunbeamacademy.com
										</a>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="br-mapped-div">
								<div class="br-imbed">
									<iframe loading="lazy" src="https://maps.google.com/maps?q=sunbeam%20academy%20samneghat&amp;t=m&amp;z=13&amp;output=embed&amp;iwloc=near" title="sunbeam academy samneghat" aria-label="sunbeam academy samneghat"></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="branches-form contact-form">
					@include('frontend.pages.common.branches-enquiry-form', ['branch' => $branch])
				</div>
			</div>
		</div>
	</div>
</div>
@endsection