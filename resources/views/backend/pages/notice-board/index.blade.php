@extends('backend.layouts.master')
@section('title','Notice Board List')
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
                <h4 class="fw-bold">Notice Board List</h4>
            </div>
        </div>

        <div class="page-btn">
            <a href="{{ route('notice-board.create') }}"
                data-bs-toggle="tooltip"
                title="Add New Notice"
                class="btn btn-primary">
                <i class="ti ti-circle-plus me-1"></i>
                Add New Notice
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
                @if (!empty($notice_board) && $notice_board->count())
                <table class="table datatable">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Branch Name</th>
                            <th>Notice Type</th>
                            <th>Notice Date Range</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($notice_board as $index => $notice_board_row)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $notice_board_row->title }}</td>
                        <td>{{ $notice_board_row->branch->name ?? 'No Branch Assigned' }}</td>
                        <td>{{ ucfirst(str_replace('_', ' ', $notice_board_row->notice_type)) }}</td>
                        <td>
                            {{ \Carbon\Carbon::parse($notice_board_row->start_date)->format('d M Y') }} -
                            {{ \Carbon\Carbon::parse($notice_board_row->end_date)->format('d M Y') }}

                            @if (\Carbon\Carbon::parse($notice_board_row->end_date)->lt(now()))
                            <span class="badge bg-warning text-dark ms-2">Expired</span>
                            @endif
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input toggle-status" type="checkbox" id="status" name="status"
                                    {{ old('status', isset($notice_board_row) ? $notice_board_row->status : true) ? 'checked' : '' }}
                                    data-id="{{ $notice_board_row->id }}"
                                    data-url="{{ route('notice-board.toggle-status', $notice_board_row->id) }}">
                            </div>
                            <!-- @if ($notice_board_row->status)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif -->
                        </td>
                        <td>
                            <div class="edit-delete-action d-flex gap-2">
                                <a
                                    href="{{ route('notice-board.edit', ['id' => $notice_board_row->id]) }}"

                                    data-bs-toggle="tooltip"
                                    title="Edit Notice"
                                    class="btn btn-sm btn-info">
                                    <i class="ti ti-edit"></i>
                                </a>

                                <form action="{{ route('notice-board.destroy', ['id' => $notice_board_row->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger show_confirm" data-name="{{ $notice_board_row->title }}">
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
        $(document).off('change', '.toggle-status').on('change', '.toggle-status', function() {
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