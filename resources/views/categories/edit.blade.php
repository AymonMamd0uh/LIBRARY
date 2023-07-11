@extends('layout')

@section('title')
    Edit Category - {{ $category->name }}
@endsection

@section('content')
    @include('inc.errors')

    <form method="POST" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">

            <input type="text" name="name" class="form-control" value="{{ old('name') ?? $category->name }}"
                placeholder="name">
        </div>

        <button type="submit" class="btn btn-primary">Edit Category</button>
    </form>
@endsection
