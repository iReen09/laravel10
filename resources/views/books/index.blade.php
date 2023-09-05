@extends('books.layout')
@section('content')
<a class='btn btn-primary' href="{{ route('books.create') }}">Add New</a>
<table class='table'>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Page</th>
        <th>Year</th>
        <th>Action</th>
    </tr>
    @foreach($books as $book)
    <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->page }}</td>
        <td>{{ $book->year }}</td>
        <td>
            <a class='btn btn-success' href="{{ route('books.show', $book->id) }}">Show</a>
            <a class='btn btn-warning' href="{{ route('books.edit', $book->id) }}">Edit</a>
            <form onclick="return confirm('Are you sure?')" action="{{ route('books.destroy', $book->id) }}" method="post" style="display: inline;">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $books->links() }}
@endsection