
<!DOCTYPE html>
<html>

<head>
    <title>Post Details</title>
</head>

<body>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <a href="{{ route('posts.create') }}">Create Another Post</a>
</body>

</html>