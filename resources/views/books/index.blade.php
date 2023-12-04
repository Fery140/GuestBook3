<!-- resources/views/books/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Book List</h1>

    <a href="{{ route('books.create') }}">Add New Book</a>

    <ul>
        @foreach ($books as $book)
            <li>
                {{ $book->title }} - {{ $book->description }}
                <a href="{{ route('books.edit', $book) }}">Edit</a>
                <form action="{{ route('books.destroy', $book) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
