<!-- hero slider -->
@if (!empty($data['banners']) && $data['banners']->count() > 0)
    <div class="hero-section mobile-hero">
        <div class="hero-slider owl-carousel owl-theme">
            @foreach($data['banners'] as $index => $banner)
                @php
                    $headingLevel = min($index + 1, 6);
                    $desktopImg = url('/images/banner/' . $banner->desktop_img);
                    $mobileImg = url('/images/banner/' . ($banner->mobile_img ?? $banner->desktop_img));
                @endphp
                <div class="hero-single">
                    <div class="hero-image-container">
                        <picture>
                            {{-- Mobile image (smaller file size) --}}
                            <source 
                                media="(max-width: 768px)"
                                srcset="{{ $mobileImg }}?w=412&h=206&q=80 1x,
                                        {{ $mobileImg }}?w=824&h=412&q=80 2x"
                                type="image/jpeg">                            
                            {{-- Desktop image --}}
                            <source 
                                media="(min-width: 769px)"
                                srcset="{{ $desktopImg }}?w=824&h=412&q=80 1x,
                                        {{ $desktopImg }}?w=1361&h=681&q=80 2x"
                                type="image/jpeg"> 
                            <img 
                                src="{{ $desktopImg }}?w=824&h=412&q=80"
                                alt="{{ $banner->title ?? 'Sunbeam Academy Banner' }}" 
                                class="hero-image"
                                width="824" 
                                height="412"
                                decoding="async"
                                fetchpriority="{{ $index === 0 ? 'high' : 'low' }}"
                                loading="{{ $index === 0 ? 'eager' : 'lazy' }}"
                                onload="this.style.opacity='1'">
                        </picture>
                    </div>                    
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-7">
                                <div class="hero-content">
                                    <div class="hero-content-sub">
                                        <h6 class="hero-sub-title" 
                                            data-animation="fadeInDown" 
                                            data-delay=".25s">
                                            <i class="far fa-book-open-reader" aria-hidden="true"></i>
                                            {{ $banner->title ?? 'Welcome To Sunbeam Academy!' }}
                                        </h6>
                                        <h{{ $headingLevel }} class="hero-title" 
                                            data-animation="fadeInRight" 
                                            data-delay=".50s">
                                            {!! $banner->sub_title ?? '' !!}
                                        </h{{ $headingLevel }}>
                                        <p data-animation="fadeInLeft" data-delay=".75s">
                                            {{ $banner->short_content ?? '' }}
                                        </p>
                                        @if($banner->about_more_link)
                                            <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                                <a href="{{ $banner->about_more_link }}" class="theme-btn">
                                                    About More
                                                    <i class="fas fa-arrow-right-long" aria-hidden="true"></i>
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

        {{-- Notice Board --}}
        @if (!empty($data['notices']) && $data['notices']->count() > 0)
            <div class="notice-board-wrapper">
                <div class="notice-board-container">
                    <div class="notice-board-header">
                        <div class="notice-icon">
                            <i class="fas fa-scroll" aria-hidden="true"></i>
                        </div>
                        <h3>Latest Notice</h3>
                        <div class="notice-controls">
                            <button class="notice-pause">
                                <i class="fas fa-pause" aria-hidden="true"></i>
                                <span class="sr-only">Pause Notices</span>
                            </button>
                        </div>
                    </div>

                    <div class="notice-board-content">
                        <ul class="notice-list">
                            @foreach ($data['notices'] as $notice)
                                <li class="notice-item">
                                    <a href="{{ route('notices.show', $notice->slug) }}">
                                        <div class="notice-badge">{{ strtoupper($notice->notice_type) }}</div>
                                        <div class="notice-text">{{ $notice->title }}</div>
                                        @if($notice->branches->count() > 0)
                                            @foreach ($notice->branches as $branch)
                                                <div class="notice-branch">{{ $branch->name }}</div>
                                            @endforeach
                                        @endif
                                    </a>
                                </li>
                            @endforeach                    
                        </ul>
                    </div>

                    <div class="notice-footer">
                        <a href="{{ route('notices.index') }}" class="view-all">
                            View All Notices 
                            <i class="fas fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endif
<!-- hero slider end -->
