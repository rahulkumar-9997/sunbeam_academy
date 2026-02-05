@extends('backend.layouts.master')
@section('title','Edit Class')
@push('styles')
<link rel="stylesheet" href="{{asset('backend/assets/plugins/summernote/summernote-bs4.min.css')}}">
<!-- <link rel="stylesheet" href="{{asset('backend/assets/plugins/select2/css/select2.min.css')}}"> -->
@endpush
@section('main-content')
<div class="content">
    <div class="page-header">
        <div class="add-item d-flex">
            <div class="page-title">
                <h4 class="fw-bold">Edit Class</h4>
            </div>
        </div>

        <div class="page-btn">
            <a href="{{ route('manage-classes') }}"
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
                Edit Class Form
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('manage-classes.update', ['id' => $classes_row->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="title" class="form-label">Title *</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title', $classes_row->title) }}">
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="heading_name" class="form-label">Heading Name *</label>
                        <input type="text" class="form-control @error('heading_name') is-invalid @enderror" name="heading_name" id="heading_name" value="{{ old('heading_name', $classes_row->heading_name) }}">
                        @error('heading_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="main_image" class="form-label">Main Image *</label>                       
                        <input type="file" class="form-control @error('main_image') is-invalid @enderror" name="main_image" id="main_image">
                        @error('main_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-3 mb-3">
                        @if($classes_row->main_image)
                            <img src="{{ asset('upload/classes/' . $classes_row->main_image) }}" width="100" class="mb-2">
                        @endif
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="branches" class="form-label">Select Branches *</label>
                        <select class="form-control select2 @error('branches') is-invalid @enderror" multiple name="branches[]" id="branches">
                            @foreach($branch_list as $branch)
                            <option value="{{ $branch->id }}" {{ in_array($branch->id, old('branches', $classes_row->branches->pluck('id')->toArray())) ? 'selected' : '' }}>
                                {{ $branch->name }}
                            </option>
                            @endforeach
                        </select>
                        @error('branches')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="meta_title" class="form-label">Meta Title</label>
                        <input type="text"
                            class="form-control @error('meta_title') is-invalid @enderror"
                            name="meta_title"
                            id="meta_title"
                            value="{{ old('meta_title', $classes_row->meta_title ?? '') }}">
                        @error('meta_title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="meta_description" class="form-label">Meta Description</label>
                        <textarea
                            class="form-control @error('meta_description') is-invalid @enderror"
                            name="meta_description"
                            id="meta_description"
                            rows="3">{{ old('meta_description', $classes_row->meta_description ?? '') }}</textarea>
                            @error('meta_description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="summernote" class="form-label">Description *</label>
                        <textarea name="description" rows="3" class="form-control ckeditor4 @error('description') is-invalid @enderror">{{ old('description', $classes_row->description) }}</textarea>
                        @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <div class="form-check form-switch mt-4">
                            <input class="form-check-input" value="1" type="checkbox" id="status" name="status" {{ old('status', $classes_row->status) ? 'checked' : '' }}>
                            <label class="form-check-label" for="status">Status</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center justify-content-end mb-4 gap-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('manage-notice-board') }}" class="btn btn-secondary">Cancel</a>
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
<script src="{{ asset('backend/assets/ckeditor-4/ckeditor.js') }}"></script>
<script>
    document.querySelectorAll('.ckeditor4').forEach(function(el) {
        CKEDITOR.replace(el, {
            removePlugins: 'exportpdf'
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: "Select Notice Type",
            width: '100%'
        });
    });
</script>
@endpush