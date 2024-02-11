@extends('layouts.app')
@section
<div>
    <div>
        <h1> Edit Post</h1>
        <form action="{{ route('post.update', $post->id)}}" method="POST">
            @csrf
            <div>
                <label for="title" class="">Title</label>
                <input type="text" name="title" id="title" class="">
            </div>
            <div>
                <label for="content" class="">Content</label>
                <input type="text" name="content" id="content" class="">
            </div>
            <div>
                <button type="submit" class="">Update Post</button>
            </div>
        </form>
    </div>
</div>
@endsection