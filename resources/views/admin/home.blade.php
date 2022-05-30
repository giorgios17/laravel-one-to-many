Loggato admin

@foreach ($posts as $post)
    <p>{{ $post->title }}</p>
    <p>{{ $post->content }}</p>
@endforeach
