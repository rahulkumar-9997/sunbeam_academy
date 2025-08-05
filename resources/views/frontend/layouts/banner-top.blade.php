<!-- hero slider -->
@if (!empty($data['banners']) && $data['banners']->count()>0)
    
    <div class="hero-section mobile-hero">
        <div class="hero-slider owl-carousel owl-theme">
            @foreach($data['banners'] as $banner)
                <div class="hero-single">
                    <div class="hero-image-container">
                        <img src="{{ asset('upload/banner/' . $banner->desktop_img) }}" alt="{{ $banner->title ?? 'Sunbeam Academy Banner' }}" class="hero-image" width="100%">
                    </div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-7">
                                <div class="hero-content">
                                    <div class="hero-content-sub">
                                        <h6 class="hero-sub-title" data-animation="fadeInDown" data-delay=".25s">
                                            <i class="far fa-book-open-reader"></i>
                                            {{ $banner->title ?? 'Welcome To Sunbeam Academy!' }}
                                        </h6>
                                        <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                            {!! $banner->sub_title ?? '' !!}
                                        </h1>
                                        <p data-animation="fadeInLeft" data-delay=".75s">
                                            {{ $banner->short_content ?? '' }}
                                        </p>
                                        @if($banner->about_more_link)
                                            <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                                <a href="{{ $banner->about_more_link }}" class="theme-btn">
                                                    About More
                                                    <i class="fas fa-arrow-right-long"></i>
                                                </a>                                            
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
           
        </div>
        @if (!empty($data['notices']) && $data['notices']->count() > 0)
            <div class="notice-board-wrapper">
                <div class="notice-board-container">
                    <div class="notice-board-header">
                        <div class="notice-icon">
                            <i class="fas fa-scroll"></i>
                        </div>
                        <h3>Latest Notice</h3>
                        <div class="notice-controls">
                            <button class="notice-pause"><i class="fas fa-pause"></i></button>
                        </div>
                    </div>
                    <div class="notice-board-content">
                        <ul class="notice-list">
                            @foreach ($data['notices'] as $notice)
                                <li class="notice-item">
                                    <a href="{{ route('notices.show', $notice->slug) }}">
                                        <div class="notice-badge">{{ strtoupper($notice->notice_type) }}</div>
                                        <div class="notice-text">
                                            {{ $notice->title }}
                                        </div>
                                        <div class="notice-date">{{ $notice->created_at->format('d M Y') }}</div>
                                    </a>
                                </li>
                            @endforeach                    
                        </ul>
                    </div>
                    <div class="notice-footer">
                        <a href="{{ route('notices.index') }}" class="view-all">View All Notices <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endif

<!-- hero slider end -->