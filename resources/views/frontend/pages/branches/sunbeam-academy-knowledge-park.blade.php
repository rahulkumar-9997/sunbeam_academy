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
					<div class="btn-area-branch mt-4" data-aos="fade-left" data-aos-duration="1100">
						<a href="{{ route('disclosure.branch', ['branchSlug' => $branch->slug]) }}" class="theme-btn">View Disclosure<i class="fas fa-arrow-right-long"></i></a>
					</div>
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
<div class="branch-content-section pt-50 pb-10 branch-content">
	<div class="container">
		<div class="row justify-content-md-center align-items-center">			
			<div class="col-lg-12">
				<div class="branchtitle-section">
					<h6 class="btitle text-center">
						<span>Sunbeam Knowledge Park  </span>shaping bright minds with </span> <span>modern learning</span>
					</h6>					
				</div>
				<div class="branchdetails">
					<p>
						Sunbeam Academy Knowledge Park offers a forward-thinking learning environment where academic success is balanced with personal development. The school follows a CBSE curriculum that builds critical thinking, ethical understanding, and communication skills. With well-equipped classrooms, digital tools, and a child-centered approach, this branch helps students prepare for future challenges with confidence. The focus here is not just on marks but on making every child capable of learning, leading, and adapting. Families in and around Knowledge Park value this branch for its modern facilities and focus on shaping responsible, capable learners.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="team-single pt-30 pb-40 branches-p-message">
	<div class="container">
		<div class="row justify-content-md-center align-items-center">
			<div class="col-lg-6">
				<div class="site-heading">
					<h2 class="site-title">Principal’s <span>Message </span></h2>
				</div>
				<div class="team-details">
					<div class="row align-items-center">
						<div class="col-md-4">
							<div class="team-single-img text-center branches-img-div">
								<img src="{{asset('fronted/assets/sunbeam-img/noperson-male.png')}}" class="" alt="principal">
							</div>
						</div>

						<div class="col-md-8">
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
			@if(!empty($data['notices']) && $data['notices']->count() > 0)
			<div class="col-lg-6">
				<div class="site-heading">
					<h2 class="site-title">Latest<span> Notice</span></h2>
				</div>
				<div class="notice-list-branch">
					<div class="row align-items-center">
						<div class="col-md-12">
							<div class="br-notice-head"></div>
							<div class="notice-card">
								<ul>
									@foreach ($data['notices'] as $notice)
										<li class="view-report-notice">
											<a href="{{ route('notices.show', $notice->slug) }}">
												<div class="notice-badge">
													{{ strtoupper($notice->notice_type) }}
												</div>
												<div class="notice-text">
													{{ $notice->title }}
												</div>
												<div class="notice-date">
													{{ $notice->created_at->format('d M Y') }}
												</div>
											</a>
										</li>
									@endforeach
								</ul>
							</div>
							<div class="br-notice-foot">
								<a href="{{ route('notices.index', $branch->slug) }}" class="view-all">View All Notices <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endif
		</div>
	</div>
</div>
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
					<h3>Sunbeam Academy Knowledge Park</h3>
				</div>
				<div class="tour-details">
					<p>
						Sunbeam Academy – Knowledge Park is known for its commitment to academic excellence, holistic development, and innovative learning environments. With over a decade of nurturing young minds, our campus stands as a beacon of progressive education in the region.
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

@if (!empty($data['achieversList']) && $data['achieversList']->count() > 0)
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
				@foreach($data['achieversList'] as $achiever)
					<div class="col-md-6 col-lg-4">
						<div class="blog-item wow fadeInUp" data-wow-delay=".25s">
							<div class="blog-item-img">
								@if($achiever->profile_pic)
									<img src="{{ asset('upload/achievers/' . $achiever->profile_pic) }}" alt="{{ $achiever->title }}">
								@else
									<img src="{{ asset('fronted/assets/sunbeam-img/branches/samneghat/achievers/samiksha-mishita-mahi.png') }}" alt="Default Image">
								@endif
							</div>
							<div class="blog-item-info">
								<h4 class="blog-title">
									<a href="{{ route('achievers.details', ['slug' => $achiever->slug]) }}">
										{{ $achiever->title }}								
									</a>
								</h4>
								@if($achiever->short_content)
									<p>							
										{{ Str::limit($achiever->short_content, 100) }}
									</p>
								@endif
								<a class="theme-btn" href="{{ route('achievers.details', ['slug' => $achiever->slug]) }}">
									Read More 
									<i class="fas fa-arrow-right-long"></i>
								</a>
							</div>
						</div>
					</div>
				@endforeach
				@if($data['achieversList']->count() > 3)
					<div class="col-md-12 col-lg-12">
						<div class="text-center">
							<a href="{{ route('achievers') }}" class="theme-btn mt-10">View All Achievers
								<i class="fas fa-arrow-right-long"></i>
							</a>
						</div>
					</div>
				@endif
			</div>
		</div>
	</div>
@endif
<!-- alumni area -->
@if (!empty($data['alumniList']) && $data['alumniList']->count() > 0)
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
				@foreach($data['alumniList'] as $alumni)
					<div class="testimonial-item">
						<div class="testimonial-quote">
							<p>
								{{ $alumni->content ? Str::limit($alumni->content, 150) : 'No content available' }}
							</p>
						</div>
						<div class="read-more-alumni text-center">
							<a href="javascript:;"
								class="theme-btn"
								data-ajax-alumni-popup="true"
								data-size="lg"
								data-title="{{ $alumni->title }}"
								data-url="{{ route('alumni.details', ['slug' => $alumni->slug]) }}"
							>Read More
							<i class="fas fa-arrow-right-long"></i>
						</a>
						</div>
						<div class="testimonial-content">
							<div class="testimonial-author-img">
								@if($alumni->profile_pic)
									<img src="{{ asset('upload/alumni/' . $alumni->profile_pic) }}" alt="{{ $alumni->title }}">
								@else
									<img src="{{asset('fronted/assets/img/testimonial/01.jpg')}}" alt="{{ $alumni->title }}">
								@endif
							</div>
							<div class="testimonial-author-info">
								<h4>{{ $alumni->title }}</h4>
								<p>Student</p>
							</div>
						</div>
						<span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endif
<!-- alumni area end -->
@if (!empty($data['album']) && $data['album']->count() > 0)
	<div class="gallery-area pt-30 pb-80 branches-gallery">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mx-auto">
					<div class="site-heading text-center">
						<h2 class="site-title">Gall<span>ery</span></h2>
					</div>
				</div>
			</div>
			<div class="row popup-gallery display-gallery-data-by-ajax">
				@foreach($data['album'] as $index => $item)
					@php
						$delay = ($index % 3 == 0) ? '.25s' : (($index % 3 == 1) ? '.50s' : '.75s');
					@endphp
					<div class="col-md-4 wow fadeInUp" data-wow-delay="{{ $delay }}">
						<div class="gallery-item home-album-item">
							<a href="{{ route('album.home', ['id' => $item->id]) . '?action=frontend_data&type=album&albumid=' . $item->id }}" class="home-album-ajax">
								@if($item->image)
								<div class="gallery-img">
									<img src="{{ asset('upload/album/'.$item->image) }}" alt="{{ $item->title }}" class="img-fluid">
								</div>
								<div class="gal-album-title text-center">
									<h5>{{ $item->title }}</h5>
								</div>
								{{-- If no album image, check for gallery images --}}
								@elseif($item->galleries->isNotEmpty() && $item->galleries->first()->image_file)
								<div class="gallery-img">
									<img src="{{ asset('upload/album/gallery/'.$item->galleries->first()->image_file) }}" alt="{{ $item->title }}" class="img-fluid">
								</div>
								<div class="gal-album-title text-center">
									<h5>{{ $item->title }}</h5>
								</div>
								@else
								<div class="gallery-img">
									<img src="{{ asset('path/to/placeholder.jpg') }}" alt="{{ $item->title }}" class="img-fluid">
								</div>
								<div class="gal-album-title text-center">
									<h5>{{ $item->title }}</h5>
								</div>
								@endif
								{{-- Show photo count if available --}}
								<!-- @if($item->galleries->count() > 0)
								<div class="gallery-content-count">
									<span class="badge bg-primary">
										{{ $item->galleries->count() }} {{ ($item->galleries->count() > 1) ? 'photos' : 'photo' }}
									</span>
								</div>
								@endif -->
							</a>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endif
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
@include('frontend.layouts.common-modal');
@endsection
@push('scripts')
<script src="{{asset('fronted/assets/js/pages/gallery-ajax.js')}}"></script>
@endpush