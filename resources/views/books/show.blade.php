@extends('layout')

@section('content')
    <h1>Book ID: {{ $book->id }} </h1>
    <h2>{{ $book->title }}</h2>
    <p>{{ $book->desc }}</p>


    <h3>Categories:</h3>

<ul>
        @foreach ($book->categories as $category )
    <li>{{$category->name}}</li>
        
    @endforeach
</ul>


    <a href="{{ route('books.index') }}">Back</a>
@endsection
