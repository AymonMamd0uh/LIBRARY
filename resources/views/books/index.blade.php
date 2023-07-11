@extends('layout')
@section('title')
    All Books
@endsection

@section('content')
    <h1>All Books</h1>
    @auth
        <a class="btn btn-primary" href="{{ route('books.create') }}">Create Book</a>
    @endauth


    @foreach ($books as $book)
        <hr>
        <a href="{{ route('books.show', $book->id) }}">
            <h3>{{ $book->title }}</h3>
        </a>

        <p>{{ $book->desc }}</p>
        <a class="btn btn-primary" href="{{ route('books.show', $book->id) }}">Show</a>
        @auth
            <a class="btn btn-success" href="{{ route('books.edit', $book->id) }}">Edit</a>
            @if (Auth::user()->is_admin == 1)
                <a class="btn btn-danger" href="{{ route('books.delete', $book->id) }}">Delete</a>
            @endif
            
        @endauth
    @endforeach
@auth
    <h1>Notes:</h1>
@foreach (Auth::user()->notes as $note)
        <p>{{$note->content}}</p>
@endforeach
<a href="{{route('notes.create')}}" class="btn btn-info"> Add New Note</a>
@endauth

    
@endsection
