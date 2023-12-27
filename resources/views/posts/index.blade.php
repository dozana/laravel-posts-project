<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>

<h1>Personal Posts</h1>

@if($posts->count())
    <ul>
        @foreach($posts as $post)
            <li>
                <h2><a href="/posts/{{ $post->slug }}">{{ $post->slug }}</a></h2>
                <div>{{ $post->excerpt }}</div>
                <div>Posted {{ $post->date->diffForHumans() }} by {{ $post->author }}</div>
            </li>
        @endforeach
    </ul>
@endif

</body>
</html>
