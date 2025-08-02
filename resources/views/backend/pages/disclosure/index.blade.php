@extends('backend.layouts.master')
@section('title','Disclosure List')
@push('styles')

@endpush
@section('main-content')
<div class="content">
    <div class="page-header">
        <div class="add-item d-flex">
            <div class="page-title">
                <h4 class="fw-bold">Disclosure List</h4>
            </div>
        </div>
        <div class="page-btn">
             <a  href="javascript:void(0)" 
                data-ajax-disclosure-add-popup="true"
                data-size="lg" 
                data-title="Add new Disclosure" 
                data-url="{{ route('manage-disclosure.create') }}" 
                data-bs-toggle="tooltip" 
                title="Add new Disclosure"  
                class="btn btn-primary">
                <i class="ti ti-circle-plus me-1"></i>
                Add New Disclosure
            </a>
        </div>
    </div>

    <!-- /product list -->
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <div class="display-disclosure-list-html">
                    @if(isset($disclosureList) && $disclosureList->count() > 0)
                        @include('backend.pages.disclosure.partials.disclosure-list', ['disclosureList' => $disclosureList])
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
<script src="{{asset('backend/assets/js/pages/disclosure.js')}}" type="text/javascript"></script>

@endpush