@extends('layouts.dashboard')
@section('content')
    <form action="{{ route('admin.posts.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Scrivi un titolo...">
        </div>
        <div class="form-group">
            <label for="content">Contenuto</label>
            <textarea class="form-control" name="content" id="content" rows="3"></textarea>
        </div>
        <input class="btn btn-primary" type="submit">
    </form>
@endsection
