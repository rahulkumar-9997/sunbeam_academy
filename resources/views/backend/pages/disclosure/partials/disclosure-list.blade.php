<table class="table datatable1">
    <thead class="thead-light">
        <tr>
            <th>Title</th>
            <th>File</th>
            <th style="width: 45%;">Branches</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @if(isset($disclosureList) && $disclosureList->count() > 0)
            @foreach($disclosureList as $disclosureRow)
                <tr>
                    <td>{{ $disclosureRow->title }}</td>
                    <td>
                        @if($disclosureRow->file_type=='pdf')                       
                            <a href="{{ asset('upload/disclosure/' . $disclosureRow->file) }}" target="_blank">View File</a>
                        @else
                            <img src="{{ asset('upload/disclosure/' . $disclosureRow->file) }}" width="100">
                        @endif                        
                    </td>
                    <td>
                        @if($disclosureRow->branches->count())
                            <div class="d-flex flex-wrap gap-1">
                                @foreach($disclosureRow->branches as $branch)
                                    <span class="mb-1 mt-1 badge bg-light-subtle text-primary border border-primary py-1 px-1">
                                        {{ $branch->name }}
                                    </span>
                                @endforeach
                            </div>
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        @if($disclosureRow->status == 1)
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-info">Inactive</span>
                        @endif
                    </td>

                    {{-- Actions --}}
                    <td class="action-table-data">
                        <div class="edit-delete-action">
                            <a class="btn btn-sm btn-primary me-2 p-2"
                                href="javascript:;" 
                                data-title="Edit Disclosure"
                                data-size="lg"
                                data-disclosureid="{{ $disclosureRow->id }}"
                                data-ajax-edit-disclosure="true"
                                data-url="{{ route('manage-disclosure.edit', $disclosureRow->id) }}"
                                title="Edit">
                                <i data-feather="edit" class="feather-edit"></i>
                            </a>
                            <form action="{{ route('manage-disclosure.destroy', $disclosureRow->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger show_confirm" data-name="{{ $disclosureRow->title }}" title="Delete">
                                    <i data-feather="trash-2" class="feather-trash-2"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="5" class="text-center">No disclosures found.</td>
            </tr>
        @endif
    </tbody>
</table>
