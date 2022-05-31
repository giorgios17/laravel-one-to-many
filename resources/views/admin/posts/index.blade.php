@extends('layouts.dashboard')
@section('content')
    <div class="create-post">
        <a class="btn btn-primary mb-3" href="{{ route('admin.posts.create') }}">New Post</a>
    </div>
    <div class="table">
        <table style="width:100%">
            <tr>
                <th>Title</th>
                <th>Slug</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
