@extends('frontend.layouts.master')
@section('title', $notice->title . ' | Sunbeam Academy')
@section('description', Str::limit(strip_tags($notice->description), 160))
@section('keywords', 'Sunbeam Academy, Notice, ' . $notice->notice_type)
@section('main-content')
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h2 class="breadcrumb-title">Notice Details</h2>
    </div>
</div>
<div class="notice-area notice-py">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-sm-12">
                <div class="eventdetails">
                    <div class="events-boder ng-scope">
                        <div class="eventdetails2">
                            <h1 class="ng-binding">{{ $notice->title }}</h1>
                            <div class="events-bg">
                                <span class="ng-binding"><strong>Date: </strong>
                                 {{ \Carbon\Carbon::parse($notice->start_date)->format('D, d M Y') }}, 
                                {{ \Carbon\Carbon::parse($notice->end_date)->format('d M Y') }}
                            </span>
                            </div>
                        </div>
                        <div class="eventdetails3">
                            @if($notice->file)
                                <div class="notice-download mt-3">
                                    <a href="{{ asset('storage/notices/'.$notice->file) }}" class="btn btn-secondary">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection