@extends('backend.layouts.master')
@section('title','Gallery List')
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
                <h4 class="fw-bold">Gallery List</h4>
            </div>
        </div>
        <div class="page-btn">
            <a href="{{ route('manage-gallery.create')}}"
                title="Add new banner"
                class="btn btn-primary">
                <i class="ti ti-circle-plus me-1"></i>
                Add New Gallery
            </a>
        </div>
    </div>

    <!-- /product list -->
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <div class="display-gallery-list-html">
                    @if(isset($galleries) && $galleries->count() > 0)
                        @include('backend.pages.gallery.partials.gallery-list', ['galleries' => $galleries])
                    @endif
                </div>
                
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
<script>
    $(document).ready(function() {
        $(document).on('click', '.show_confirm', function (event) {
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