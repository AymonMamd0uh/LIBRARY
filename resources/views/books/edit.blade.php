@extends('layout')

@section('title')
    Edit Book - {{ $book->title }}
@endsection

@section('content')
    @include('inc.errors')

    <form method="POST" action="{{ route('books.update', $book->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">

            <input type="text" name="title" class="form-control" value="{{ old('title') ?? $book->title }}"
                placeholder="title">
        </div>
        <div class="form-group">

            <textarea type="text" name="desc" class="form-control" placeholder="description">{{ old('desc') ?? $book->desc }} </textarea>

        </div>
        <div class="form-group">
            <input type="file" class="form-control-file" name="img">
        </div>
        <button type="submit" class="btn btn-primary">Edit Book</button>
    </form>
@endsection
