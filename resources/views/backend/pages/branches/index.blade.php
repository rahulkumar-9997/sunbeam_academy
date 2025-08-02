@extends('backend.layouts.master')
@section('title','Branch List')
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
                <h4 class="fw-bold">Branch List</h4>
            </div>
        </div>

        <div class="page-btn">
            <a  href="javascript:void(0)" 
                data-ajax-popup="true"
                data-size="lg" 
                data-title="Add new branches" 
                data-url="{{ route('branches.create') }}" 
                data-bs-toggle="tooltip" 
                title="Add new branches"  
                class="btn btn-primary">
                <i class="ti ti-circle-plus me-1"></i>
                Add New Branche
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
                @if (!empty($branches) && $branches->count())
                    <table class="table datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Branch Name</th>
                                <th>User Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                            @foreach ($branches as $index => $branch)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $branch->name }}</td>
                                <td>{{ $branch->user->name ?? 'N/A' }}</td>
                                <td>{{ $branch->phone_1 }}</td>
                                <td>{{ $branch->email_1 }}</td>
                                <td>
                                    @if ($branch->status)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="edit-delete-action d-flex gap-2">
                                        <a
                                            href="{{ route('manage-disclosure.index', ['branch_id' => $branch->id]) }}"
                                            class="btn btn-sm btn-pink">
                                            <i class="ti ti-file"></i> Manage Disclosure
                                        </a>
                                        <a
                                            href="{{ route('manage-gallery.index', ['branch_id' => $branch->id]) }}"
                                            class="btn btn-sm btn-purple">
                                            <i class="ti ti-file"></i> Manage Gallery
                                        </a>
                                        <a
                                            href="javascript:void(0)" 
                                            data-ajax-popup-edit-branch="true"
                                            data-size="lg" 
                                            data-title="Edit Branch" 
                                            data-url="{{ route('branches.edit', ['id' => $branch->id]) }}" 
                                            data-bs-toggle="tooltip" 
                                            title="Edit Branch" 
                                            class="btn btn-sm btn-info">
                                            <i class="ti ti-edit"></i>
                                        </a>
                                        <!--<form action="{{ route('branches.destroy', ['id' => $branch->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger show_confirm" data-name="{{ $branch->name }}">
                                                <i class="ti ti-trash"></i>
                                            </button>
                                        </form>-->
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
           
   });
</script>
@endpush