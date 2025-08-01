@extends('backend.layouts.master')
@section('title','Edit New Gallery')
@push('styles')
<link rel="stylesheet" href="{{asset('backend/assets/plugins/summernote/summernote-bs4.min.css')}}">
@endpush
@section('main-content')
<div class="content">
    <div class="page-header">
        <div class="add-item d-flex">
            <div class="page-title">
                <h4 class="fw-bold">Edit New Gallery</h4>
            </div>
        </div>
        <div class="page-btn">
            <a href="{{ route('manage-gallery.index') }}"
                data-bs-toggle="tooltip"
                title="Back to Previous Page"
                class="btn btn-secondary">
                <i class="ti ti-arrow-left me-1"></i>
                Back to Previous Page
            </a>
        </div>

    </div>
    <div class="card">
        <div class="card-header justify-content-between">
            <div class="card-title">
                Gallery Edit Form
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('manage-gallery.update', $galleryRow->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <div class="mb-3">
                            <div class="add-newplus">
                                <label class="form-label">
                                    Select Album
                                    <span class="text-danger ms-1">*</span>
                                </label>
                                <a href="javascript:void(0);"
                                    data-title="Add New Album"
                                    data-ajax-album-add-popup="true"
                                    data-url="{{ route('manage-album.create') }}"
                                    data-size="lg"
                                    data-action="select">
                                    <i data-feather="plus-circle" class="plus-down-add"></i>
                                    <span>Add New Album</span>
                                </a>
                            </div>
                            <select class="select" name="album" id="album">
                                <option value="">-- Select Album --</option>
                                @foreach($albumList as $album)
                                <option value="{{ $album->id }}"
                                    {{ old('album', $galleryRow->album_id) == $album->id ? 'selected' : '' }}>
                                    {{ $album->title }}
                                </option>
                                @endforeach
                            </select>
                            @error('album')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">                       
                        <label for="gallery_image" class="form-label">Replace Image</label>
                        <input type="file" class="form-control @error('gallery_image') is-invalid @enderror" name="gallery_image" id="gallery_image">
                        @error('gallery_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="text-muted">Leave blank to keep current image</small>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <label for="gallery_image" class="form-label">Current Image</label>
                        <div class="mb-2">
                            @if($galleryRow->image_file)
                            <img src="{{ asset('upload/album/gallery/'.$galleryRow->image_file) }}" width="150" class="img-thumbnail">
                            @else
                            <span class="text-muted">No image uploaded</span>
                            @endif
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center justify-content-end mb-4 gap-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('manage-gallery.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->
@include('backend.layouts.common-modal-form')
<!-- modal--->
@endsection
@push('scripts')
<script src="{{asset('backend/assets/js/pages/album.js')}}" type="text/javascript"></script>
@endpush