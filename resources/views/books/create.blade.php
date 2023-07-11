@extends('layout')

@section('title')
    Create Book
@endsection

@section('content')

@include('inc.errors')

    <form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">

            <input type="text" name="title" class="form-control" placeholder="title" value="{{old('title')}}">
        </div>
        <div class="form-group">

            <textarea type="text" name="desc" class="form-control" placeholder="description" >{{old('desc')}}</textarea>

        </div>

        <div class="form-group">
            <input type="file" class="form-control-file" name="img">
        </div>
        Select Categories:
        <hr>
        @foreach ($categories as $category )
                <div class="form-check"> 
            <input class="form-check-input" type="checkbox" name="category_ids[]" value="{{$category->id}}" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              {{$category->name}}
            </label>
          </div>
            <hr>
        @endforeach


        <button type="submit" class="btn btn-primary">Add Book</button>
    </form>
@endsection
