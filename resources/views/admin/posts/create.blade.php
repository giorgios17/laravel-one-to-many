@extends('layouts.dashboard')
@section('content')
    {{-- <div class="form-container">
        <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf
            <label for="title">Titolo:</label>
            <input type="text" name="title" id="title" value=""><br>
            <label for="description">Descrizione:</label>
            <input type="text" name="description" id="description" value=""><br>
            <label for="thumb">Url immagine:</label>
            <input type="text" name="thumb" id="thumb" value=""><br>
            <label for="price">Prezzo:</label>
            <input type="number" name="price" id="price" value=""><br>
            <label for="series">Serie:</label>
            <input type="text" name="series" id="series" value=""><br>
            <label for="sale_date">Data di vendita:</label>
            <input type="date" name="sale_date" id="sale_date" value=""><br>
            <label for="type">Genere:</label>
            <input type="text" name="type" id="type" value=""><br>
            <input type="submit">
        </form>
    </div> --}}
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
