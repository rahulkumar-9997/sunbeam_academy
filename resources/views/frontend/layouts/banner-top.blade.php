<!-- hero slider -->
<div class="hero-section">
    <div class="hero-slider owl-carousel owl-theme">
        <div class="hero-single" style="background: url({{asset('fronted/assets/sunbeam-img/banner/banner-1.jpg')}})">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-7">
                        <div class="hero-content">
                            <h6 class="hero-sub-title" data-animation="fadeInDown" data-delay=".25s">
                                <i class="far fa-book-open-reader"></i>Welcome To Sunbeam Academy!
                            </h6>
                            <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                A Safe and  <span> Happy Place </span> to Grow!
                            </h1>
                            <p data-animation="fadeInLeft" data-delay=".75s">
                                Sunbeam Academy gives your child a safe and friendly space to learn, play, and grow with confidence.
                            </p>
                            <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                <a href="#" class="theme-btn">About More<i
                                        class="fas fa-arrow-right-long"></i></a>
                                <a href="#" class="theme-btn theme-btn2">Learn More<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-single" style="background: url({{asset('fronted/assets/sunbeam-img/banner/banner-4.jpg')}})">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-7">
                        <div class="hero-content">
                            <h6 class="hero-sub-title" data-animation="fadeInDown" data-delay=".25s">
                                <i class="far fa-book-open-reader"></i>Welcome To Sunbeam Academy!
                            </h6>
                            <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                Strong Start for a <span>Bright</span> Future
                            </h1>
                            <p data-animation="fadeInLeft" data-delay=".75s">
                            We help kids build strong skills in reading, writing, and thinking. Sunbeam Academy supports your child’s bright future.
                            </p>
                            <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                <a href="#" class="theme-btn">About More<i
                                        class="fas fa-arrow-right-long"></i></a>
                                <a href="#" class="theme-btn theme-btn2">Learn More<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-single" style="background: url({{asset('fronted/assets/sunbeam-img/banner/banner-3.jpg')}})">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-7">
                        <div class="hero-content">
                            <h6 class="hero-sub-title" data-animation="fadeInDown" data-delay=".25s">
                                <i class="far fa-book-open-reader"></i>Welcome To Sunbeam Academy!
                            </h6>
                            <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                Every Child is <span>Special </span> Here !
                            </h1>
                            <p data-animation="fadeInLeft" data-delay=".75s">
                            At Sunbeam Academy, we care for every child and help them learn in their own way with love and support.
                            </p>
                            <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                <a href="#" class="theme-btn">About More<i
                                        class="fas fa-arrow-right-long"></i></a>
                                <a href="#" class="theme-btn theme-btn2">Learn More<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (!empty($data['notices']) && $data['notices']->count() > 0)
        <div class="notice-board-wrapper">
            <div class="notice-board-container">
                <div class="notice-board-header">
                    <div class="notice-icon">
                        <i class="fas fa-scroll"></i>
                    </div>
                    <h3>Latest Announcements</h3>
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

<!-- hero slider end -->