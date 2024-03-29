@extends('layouts.app')
@section('content')

<div class="container">
    <h1 class="text-center"> Edit Post</h1>
    <form action="{{ route('post.update', $post->id)}}" method="POST" class="mx-auto w-1/2">
        @csrf
        @method('PUT')
        <!-- add form filed -->
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Title</label>
            <input type="text" name="title" id="title" class="form-input mt-1 block" value="{{ $post->title }}">
        </div>
        <div class="mb-4">
            <label for="content" class="block text-gray-700">Content</label>
            <input type="text" name="content" id="content" class="form-textarea mt-1 block  w-full">
        </div>
        <a href="{{ route('post.show', $post->id) }}"><button type="submit" class="btn btn-primary">Update Post</button></a>


    </form>
</div>
@endsection