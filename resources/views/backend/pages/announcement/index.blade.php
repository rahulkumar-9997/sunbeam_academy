@extends('backend.layouts.master')
@section('title','Announcement List')
@push('styles')
<!-- <link rel="stylesheet" href="{{asset('backend/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/plugins/tabler-icons/tabler-icons.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/dataTables.bootstrap5.min.css')}}"> -->
<link rel="stylesheet" href="{{asset('backend/assets/plugins/daterangepicker/daterangepicker.css')}}">

@endpush
@section('main-content')
<div class="content">
    <div class="page-header">
        <div class="add-item d-flex">
            <div class="page-title">
                <h4 class="fw-bold">Announcement List</h4>
            </div>
        </div>
        <div class="page-btn">
             <a  href="javascript:void(0)" 
                data-ajax-announcement-add-popup="true"
                data-size="lg" 
                data-title="Add new Announcement" 
                data-url="{{ route('manage-announcement.create') }}" 
                data-bs-toggle="tooltip" 
                title="Add new Announcement"  
                class="btn btn-primary">
                <i class="ti ti-circle-plus me-1"></i>
                Add New Announcement
            </a>
        </div>
    </div>

    <!-- /product list -->
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <div class="display-announcement-list-html">
                    @if(isset($announcementList) && $announcementList->count() > 0)
                        @include('backend.pages.announcement.partials.announcement-list', ['announcementList' => $announcementList])
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
<script src="{{asset('backend/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('backend/assets/js/pages/announcement.js')}}" type="text/javascript"></script>

@endpush