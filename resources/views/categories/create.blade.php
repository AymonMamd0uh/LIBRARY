@extends('layout')

@section('title')
    Create Category
@endsection

@section('content')

@include('inc.errors')

    <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">

            <input type="text" name="name" class="form-control" placeholder="name" value="{{old('name')}}">
        </div>
        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
@endsection
