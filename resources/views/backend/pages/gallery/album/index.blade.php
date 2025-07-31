@extends('backend.layouts.master')
@section('title','Album List')
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
                <h4 class="fw-bold">Album List</h4>
            </div>
        </div>
        <div class="page-btn">
             <a  href="javascript:void(0)" 
                data-ajax-album-add-popup="true"
                data-size="lg" 
                data-title="Add new album" 
                data-url="{{ route('manage-album.create') }}" 
                data-bs-toggle="tooltip" 
                title="Add new album"  
                class="btn btn-primary">
                <i class="ti ti-circle-plus me-1"></i>
                Add New Album
            </a>
        </div>
    </div>

    <!-- /product list -->
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <div class="display-album-list-html">
                    @if(isset($albumList) && $albumList->count() > 0)
                        @include('backend.pages.gallery.album.partials.album-list', ['albumList' => $albumList])
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
<script src="{{asset('backend/assets/js/pages/album.js')}}" type="text/javascript"></script>

@endpush