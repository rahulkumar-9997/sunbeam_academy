@extends('backend.layouts.master')
@section('title','Edit Blog')
@push('styles')
<link rel="stylesheet" href="{{asset('backend/assets/plugins/summernote/summernote-bs4.min.css')}}">
<!-- <link rel="stylesheet" href="{{asset('backend/assets/plugins/select2/css/select2.min.css')}}"> -->
@endpush
@section('main-content')
<div class="content">
    <div class="page-header">
        <div class="add-item d-flex">
            <div class="page-title">
                <h4 class="fw-bold">Edit Blog</h4>
            </div>
        </div>

        <div class="page-btn">
            <a href="{{ route('manage-blog.index') }}" data-bs-toggle="tooltip" title="Back to Previous Page"
                class="btn btn-secondary">
                <i class="ti ti-arrow-left me-1"></i>
                Back to Previous Page
            </a>
        </div>

    </div>
    <div class="card">
        <div class="card-header justify-content-between">
            <div class="card-title">
                Edit Blog Form
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('manage-blog.update', $blog->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <!-- Basic Blog Info -->
                    <div class="col-md-4 mb-3">
                        <label for="title" class="form-label">Title *</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                            id="title" value="{{ old('title', $blog->title) }}">
                        @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="main_image" class="form-label">Main Image</label>
                        <input type="file" class="form-control @error('main_image') is-invalid @enderror"
                            name="main_image" id="main_image">
                        @error('main_image')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        @if($blog->main_image)
                        <div class="mt-2">
                            <small>Current Image:</small>
                            <img src="{{ asset('upload/blogs/' . $blog->main_image) }}" alt="Current Image"
                                style="max-width: 100px; display: block;">
                        </div>
                        @endif
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="branches" class="form-label">Select Branches *</label>
                        <select class="form-control select2 @error('branches') is-invalid @enderror" multiple
                            name="branches[]" id="branches" data-placeholder="Select Branches">
                            @foreach($branches as $branch)
                            <option value="{{ $branch->id }}"
                                {{ in_array($branch->id, old('branches', $selectedBranches)) ? 'selected' : '' }}>
                                {{ $branch->name }}
                            </option>
                            @endforeach
                        </select>
                        @error('branches')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="summernote" class="form-label">Description *</label>
                        <textarea name="description" rows="3"
                            class="form-control editor4 @error('description') is-invalid @enderror">
                        {{ old('description', $blog->description) }}
                        </textarea>
                        @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-3 col-md-6">
                        <div class="form-check form-switch mt-4">
                            <input class="form-check-input" value="1" type="checkbox" id="status" name="status"
                                {{ old('status', $blog->status) ? 'checked' : '' }}>
                            <label class="form-check-label" for="status">Status</label>
                        </div>
                    </div>
                </div>

                <!-- Blog Paragraphs Section -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="bg-indigo pt-1 pb-1 rounded-2">
                            <h4 class="text-center text-light mb-0">Blog Paragraphs</h4>
                        </div>

                        <table class="mb-0 blog-paragraph-table">
                            <thead>
                                <tr>
                                    <th width="30%">Paragraph Title</th>
                                    <th width="30%">Paragraph Image</th>
                                    <th>
                                        <div class="d-flex justify-content-between">
                                            <span>Paragraph Description</span>
                                            <button type="button"
                                                class="btn btn-primary btn-sm add-more-blog-paragraphs">
                                                Add More
                                            </button>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(old('paragraphs_title', $blog->paragraphs) as $index => $paragraph)
                                <tr>
                                    <input type="hidden" name="paragraphs_id[]"
                                        value="{{ $paragraph instanceof App\Models\BlogParagraph ? $paragraph->id : '' }}">
                                    <td>
                                        <input type="text" name="paragraphs_title[]" class="form-control @error("
                                            paragraphs_title.$index") is-invalid @enderror"
                                            value="{{ old("paragraphs_title.$index", $paragraph->paragraph_title ?? $paragraph['title'] ?? '') }}">
                                        @error("paragraphs_title.$index")<div class="invalid-feedback">{{ $message }}
                                        </div>@enderror
                                    </td>
                                    <td>
                                        <input type="file" name="paragraphs_image_file[]" class="form-control @error("
                                            paragraphs_image_file.$index") is-invalid @enderror">
                                        @error("paragraphs_image_file.$index")<div class="invalid-feedback">
                                            {{ $message }}</div>@enderror

                                        @if(($paragraph instanceof App\Models\BlogParagraph &&
                                        $paragraph->paragraph_image) ||
                                        (is_array($paragraph) && isset($paragraph['image_preview'])))
                                        <div class="mt-2">
                                            <small>Current Image:</small>
                                            <img src="{{ asset('upload/blogs/paragraphs/' . $paragraph->paragraph_image ?? $paragraph['image_preview']) }}"
                                                style="max-width: 80px; display: block;">
                                        </div>
                                        @endif
                                    </td>
                                    <td>
                                        <textarea name="paragraphs_description[]" rows="3"
                                            class="form-control editor_class_multiple @error("
                                            paragraphs_description.$index") is-invalid @enderror">
                                        {{ old("paragraphs_description.$index", $paragraph->paragraph_description ?? $paragraph['description'] ?? '') }}
                                        </textarea>
                                        @if($index > 0)
                                        <button type="button" class="btn btn-danger btn-sm remove-paragraph">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                        @endif
                                        @error("paragraphs_description.$index")<div class="invalid-feedback">
                                            {{ $message }}</div>@enderror
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-end gap-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('manage-blog.index') }}" class="btn btn-secondary">Cancel</a>
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
    function initCKEditor4() {
        document.querySelectorAll('.editor4').forEach(function(el) {
            if (!el.id) {
                el.id = 'editor_' + Math.random().toString(36).substr(2, 9);
            }
            if (!CKEDITOR.instances[el.id]) {
                CKEDITOR.replace(el.id, {
                    removePlugins: 'exportpdf',
                    height: 150
                });
            }
        });
    }
    $(document).ready(function() {
        initCKEditor4();
        $('.add-more-blog-paragraphs').on('click', function() {
            let newRow = `
                <tr>
                    <td>
                        <input type="text" name="paragraphs_title[]" class="form-control" placeholder="Enter Paragraph Title">
                    </td>
                    <td>
                        <input type="file" name="paragraphs_image_file[]" class="form-control">
                    </td>
                    <td>
                        <div>
                            <textarea name="paragraphs_description[]" rows="3" class="form-control editor4"></textarea>
                            <button type="button" class="btn btn-danger btn-sm remove-paragraph mt-2">
                                <i class="ti ti-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            `;
            $('.blog-paragraph-table tbody').append(newRow);
            initCKEditor4();
        });
        $(document).on('click', '.remove-paragraph', function() {
            let textarea = $(this).closest('tr').find('.editor_class_multiple')[0];
            if (textarea && textarea.id && CKEDITOR.instances[textarea.id]) {
                CKEDITOR.instances[textarea.id].destroy(true);
            }
            $(this).closest('tr').remove();
        });
        $('.select2').select2({
            placeholder: "Select Notice Type",
            width: '100%'
        });
    });
</script>

@endpush