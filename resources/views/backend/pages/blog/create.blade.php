@extends('backend.layouts.master')
@section('title','Add New Blog')
@push('styles')
<link rel="stylesheet" href="{{asset('backend/assets/plugins/summernote/summernote-bs4.min.css')}}">
<!-- <link rel="stylesheet" href="{{asset('backend/assets/plugins/select2/css/select2.min.css')}}"> -->
@endpush
@section('main-content')
<div class="content">
    <div class="page-header">
        <div class="add-item d-flex">
            <div class="page-title">
                <h4 class="fw-bold">Add Blog</h4>
            </div>
        </div>

        <div class="page-btn">
            <a href="{{ route('manage-blog.index') }}"
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
                Blog Form
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('manage-blog.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="title" class="form-label">Title *</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                            name="title" id="title" value="{{ old('title', '') }}">
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="main_image" class="form-label">Main Image *</label>
                        <input type="file" class="form-control @error('main_image') is-invalid @enderror"
                            name="main_image" id="main_image">
                        @error('main_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        @if(old('main_image_preview'))
                        <div class="mt-2">
                            <small>Previously selected: {{ old('main_image_preview') }}</small>
                        </div>
                        @endif
                    </div>

                    <div class="col-md- mb-3">
                        <label for="branches" class="form-label">Select Branches *</label>
                        <select class="form-control select2 @error('branches') is-invalid @enderror" multiple
                            name="branches[]" id="branches" data-placeholder="Select Branches">
                            @foreach($branches as $branch)
                            <option value="{{ $branch->id }}"
                                {{ in_array($branch->id, old('branches', [])) ? 'selected' : '' }}>
                                {{ $branch->name }}
                            </option>
                            @endforeach
                        </select>
                        @error('branches')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="summernote" class="form-label">Description *</label>
                        <textarea id="summernote" name="description" rows="3"
                            class="form-control @error('description') is-invalid @enderror">
                        {{ old('description', '') }}
                        </textarea>
                        @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-6">
                        <div class="form-check form-switch mt-4">
                            <input class="form-check-input" value="1" type="checkbox" id="status"
                                name="status" {{ old('status', true) ? 'checked' : '' }}>
                            <label class="form-check-label" for="status">Status</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="bg-indigo pt-1 pb-1 rounded-2">
                            <h4 class="text-center text-light" style="margin-bottom: 0px;">Blog Paragraphs</h4>
                        </div>
                        <table class="align-middle mb-0 blog-paragraph-table">
                            <thead>
                                <tr>
                                    <th style="width: 30%;">Paragraphs Title</th>
                                    <th style="width: 30%;">Paragraphs Image</th>
                                    <th class="d-flex justify-content-between">
                                        <span>Paragraphs Description</span>
                                        <button class="btn btn-primary btn-sm add-more-blog-paragraphs" type="button">
                                            Add More Blog Paragraphs
                                        </button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $paragraphCount = max(count(old('paragraphs_title', [])), 1);
                                @endphp

                                @for($i = 0; $i < $paragraphCount; $i++)
                                    <tr>
                                    <td>
                                        <input type="text" name="paragraphs_title[]" class="form-control @error('paragraphs_title.'.$i) is-invalid @enderror"
                                            placeholder="Enter Paragraphs Title" value="{{ old('paragraphs_title.'.$i, '') }}">
                                        @error('paragraphs_title.'.$i)
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="file" name="paragraphs_image_file[]"
                                            class="form-control @error('paragraphs_image_file.'.$i) is-invalid @enderror">
                                        @error('paragraphs_image_file.'.$i)
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        @if(old('paragraphs_image_preview.'.$i))
                                        <div class="mt-2">
                                            <small>Previously selected: {{ old('paragraphs_image_preview.'.$i) }}</small>
                                        </div>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <textarea name="paragraphs_description[]" rows="3"
                                                class="form-control editor_class_multiple @error('paragraphs_description.'.$i) is-invalid @enderror">
                                            {{ old('paragraphs_description.'.$i, '') }}
                                            </textarea>
                                            @if($i > 0)
                                            <button type="button" class="btn btn-danger btn-sm remove-paragraph">
                                                <i class="ti ti-trash"></i>
                                            </button>
                                            @endif
                                        </div>
                                        @error('paragraphs_description.'.$i)
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </td>
                                    </tr>
                                    @endfor
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 mt-3">
                        <div class="d-flex align-items-center justify-content-end mb-4 gap-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
<script>
    $(document).ready(function() {
        initSummernote();
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
                        <textarea name="paragraphs_description[]" rows="3" class="form-control editor_class_multiple"></textarea>
                        <button type="button" class="btn btn-danger btn-sm remove-paragraph mt-2">
                            <i class="ti ti-trash"></i>
                        </button>
                    </div>
                </td>
            </tr>
        `;
            $('.blog-paragraph-table tbody').append(newRow);
            initSummernote();
        });
        $(document).on('click', '.remove-paragraph', function() {
            $(this).closest('tr').find('.editor_class_multiple').summernote('destroy');
            $(this).closest('tr').remove();
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

    function initSummernote() {
        $('.editor_class_multiple').not('.note-editor').summernote({
            height: 150,
            minHeight: null,
            maxHeight: null,
            focus: false,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video', 'hr']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            prettifyHtml: false,
            codeviewFilter: true,
            codeviewIframeFilter: true,
            styleTags: ['p', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
            callbacks: {
                onPaste: function(e) {
                    var clipboardData = e.originalEvent.clipboardData || window.clipboardData;
                    var pastedData = clipboardData.getData('Text/html');
                    if (pastedData) {
                        e.preventDefault();
                        var tempDiv = document.createElement('div');
                        tempDiv.innerHTML = pastedData;
                        var elementsWithStyle = tempDiv.querySelectorAll('[style]');
                        elementsWithStyle.forEach(function(el) {
                            el.removeAttribute('style');
                        });
                        var elementsWithClass = tempDiv.querySelectorAll('[class]');
                        elementsWithClass.forEach(function(el) {
                            el.removeAttribute('class');
                        });
                        document.execCommand('insertHTML', false, tempDiv.innerHTML);
                    }
                }
            }
        });
    }
</script>
@endpush