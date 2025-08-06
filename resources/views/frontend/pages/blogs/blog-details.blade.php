@extends('frontend.layouts.master')
@section('title', $blog->title . ' | Sunbeam Academy')
@section('description', Str::limit(strip_tags($blog->description), 150))
@section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective, Technology Perspective')

@section('main-content')
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h2 class="breadcrumb-title">Our Blogs</h2>
        <h6 class="breadcrumb-subtitle">
            {{ $blog->title }}
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
                                {{ $blog->title }}
                            </h1>
                        </div>
                        @if($blog->main_image)
                        <div class="blog-de-img">
                            <div class="blog-thumb-img">
                                <img src="{{ asset('upload/blogs/' . $blog->main_image) }}" alt="{{ $blog->title }}" class="w-100">
                            </div>
                        </div>
                        @endif
                        <div class="blog-info">
                            <!--<div class="blog-meta">
                                <div class="blog-meta-left">
                                    <ul>
                                        <li><i class="far fa-user"></i><a href="#">Jean R Gunter</a></li>
                                        <li><i class="far fa-comments"></i>3.2k Comments</li>
                                        <li><i class="far fa-thumbs-up"></i>1.4k Like</li>
                                    </ul>
                                </div>
                                <div class="blog-meta-right">
                                    <a href="#" class="share-link"><i class="far fa-share-alt"></i>Share</a>
                                </div>
                            </div>-->
                            <div class="blog-details">
                                <div class="blog-de-content">
                                    {!! clean_html_content($blog->description) !!}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @if($blog->paragraphs->count()>0)
                    @foreach ($blog->paragraphs as $paragraph) 
                        <div class="blog-paragraphs">
                            <div class="row">
                                <div class="col-lg-12">
                                    @if($paragraph->paragraph_image)
                                        <div class="col-lg-4 for-para-img">
                                            <div class="blg-param-img">
                                            <img src="{{ asset('upload/blogs/paragraphs/' . $paragraph->paragraph_image) }}" alt="{{ $paragraph->paragraph_title}}" class="w-100">
                                            </div>
                                        </div>
                                    @endif
                                    <h4 class="blog-para-title">
                                        {{ $paragraph->paragraph_title}}
                                    </h4>
                                    <div class="paragraphs_description">
                                        {!! clean_html_content($paragraph->paragraph_description) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection