<table class="table datatable1">
    <thead class="thead-light">
        <tr>
            <th>Title</th>
            <th>Cover Images</th>
            <th style="width: 45%;">Branches</th>
            <th>Gallery</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @if((isset($albumList)) && $albumList->count() > 0)
        @foreach($albumList as $albumRow)
        <tr>
            <td>{{ $albumRow->title }}</td>
            <td>
                @if($albumRow->image)
                <img src="{{ asset('upload/album/' . $albumRow->image) }}" width="100">
                @else
                -
                @endif
            </td>
            <td>
                @if($albumRow->branches->count())
                    <div class="d-flex flex-wrap gap-1">
                        @foreach($albumRow->branches as $branch)
                            <span class="mb-1 mt-1 badge bg-light-subtle text-primary border border-primary py-1 px-1">{{ $branch->name }}</span>
                        @endforeach
                    </div>
                @else
                    -
                @endif
            </td>
            <td>
                @php $galleryCount = $albumRow->galleries->count(); @endphp
                @if($galleryCount)
                    <span class="badge bg-purple-gradient">{{ $galleryCount }} image{{ $galleryCount > 1 ? 's' : '' }}</span>                    
                @else
                    -
                @endif
            </td>
            <td>
                @if ($albumRow->status ==1)
                    <span class="badge bg-success">Active</span>
                @else
                    <span class="badge bg-info">In-Active</span>
                @endif
            </td>
            
            <td class="action-table-data">
                <div class="edit-delete-action">
                    <a class="btn btn-sm btn-primary me-2 p-2"
                    href="javascript:;" 
                    data-title="Edit Album" 
                    data-size="lg"
                    data-medcatid="{{ $albumRow->id }}"
                    data-ajax-edit-album="true" 
                    data-url="{{ route('manage-album.edit', $albumRow->id) }}"
                    title="Edit">
                        <i data-feather="edit" class="feather-edit"></i>
                    </a>
                    <form action="{{ route('manage-album.destroy', $albumRow->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger show_confirm" data-name="{{ $albumRow->title }}" title="Delete">
                            <i data-feather="trash-2" class="feather-trash-2"></i>
                        </button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="6" class="text-center">No banners found.</td>
        </tr>
        @endif
    </tbody>
</table>