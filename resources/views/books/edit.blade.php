<!-- resources/views/books/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Book</h1>

    <form action="{{ route('books.update', $book) }}" method="post">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $book->title }}" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" required>{{ $book->description }}</textarea>
        <br>
        <button type="submit">Update Book</button>
    </form>
@endsection
