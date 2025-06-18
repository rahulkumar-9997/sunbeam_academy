@extends('frontend.layouts.master')
@section('title','Sunbeam Academy - Notice')
@section('description', 'Let a child become an independent learner who is morally strong and environmentally aware.')
@section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective')
@section('main-content')
<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h2 class="breadcrumb-title">Notice</h2>
    </div>
</div>
<div class="notice-area notice-py">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-sm-12">
                <ul class="events-academ">
                    <li class="ng-scope">
                        @if (!empty($data['notices']) && $data['notices']->count() > 0)
                        <div class="events-boder">
                            @foreach($data['notices'] as $notice)
                            <div class="eventslist-div ng-scope">

                                <div class="d-table-form1">
                                    <div class="d-table-f1-iteam i2 text-left">
                                        <a href="{{ route('notices.show', $notice->slug) }}" class="ng-binding">
                                            {{ $notice->title }}
                                            <label class="badge bg-primary notice-type">
                                                {{ ucfirst($notice->notice_type) }}
                                            </label>
                                        </a>
                                        <h5 class="noticeh5">
                                            <span class="start-end-date">
                                                {{ \Carbon\Carbon::parse($notice->start_date)->format('D, d M Y') }}, 
                                                {{ \Carbon\Carbon::parse($notice->end_date)->format('d M Y') }}
                                            </span>
                                        <h5>
                                    </div>
                                </div>

                            </div>
                             @endforeach
                            
                        </div>
                        @endif
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</div>


@endsection