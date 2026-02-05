@extends('backend.layouts.master')
@section('title','Edit Notice')
@push('styles')
<link rel="stylesheet" href="{{asset('backend/assets/plugins/summernote/summernote-bs4.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/plugins/daterangepicker/daterangepicker.css')}}">

@endpush
@section('main-content')
<div class="content">
    <div class="page-header">
        <div class="add-item d-flex">
            <div class="page-title">
                <h4 class="fw-bold">Edit Notice Board</h4>
            </div>
        </div>

        <div class="page-btn">
            <a href="{{ route('manage-notice-board') }}"
                data-bs-toggle="tooltip"
                title="Go Previous Page"
                class="btn btn-primary">
                <i class="ti ti-arrow-left me-1"></i>
                Go Previous Page
            </a>
        </div>

    </div>
    <div class="card">
        <div class="card-header justify-content-between">
            <div class="card-title">
                Notice Form
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('notice-board.update', $notice_board_row->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="title" class="form-label">Title *</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                            name="title" id="title" value="{{ old('title', $notice_board_row->title) }}">
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="page_heading" class="form-label">Page Heading</label>
                        <input type="text" class="form-control @error('page_heading') is-invalid @enderror"
                            name="page_heading" id="page_heading" value="{{ old('page_heading', $notice_board_row->page_heading) }}">
                        @error('page_heading')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-3">
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
                        @error('branches')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="notice_type" class="form-label">Notice Type *</label>
                        <select class="form-select @error('notice_type') is-invalid @enderror" name="notice_type" id="notice_type">
                            <option value="">Select</option>
                            <option value="holiday" {{ old('notice_type', $notice_board_row->notice_type) == 'holiday' ? 'selected' : '' }}>Holiday</option>
                            <option value="exam" {{ old('notice_type', $notice_board_row->notice_type) == 'exam' ? 'selected' : '' }}>Exam</option>
                            <option value="parent_meeting" {{ old('notice_type', $notice_board_row->notice_type) == 'parent_meeting' ? 'selected' : '' }}>Parent Meeting</option>
                            <option value="event" {{ old('notice_type', $notice_board_row->notice_type) == 'event' ? 'selected' : '' }}>Event</option>
                            <option value="other" {{ old('notice_type', $notice_board_row->notice_type) == 'other' ? 'selected' : '' }}>Other</option>
                        </select>
                        @error('notice_type')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="notice_date_range" class="form-label">Notice Date Range *</label>
                        <input type="text" class="form-control @error('start_date') is-invalid @enderror" name="notice_date_range" id="notice_date_range"
                            value="{{ old('notice_date_range', $notice_board_row->start_date . ' - ' . $notice_board_row->end_date) }}">
                        <input type="hidden" id="start_date" name="start_date" value="{{ old('start_date', $notice_board_row->start_date) }}">
                        <input type="hidden" id="end_date" name="end_date" value="{{ old('end_date', $notice_board_row->end_date) }}">
                        @error('start_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="page_link" class="form-label">Page Link (optional)</label>
                        <input type="url" class="form-control @error('page_link') is-invalid @enderror"
                            name="page_link" placeholder="https://example.com/page" id="page_link"
                            value="{{ old('page_link', $notice_board_row->page_link) }}">
                        @error('page_link')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="pdf_file" class="form-label">Upload PDF File</label>
                        <input type="file" name="pdf_file" class="form-control @error('pdf_file') is-invalid @enderror"
                            accept=".pdf" id="pdf_file">
                        @error('pdf_file')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        @if($notice_board_row->file)
                        <div class="mt-2">
                            <a href="{{ asset('upload/notice/' . $notice_board_row->file) }}" target="_blank" class="btn btn-sm btn-info">
                                View Current PDF
                            </a>
                            <button type="button" class="btn btn-sm btn-danger" onclick="confirmDeleteFile()">
                                Remove PDF
                            </button>
                            <input type="hidden" name="remove_pdf_file" id="remove_pdf_file" value="0">
                        </div>
                        @endif
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="image_file" class="form-label">Upload Additional Images (Multiple Select Limit 20 Files)</label>
                        <input type="file" name="image_file[]" class="form-control @error('image_file') is-invalid @enderror"
                            accept="image/*" id="image_file" multiple>
                        @error('image_file')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3 col-md-4">
                        <div class="form-check form-switch mt-4">
                            <input class="form-check-input" value="1" type="checkbox" id="status" name="status"
                                {{ old('status', $notice_board_row->status) ? 'checked' : '' }}>
                            <label class="form-check-label" for="status">Status</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="meta_title" class="form-label">Meta Title</label>
                        <input
                            type="text"
                            class="form-control @error('meta_title') is-invalid @enderror"
                            name="meta_title"
                            id="meta_title"
                            value="{{ old('meta_title', $notice_board_row->meta_title ?? '') }}">

                        @error('meta_title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="meta_description" class="form-label">Meta Description</label>

                        <textarea
                            class="form-control  @error('meta_description') is-invalid @enderror"
                            name="meta_description"
                            id="meta_description"
                            rows="3">{{ old('meta_description', $notice_board_row->meta_description ?? '') }}</textarea>

                        @error('meta_description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    @if($notice_board_row->noticeImages->count() > 0)
                    <div class="col-lg-12">
                        <div class="mt-3">
                            <h6>Current Images:</h6>
                            <div class="row">
                                @foreach($notice_board_row->noticeImages as $image)
                                <div class="col-md-2 mb-2 position-relative">
                                    <img src="{{ asset('upload/notice/' . $image->file) }}" class="img-thumbnail" style="height: 100%; width: 100%; object-fit: contain;">
                                    <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0" 
                                        onclick="deleteImage(event, {{ $image->id }})">
                                        <i class="fas fa-times"></i>
                                    </button>
                                    <input type="hidden" name="existing_images[]" value="{{ $image->id }}">
                                </div>
                                @endforeach
                                <div id="deleted-images-container"></div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="col-md-12 mb-3">
                        <label for="summernote" class="form-label">Description *</label>
                        <textarea name="description" rows="3"
                            class="form-control ckeditor4 @error('description') is-invalid @enderror">{{ old('description', $notice_board_row->description) }}</textarea>
                        @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
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
<script src="{{asset('backend/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script>
    $(function() {
        let startDate = moment();
        let endDate = moment().add(6, 'months');
        $('#notice_date_range').daterangepicker({
            opens: 'left',
            startDate: startDate,
            endDate: endDate,
            minDate: moment(),
            locale: {
                format: 'YYYY-MM-DD',
                cancelLabel: 'Clear'
            }
        });
        $('#notice_date_range').val(startDate.format('YYYY-MM-DD') + ' to ' + endDate.format('YYYY-MM-DD'));
        $('#start_date').val(startDate.format('YYYY-MM-DD'));
        $('#end_date').val(endDate.format('YYYY-MM-DD'));

        $('#notice_date_range').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('YYYY-MM-DD') + ' to ' + picker.endDate.format('YYYY-MM-DD'));
            $('#start_date').val(picker.startDate.format('YYYY-MM-DD'));
            $('#end_date').val(picker.endDate.format('YYYY-MM-DD'));
        });

        $('#notice_date_range').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
            $('#start_date').val('');
            $('#end_date').val('');
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: "Select Branches",
            width: '100%'
        });
    });
    function confirmDeleteFile() {
        if (confirm('Are you sure you want to remove the PDF file?')) {
            document.getElementById('remove_pdf_file').value = '1';
            document.querySelector('a.btn-info').style.display = 'none';
            document.querySelector('button.btn-danger').style.display = 'none';
        }
    }

    function deleteImage(event, imageId) {
        if (confirm('Are you sure you want to delete this image?')) {
            event.target.closest('.col-md-2').style.display = 'none';
            const deleteInput = document.createElement('input');
            deleteInput.type = 'hidden';
            deleteInput.name = 'deleted_images[]';
            deleteInput.value = imageId;
            document.getElementById('deleted-images-container').appendChild(deleteInput);
        }
    }
</script>

@endpush