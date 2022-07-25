{{-- @extends('name')

@section('name')
    
@endsection --}}

<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Slug</th>
            <th>Title</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr data-id="{{ $house->id }}">
                <td>{{ $post->id }}</td>
                <td>{{ $post->slug }}</td>
                <td>{{ $post->title }}</td>
                <td>
                    <a href="{{ route('admin.posts.show', ['post' => $post]) }}" class="btn btn-primary">View</a>
                </td>
                <td>
                    <a href="{{ route('admin.posts.edit', ['post' => $post]) }}" class="btn btn-warning">Edit</a>
                </td>
                <td>
                    <button class="btn btn-danger js-delete">Delete</button>
                    {{-- <form action="{{ route('houses.destroy', ['house' => $house]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger js-delete">Delete</button>
                    </form> --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>