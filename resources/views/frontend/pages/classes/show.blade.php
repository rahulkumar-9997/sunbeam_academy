@extends('frontend.layouts.master')
@section('title', $classes->title . ' | Sunbeam Academy')
@section('description', Str::limit(strip_tags($classes->description), 160))
@section('main-content')
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h2 class="breadcrumb-title">{{ $classes->title }}</h2>
    </div>
</div>
<div class="course-single-area classes-details">
    <div class="container">
        <div class="course-single-wrapper">
            <div class="row justify-content-md-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="course-details">
                        <div class="course-details-img mb-30">
                            @if($classes->main_image)
                                <img loading="lazy" decoding="async"  src="{{ asset('upload/classes/'.$classes->main_image) }}" alt="{{ $classes->title }}" class="w-100">
                            @else
                                <img loading="lazy" decoding="async"  src="{{ asset('fronted/assets/sunbeam-img/school-level/default-class.jpg') }}" alt="img" class="w-100">
                            @endif
                        </div>
                        <div class="course-details">
                            <h3 class="mb-20">
                                {{ $classes->heading_name }}
                            </h3>
                            <div class="classess_content">
                                {!! clean_html_content($classes->description) !!}
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection