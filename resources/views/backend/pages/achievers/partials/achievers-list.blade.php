<table class="table datatable1">
    <thead class="thead-light">
        <tr>
            <th>Name</th>
            <th>Branch</th>
            <th>Image</th>
            <th>Short Content</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @if($achieversList->count() > 0)
            @foreach($achieversList as $achiever)
                <tr>
                    <td>{{ htmlspecialchars($achiever->title) }}</td>
                    <td>
                        @if($achiever->branch)
                            <span class="badge bg-light-subtle text-primary border border-primary py-1 px-1">
                                {{ htmlspecialchars($achiever->branch->name) }}
                            </span>
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        @if($achiever->profile_pic)
                            <img src="{{ asset('upload/achievers/' . $achiever->profile_pic) }}" 
                                 width="100" 
                                 alt="{{ htmlspecialchars($achiever->title) }} image">
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        {{ Str::limit(strip_tags($achiever->short_content), 30) }}
                    </td>
                    <td>
                        @if($achiever->status == 1)
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-info">Inactive</span>
                        @endif
                    </td>
                    <td class="action-table-data">
                        <div class="edit-delete-action">
                            <a class="btn btn-sm btn-primary me-2 p-2"
                                href="javascript:;" 
                                data-title="Edit Achiever"
                                data-size="xl"
                                data-achieverid="{{ $achiever->id }}"
                                data-ajax-edit-achiever="true"
                                data-url="{{ route('manage-achievers.edit', $achiever->id) }}"
                                title="Edit">
                                <i data-feather="edit" class="feather-edit"></i>
                            </a>
                            <form action="{{ route('manage-achievers.destroy', $achiever->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger show_confirm" 
                                        data-name="{{ htmlspecialchars($achiever->title) }}" 
                                        title="Delete">
                                    <i data-feather="trash-2" class="feather-trash-2"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="6" class="text-center">No achievers records found.</td>
            </tr>
        @endif
    </tbody>
</table>