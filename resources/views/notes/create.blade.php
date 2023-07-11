@extends('layout')

@section('title')
    Add Note
@endsection

@section('content')

@include('inc.errors')

    <form method="POST" action="{{ route('notes.store') }}" >
        @csrf
        <div class="form-group">

           <textarea type="text" name="content" class="form-control" placeholder="content">{{old('content')}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Add Note</button>
    </form>
@endsection
