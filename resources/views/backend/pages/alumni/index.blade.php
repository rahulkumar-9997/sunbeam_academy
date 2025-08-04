@extends('backend.layouts.master')
@section('title','Alumni List')
@push('styles')

@endpush
@section('main-content')
<div class="content">
    <div class="page-header">
        <div class="add-item d-flex">
            <div class="page-title">
                <h4 class="fw-bold">Alumni List</h4>
            </div>
        </div>
        <div class="page-btn">
             <a  href="javascript:void(0)" 
                data-ajax-alumni-add-popup="true"
                data-size="lg" 
                data-title="Add new Alumni" 
                data-url="{{ route('manage-our-alumni.create') }}" 
                data-bs-toggle="tooltip" 
                title="Add new Alumni"  
                class="btn btn-primary">
                <i class="ti ti-circle-plus me-1"></i>
                Add New Alumni
            </a>
        </div>
    </div>

    <!-- /product list -->
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <div class="display-testimonials-list-html">
                    @if(isset($testimonialsList) && $testimonialsList->count() > 0)
                        @include('backend.pages.testimonials.partials.testimonials-list', ['testimonialsList' => $testimonialsList])
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
<script src="{{asset('backend/assets/js/pages/testimonials.js')}}" type="text/javascript"></script>
@endpush