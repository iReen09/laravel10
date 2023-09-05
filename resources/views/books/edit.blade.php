@extends('books.layout')
@section('content')
<form class='form' action="{{ route('books.update', $book->id ) }}" method="post">
    @csrf
    @method('PUT')
    <label for="">Title</label><br>
    <input type="text" name="title" id="" value="{{ $book->title }}"><br>
    <label for="">Author</label><br>
    <input type="text" name="author" id="" value="{{ $book->author }}"><br>
    <label for="">Page</label><br>
    <input type="number" name="page" id="" value="{{ $book->page }}"><br>
    <label for="">Year</label><br>
    <input type="number" name="year" id="" value="{{ $book->year }}"><br><br>
    <input type="submit" value="Update" class="btn btn-primary">
</form>
@endsection