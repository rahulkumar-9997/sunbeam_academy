@php
$metaTitle = $notice->title . ' | Sunbeam Academy';
$metaDesc = $notice->description;
$metaDescription = \Illuminate\Support\Str::limit(strip_tags($metaDesc), 160);
@endphp
@extends('frontend.layouts.master')
@section('title', $metaTitle)
@section('description', $metaDescription)
@section('main-content')

<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h2 class="breadcrumb-title">{{ $notice->title }}</h2>
    </div>
</div>
<div class="notice-area notice-py">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-sm-12">
                <div class="eventdetails">
                    <div class="events-boder ng-scope">
                        <div class="eventdetails2">
                            <h1 class="ng-binding">
                                {{ $notice->page_heading ?: $notice->title }}
                            </h1>
                            <!-- <div class="events-bg">
                                <span class="ng-binding"><strong>Date: </strong>
                                 {{ \Carbon\Carbon::parse($notice->start_date)->format('D, d M Y') }}, 
                                {{ \Carbon\Carbon::parse($notice->end_date)->format('d M Y') }}
                            </span>
                            </div> -->
                        </div>
                        <div class="eventdetails3">
                            @if($notice->file)
                            <div class="notice-download mt-1">
                                <a href="{{ asset('upload/notice/'.$notice->file) }}" class="btn btn-secondary">
                                    <i class="fas fa-download"></i> Download Attachment
                                </a>
                            </div>
                            @endif
                            <div class="notice-content mt-4">
                                {!! $notice->description !!}
                            </div>
                            @if($notice->page_link)
                            <div class="external-link mt-2">
                                <a href="{{ $notice->page_link }}" target="_blank" class="btn btn-outline-primary">
                                    <i class="fas fa-external-link-alt"></i> Visit Official Page
                                </a>
                            </div>
                            @endif
                        </div>
                        @if($notice->noticeImages->count()>0)
                            <div class="notice_additional_image">
                                <div class="row popup-gallery">
                                    @foreach ($notice->noticeImages as $index => $image)
                                    @php
                                        $delay = ($index % 3 == 0) ? '.25s' : (($index % 3 == 1) ? '.50s' : '.75s');
                                    @endphp
                                    <div class="col-md-3 wow fadeInUp" data-wow-delay="{{ $delay }}">
                                        <div class="gallery-item">
                                            <div class="gallery-img image-file">
                                                <img src="{{ asset('upload/notice/'.$image->file) }}" alt="{{ $image->title }}">
                                            </div>
                                            <div class="gallery-content">
                                                <a class="popup-img gallery-link" href="{{ asset('upload/notice/'.$image->file) }}">
                                                    <i class="fal fa-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection