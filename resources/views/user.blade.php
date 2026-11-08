<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>
<body>
    <h1>Hello, {{ $name }}</h1>
    <p>Role: {{ $role }}</p>

    <h2>All Posts from Database:</h2>
    <ul>
        @foreach($posts as $post)
            <li>
                <strong>{{ $post->title }}</strong>: {{ $post->body }}
        </li>
        @endforeach
    </ul>
</body>
</html>