
@if (isset($galleriesList) && $galleriesList->count() > 0)
    <div class="col-lg-12">
        <div class="home-gallery-back">
            <i class="fa fa-arrow-left"></i>
            <span> Back</span>
        </div>
        <div class="ajax-album-title">
            <h4>
                {{ $album->title }}
            </h4>
        </div>
    </div>
    @foreach($galleriesList as $index => $gallery)
        @php
            $delay = ($index % 3 == 0) ? '.25s' : (($index % 3 == 1) ? '.50s' : '.75s');
        @endphp
        <div class="col-md-4 wow fadeInUp" data-wow-delay="{{ $delay }}">
            <div class="gallery-item">
                <div class="gallery-img">
                    <img loading="lazy" decoding="async"  src="{{ asset('upload/album/gallery/'.$gallery->image_file) }}" alt="img">
                </div>
                <div class="gallery-content">
                    <a class="popup-img gallery-link" href="{{ asset('upload/album/gallery/'.$gallery->image_file) }}">
                        <i class="fal fa-plus"></i>
                    </a>
                </div>
            </div>
        </div>
    @endforeach    
@endif