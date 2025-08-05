@extends('frontend.layouts.master')
@section('title','Sunbeam Academy - School Levels')
@section('description', 'Let a child become an independent learner who is morally strong and environmentally aware.')
@section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective')
@section('main-content')
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h2 class="breadcrumb-title">School Levels</h2>
    </div>
</div>
@if (!empty($data['classes']) && $data['classes']->count() > 0)
<div class="course-area pt-40 pb-50">
    <div class="container">        
        <div class="row">
            @foreach($data['classes'] as $key => $class)
            <div class="col-md-6 col-lg-4">
                <div class="course-item wow fadeInUp" data-wow-delay="{{ ($key+1)*0.25 }}s">
                    <a href="{{ route('classes.details', $class->slug) }}">
                        <div class="course-img">
                            <span class="course-tag">
                                <i class="far fa-bookmark"></i>
                                {{ $class->title }}
                            </span>
                            @if($class->main_image)
                            <img src="{{ asset('upload/classes/'.$class->main_image) }}" alt="{{ $class->title }}">
                            @else
                            <img src="{{ asset('fronted/assets/sunbeam-img/school-level/default-class.jpg') }}" alt="img">
                            @endif
                        </div>
                        <div class="course-content">
                            <h4 class="course-title">
                                {{ $class->title }}
                            </h4>
                            <p class="course-text">
                                {!! Str::limit(strip_tags($class->description), 100) !!}
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
            <div class="col-md-12 col-lg-12">
                <div class="paginate-section">
                    {{ $data['classes']->links('vendor.pagination.bootstrap-4') }}
                </div>  
            </div>
        </div>
    </div>
</div>
@endif

@endsection