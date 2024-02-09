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
        <input type="text" class=" placeholder= "search tasks">
    </div>
    <a href="" class= "">Post</a>
    <table class = "">
        <thead>
            <tr>
                <th class="">Title</th>
                <th class="">Content</th>
            </tr>
    </thead>
    <tbody>
        @forelse ($posts as $post)
        <tr>
            <td class = "">{{ $post->title}}</td>
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