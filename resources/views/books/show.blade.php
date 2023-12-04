<!-- resources/views/books/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Book Details</h1>

    <p><strong>Title:</strong> {{ $book->title }}</p>
    <p><strong>Description:</strong> {{ $book->description }}</p>

    <a href="{{ route('books.index') }}">Back to Book List</a>
@endsection
