<table class="table">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>Album</th>           
            <th>Branches</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($galleries as $index => $gallery)
        <tr>
            <td>{{ ($galleries->currentPage() - 1) * $galleries->perPage() + $index + 1 }}</td>
            <td>
                 @if($gallery->image_file)
                    <img src="{{ asset('upload/album/gallery/'.$gallery->image_file) }}" width="80" alt="Gallery Image">
                @else
                    N/A
                @endif
                
            </td>
            <td>
                {{ $gallery->album->title ?? 'N/A' }}                
            </td>
            <td>
                @if($gallery->album->branches->count())
                    <div class="d-flex flex-wrap gap-1">
                        @foreach($gallery->album->branches as $branch)
                            <span class="badge bg-light-primary text-primary border border-primary py-1 px-2">
                                {{ $branch->name }}
                            </span>
                        @endforeach
                    </div>
                @else
                    N/A
                @endif
            </td>           
            <td>
                <div class="edit-delete-action d-flex gap-2">
                    <a href="{{ route('manage-gallery.edit', ['manage_gallery' => $gallery->id]) }}"                      
                        title="Edit"
                        class="btn btn-sm btn-info">
                        <i class="ti ti-edit"></i>
                    </a>
                    <form action="{{ route('manage-gallery.destroy', ['manage_gallery' => $gallery->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger show_confirm" data-name="Gallery Image {{ $gallery->id }}">
                            <i class="ti ti-trash"></i>
                        </button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Pagination Links -->
<div class="mt-3">
    <div class="paginate-section">
        {{ $galleries->links('vendor.pagination.bootstrap-5') }}
    </div> 
</div>