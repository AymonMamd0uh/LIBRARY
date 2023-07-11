@extends('layout')
@section('title')
    All categories
@endsection

@section('content')
    <h1>All categories</h1>
    @auth
        <a class="btn btn-primary" href="{{ route('categories.create') }}">Create category</a>

    @endauth

    @foreach ($categories as $category)
        <hr>
        <a href="{{ route('categories.show', $category->id) }}">
            <h3>{{ $category->name }}</h3>
        </a>


        <a class="btn btn-primary" href="{{ route('categories.show', $category->id) }}">Show</a>
        @auth
        @if (Auth::user()->is_admin == 1)
            <a class="btn btn-danger" href="{{ route('categories.delete', $category->id) }}">Delete</a>
        @endif
            <a class="btn btn-success" href="{{ route('categories.edit', $category->id) }}">Edit</a>
            
        @endauth
    @endforeach
@endsection
