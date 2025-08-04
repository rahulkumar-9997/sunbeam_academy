<table class="table datatable1">
    <thead class="thead-light">
        <tr>
            <th>Name</th>
            <th>Branch</th>
            <th>Image</th>
            <th>Content</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @if(isset($alumniList) && $alumniList->count() > 0)
            @foreach($alumniList as $alumni)
                <tr>
                    <td>{{ $alumni->title }}</td>
                    <td>
                        @if($alumni->branch)
                            <span class="badge bg-light-subtle text-primary border border-primary py-1 px-1">
                                {{ $alumni->branch->name }}
                            </span>
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        @if($alumni->profile_pic)
                            <img src="{{ asset('upload/alumni/' . $alumni->profile_pic) }}" width="100">
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        {!! Str::limit(strip_tags($alumni->content), 30) !!}
                    </td>
                    <td>
                        @if($alumni->status == 1)
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-info">Inactive</span>
                        @endif
                    </td>
                    <td class="action-table-data">
                        <div class="edit-delete-action">
                            <a class="btn btn-sm btn-primary me-2 p-2"
                                href="javascript:;" 
                                data-title="Edit Alumni"
                                data-size="lg"
                                data-alumniid="{{ $alumni->id }}"
                                data-ajax-edit-alumni="true"
                                data-url="{{ route('manage-our-alumni.edit', $alumni->id) }}"
                                title="Edit">
                                <i data-feather="edit" class="feather-edit"></i>
                            </a>
                            <form action="{{ route('manage-our-alumni.destroy', $alumni->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger show_confirm" data-name="{{ $alumni->title }}" title="Delete">
                                    <i data-feather="trash-2" class="feather-trash-2"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="6" class="text-center">No alumni records found.</td>
            </tr>
        @endif
    </tbody>
</table>