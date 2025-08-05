@extends('frontend.layouts.master')
@section('title', $achieversDetail->title . ' | Sunbeam Academy')
@section('description', Str::limit(strip_tags($achieversDetail->short_content), 150))
@section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective, Technology Perspective')

@section('main-content')
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h2 class="breadcrumb-title">Archievers</h2>
        <h6 class="breadcrumb-subtitle">
            {{ $achieversDetail->title }}
        </h6>
    </div>
</div>
<div class="blog-single-area pt-40 pb-50">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-10">
                <div class="blog-single-wrapper">
                    <div class="blog-single-content">
                        <div class="blog-de-title">
                            <h1 class="blog-details-title mb-20">
                                {{ $achieversDetail->title }}
                            </h1>
                        </div>                        
                        <div class="blog-info">                            
                            <div class="blog-details">
                                <div class="blog-de-content">
                                    {!! $achieversDetail->long_content !!}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection