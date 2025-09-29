@extends('frontend.layouts.master')
@section('title','Sunbeam Academy - About us')
@section('description', 'Let a child become an independent learner who is morally strong and environmentally aware.')
@section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective')
@section('main-content')
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h2 class="breadcrumb-title">Our Blogs</h2>
    </div>
</div>
<div class="blog-area pt-40 pb-50 blog-list-page">
    <div class="container">
        @if (!empty($data['blog']) && $data['blog']->count() > 0)  
            <div class="row">
                @foreach($data['blog'] as $index => $item)
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item blog-list-p-item wow fadeInUp" data-wow-delay=".{{ ($index + 1) * 25 }}s">
                            @if($item->created_at)
                                <div class="blog-date">
                                    <i class="fal fa-calendar-alt"></i>
                                    {{ \Carbon\Carbon::parse($item->created_at)->format('F d, Y') }}
                                </div>
                            @endif

                            <div class="blog-item-img">
                                <a href="{{ route('blog.details', $item->slug) }}">
                                    <img src="{{ asset('upload/blogs/' . $item->main_image) }}" alt="{{ $item->title }}" loading="lazy" decoding="async">
                                </a>
                            </div>
                            <div class="blog-item-info">
                                <h4 class="blog-title">
                                    <a href="{{ route('blog.details', $item->slug) }}">
                                        {{ $item->title }}
                                    </a>
                                </h4>
                                <a class="theme-btn" href="{{ route('blog.details', $item->slug) }}">
                                    Read More
                                    <i class="fas fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach                
            </div> 
            <!-- pagination -->
            <div class="paginate-section">
                 {{ $data['blog']->links('vendor.pagination.bootstrap-4') }}
            </div>            
        @endif
    </div>
</div>
@endsection