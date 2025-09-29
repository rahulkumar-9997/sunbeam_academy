@extends('frontend.layouts.master')
@section('title','Sunbeam Academy - Archievers')
@section('description', 'Let a child become an independent learner who is morally strong and environmentally aware.')
@section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective')
@section('main-content')
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h2 class="breadcrumb-title">Archievers</h2>
    </div>
</div>
@if (!empty($data['achieversList']) && $data['achieversList']->count() > 0)
	<div class="blog-area pb-40 pt-40 branches-achievers bg branches-achievers-list">
		<div class="container">			
			<div class="row">
				@foreach($data['achieversList'] as $achiever)
					<div class="col-md-6 col-lg-4">
						<div class="blog-item wow fadeInUp" data-wow-delay=".25s">
							<div class="blog-item-img">
                                <span class="course-tag">
                                    {{ $achiever->branch->name }}
                                </span>   
								@if($achiever->profile_pic)
									<img src="{{ asset('upload/achievers/' . $achiever->profile_pic) }}" alt="{{ $achiever->title }}" loading="lazy" decoding="async">
								@else
									<img src="{{ asset('fronted/assets/sunbeam-img/branches/samneghat/achievers/samiksha-mishita-mahi.png') }}" alt="Default Image" loading="lazy" decoding="async">
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
                <div class="paginate-section">
                    {{ $data['achieversList']->links('vendor.pagination.bootstrap-4') }}
                </div>  				
			</div>
		</div>
	</div>
@endif

@endsection
@push('scripts')

@endpush