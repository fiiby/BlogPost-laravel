<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Blog post</h1>
        <input type="text" class="" placeholder="search tasks">
    </div>
    <br>
    <div>
        <a href="{{ route('post.create') }}" class="">Add Post</a>
    </div>

    <table class="">
        <thead>
            <tr>
                <th class="">Title</th>
                <th class="">Content</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($post as $post)
            <tr>
                <td class="">{{ $post->title}}</td>
                <td class="">{{ $post->content}}</td>
            </tr>
            @empty<tr>
                <td>No posts found</td>
            </tr>
            @endforelse
        </tbody>
    </table>

</body>

</html>