@extends('layout')

@section('content')
    <h1>category ID: {{ $category->id }} </h1>
    <h2>{{ $category->name }}</h2>

    <h3>Books:</h3>
    <ul>

        <li>
            @foreach ($category->books as $book )
                {{ $book->title }}
            @endforeach
        </li>
    </ul>



    <a href="{{ route('categories.index') }}">Back</a>
@endsection
