@extends('backend.layouts.master')
@section('title','Class List')
@push('styles')
<link rel="stylesheet" href="{{asset('backend/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/plugins/tabler-icons/tabler-icons.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/dataTables.bootstrap5.min.css')}}">

@endpush
@section('main-content')
<div class="content">
    <div class="page-header">
        <div class="add-item d-flex">
            <div class="page-title">
                <h4 class="fw-bold">Class List</h4>
            </div>
        </div>

        <div class="page-btn">
            <a href="{{ route('manage-classes.create') }}"
                data-bs-toggle="tooltip"
                title="Add New Class"
                class="btn btn-primary">
                <i class="ti ti-circle-plus me-1"></i>
                Add New Class
            </a>
        </div>

    </div>

    <!-- /product list -->
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
            <div class="search-set">
                <div class="search-input">
                    <span class="btn-searchset"><i class="ti ti-search fs-14 feather-search"></i></span>
                </div>
            </div>

        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                @if (!empty($classes) && $classes->count())
                <table class="table datatable">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Heading</th>
                            <th>Main Image</th>
                            <th>Branches</th>
                            <th>User</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($classes as $index => $class)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $class->title }}</td>
                        <td>{{ $class->heading_name }}</td>
                        <td>
                            @if($class->main_image)
                                <img src="{{ asset('upload/classes/' . $class->main_image) }}" alt="{{ $class->title }}" width="60">
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            @foreach ($class->branches as $branch)
                                <span class="badge bg-primary">{{ $branch->name }}</span>
                            @endforeach
                        </td>
                        <td>{{ $class->user?->name ?? 'N/A' }}</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input toggle-status-classes" type="checkbox" 
                                    {{ $class->status ? 'checked' : '' }}
                                    data-url="{{ route('manage-classes.toggle-status', $class->id) }}">
                            </div>
                        </td>
                        <td>
                            <div class="edit-delete-action d-flex gap-2">
                                <a
                                    href="{{ route('manage-classes.edit', ['id' => $class->id]) }}"
                                    data-bs-toggle="tooltip"
                                    title="Edit Notice"
                                    class="btn btn-sm btn-info">
                                    <i class="ti ti-edit"></i>
                                </a>

                                <form action="{{ route('manage-classes.destroy', ['id' => $class->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger show_confirm" data-name="{{ $class->title }}">
                                        <i class="ti ti-trash"></i>
                                    </button>
                                </form>
                            </div>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
    <!-- /product list -->
</div>
<!-- Modal -->
@include('backend.layouts.common-modal-form')
<!-- modal--->
@endsection
@push('scripts')
<script src="{{asset('backend/assets/js/pages/common.js')}}" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();

            Swal.fire({
                title: `Are you sure you want to delete this ${name}?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "Cancel",
                dangerMode: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
        /**Update status code */
        $(document).off('change', '.toggle-status-classes').on('change', '.toggle-status-classes', function() {
            $('#loader').show();
            var checkbox = $(this);
            var isChecked = checkbox.is(':checked');
            var url = checkbox.data('url');
            checkbox.prop('disabled', true);
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    checkbox.prop('disabled', false);
                    if (response.status) {
                        $('#loader').hide();
                        Toastify({
                            text: response.message,
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            className: "bg-success",
                            close: true
                        }).showToast();
                    } else {
                        $('#loader').hide();
                        checkbox.prop('checked', !isChecked);
                        Toastify({
                            text: "Failed to update status.",
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            className: "bg-danger",
                            close: true
                        }).showToast();
                    }
                },
                error: function() {
                    checkbox.prop('disabled', false);
                    checkbox.prop('checked', !isChecked);
                    $('#loader').hide();
                    Toastify({
                        text: "Something went wrong.",
                        duration: 3000,
                        gravity: "top",
                        position: "right",
                        className: "bg-danger",
                        close: true
                    }).showToast();
                }
            });
        });

        /**Update status code */
    });
</script>
@endpush