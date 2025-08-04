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
            <form method="POST" action="{{ route('notice-board.update', ['id' => $notice_board_row->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="title" class="form-label">Title *</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title', $notice_board_row->title) }}">
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="notice_type" class="form-label">Select Branch *</label>
                        <select class="form-select @error('branch') is-invalid @enderror" name="branch" id="branch">
                            <option value="">Select a Branch</option>
                            @foreach ($branches as $branch)
                                <option value="{{ $branch->id }}" {{ $branch->id == $notice_board_row->branch_id ? 'selected' : '' }}>{{ $branch->name }}</option>
                            @endforeach
                        </select>
                        @error('branch')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="notice_type" class="form-label">Notice Type *</label>
                        <select class="form-select @error('notice_type') is-invalid @enderror" name="notice_type" id="notice_type">
                            <option value="">Select</option>
                            @php
                            $types = ['holiday' => 'Holiday', 'exam' => 'Exam', 'parent_meeting' => 'Parent Meeting', 'event' => 'Event', 'other' => 'Other'];
                            @endphp
                            @foreach ($types as $key => $label)
                            <option value="{{ $key }}" {{ old('notice_type', $notice_board_row->notice_type) == $key ? 'selected' : '' }}>
                                {{ $label }}
                            </option>
                            @endforeach
                        </select>
                        @error('notice_type')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="notice_date_range" class="form-label">Notice Date Range *</label>
                        <input type="text" class="form-control @error('start_date') is-invalid @enderror" name="notice_date_range" id="notice_date_range"
                            value="{{ old('notice_date_range', $notice_board_row->start_date . ' - ' . $notice_board_row->end_date) }}">
                        <input type="hidden" id="start_date" name="start_date" value="{{ old('start_date', $notice_board_row->start_date) }}">
                        <input type="hidden" id="end_date" name="end_date" value="{{ old('end_date', $notice_board_row->end_date) }}">
                        @error('start_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="page_link" class="form-label">Page Link (optional)</label>
                        <input type="url" class="form-control @error('page_link') is-invalid @enderror"
                            name="page_link" id="page_link" placeholder="https://example.com/page"
                            value="{{ old('page_link', $notice_board_row->page_link) }}">
                        @error('page_link')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="summernote" class="form-label">Description *</label>
                        <textarea id="summernote" name="description" rows="3"
                            class="form-control @error('description') is-invalid @enderror">{{ old('description', $notice_board_row->description) }}</textarea>
                        @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="fileInput" class="form-label">Upload File (Image or PDF)</label>
                        <input type="file" name="file" class="form-control @error('file') is-invalid @enderror"
                            accept="image/*,.pdf" id="fileInput">
                        @error('file')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        @if ($notice_board_row->file && in_array(strtolower(pathinfo($notice_board_row->file, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png', 'webp']))
                        <div class="mt-2">
                            <img src="{{ asset('storage/notice/' . $notice_board_row->file) }}" alt="Notice Image" class="img-fluid" style="max-height: 200px;">
                        </div>
                        @else
                        <div class="mt-2">
                            <strong>Current File:</strong>
                            <a href="{{ asset('upload/notice/' . $notice_board_row->file) }}" target="_blank">View File</a>
                        </div>
                        @endif

                    </div>

                    <div class="mb-3 col-md-6">
                        <div class="form-check form-switch mt-4">
                            <input class="form-check-input" value="1" type="checkbox" id="status" name="status"
                                {{ old('status', $notice_board_row->status) ? 'checked' : '' }}>
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
<script src="{{asset('backend/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script>
    $(function() {
        $('#notice_date_range').daterangepicker({
            opens: 'left',
            autoUpdateInput: false,
            minDate: moment(),
            /* Disable past dates*/
            locale: {
                format: 'YYYY-MM-DD',
                cancelLabel: 'Clear'
            }
        });

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
    document.getElementById('fileInput').addEventListener('change', function() {
        const file = this.files[0];
        const preview = document.getElementById('filePreview');
        preview.innerHTML = '';

        if (!file) return;

        if (file.type.startsWith('image/')) {
            const img = document.createElement('img');
            img.src = URL.createObjectURL(file);
            img.className = 'img-thumbnail';
            img.style.maxWidth = '200px';
            preview.appendChild(img);
        } else if (file.type === 'application/pdf') {
            preview.innerHTML = `<p>📄 PDF File Selected: <strong>${file.name}</strong></p>`;
        } else {
            preview.innerHTML = `<p class="text-danger">Unsupported file type.</p>`;
        }
    });
</script>

@endpush