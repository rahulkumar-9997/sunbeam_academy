@extends('backend.layouts.master')
@section('title','Banner List')
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
                <h4 class="fw-bold">Banner List</h4>
            </div>
        </div>

        <div class="page-btn">
            <a href="javascript:void(0)"
                data-ajax-popup-banner="true"
                data-size="lg"
                data-title="Add new banner"
                data-url="{{ route('manage-banner.create') }}"
                data-bs-toggle="tooltip"
                title="Add new banner"
                class="btn btn-primary">
                <i class="ti ti-circle-plus me-1"></i>
                Add New Banner
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
                @if (!empty($banners) && $banners->count())
                <table class="table datatable">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Sub-title</th>
                            <th>Desktop Image</th>
                            <th>Mobile Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banners as $index => $banner)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $banner->title }}</td>
                            <td>{{ $banner->sub_title ?? 'N/A' }}</td>
                            <td>
                                @if($banner->desktop_img)
                                <img src="{{ asset('upload/banner/'.$banner->desktop_img) }}" width="80" alt="Desktop Banner">
                                @else
                                N/A
                                @endif
                            </td>
                            <td>
                                @if($banner->mobile_img)
                                <img src="{{ asset('upload/banner/'.$banner->mobile_img) }}" width="50" alt="Mobile Banner">
                                @else
                                N/A
                                @endif
                            </td>
                           
                            <td>
                                <div class="edit-delete-action d-flex gap-2">
                                    <a href="javascript:void(0)"
                                        data-ajax-popup-edit-banner="true"
                                        data-size="lg"
                                        data-title="Edit Banner"
                                        data-url="{{ route('manage-banner.edit', ['manage_banner' => $banner->id]) }}"
                                        data-bs-toggle="tooltip"
                                        title="Edit Banner"
                                        class="btn btn-sm btn-info">
                                        <i class="ti ti-edit"></i>
                                    </a>
                                    <form action="{{ route('manage-banner.destroy', ['manage_banner' => $banner->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger show_confirm" data-name="{{ $banner->title }}">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <div class="alert alert-info">No banners found</div>
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
<script src="{{asset('backend/assets/js/pages/banner.js')}}" type="text/javascript"></script>
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

    });
</script>
@endpush