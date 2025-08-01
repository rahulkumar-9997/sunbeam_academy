<table class="table datatable1">
    <thead class="thead-light">
        <tr>
            <th>Title</th>
            <th>Cover Image</th>
            <th style="width: 45%;">Branches</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @if(isset($announcementList) && $announcementList->count() > 0)
            @foreach($announcementList as $announcementRow)
                <tr>
                    <td>{{ $announcementRow->title }}</td>
                    <td>
                        @if($announcementRow->image)
                            <img src="{{ asset('upload/announcement/' . $announcementRow->image) }}" width="100">
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        @if($announcementRow->branches->count())
                            <div class="d-flex flex-wrap gap-1">
                                @foreach($announcementRow->branches as $branch)
                                    <span class="mb-1 mt-1 badge bg-light-subtle text-primary border border-primary py-1 px-1">{{ $branch->name }}</span>
                                @endforeach
                            </div>
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        @if($announcementRow->status == 1)
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-info">Inactive</span>
                        @endif
                    </td>
                    <td class="action-table-data">
                        <div class="edit-delete-action">
                            <a class="btn btn-sm btn-primary me-2 p-2"
                                href="javascript:;" 
                                data-title="Edit Announcement"
                                data-size="lg"
                                data-announcementid="{{ $announcementRow->id }}"
                                data-ajax-edit-announcement="true"
                                data-url="{{ route('manage-announcement.edit', $announcementRow->id) }}"
                                title="Edit">
                                <i data-feather="edit" class="feather-edit"></i>
                            </a>
                            <form action="{{ route('manage-announcement.destroy', $announcementRow->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger show_confirm" data-name="{{ $announcementRow->title }}" title="Delete">
                                    <i data-feather="trash-2" class="feather-trash-2"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="5" class="text-center">No announcements found.</td>
            </tr>
        @endif
    </tbody>
</table>
