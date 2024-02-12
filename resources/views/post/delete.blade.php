@extends('layouts.app')
@section('content')

<div class="container">
    <h1 class="text-center"> Delete Post</h1>
    <form action="{{ route('post.destroy', $post->id)}}" method="DELETE" class="mx-auto w-1/2">
        @csrf
        @method('PUT')
        <!-- add form filed -->
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Title</label>
            <input type="text" name="title" id="title" class="form-input mt-1 block" value="{{ $post->title}}">
        </div>
        <div class="mb-4">
            <label for="content" class="block text-gray-700">Content</label>
            <input type="text" name="content" id="content" class="form-textarea mt-1 block  w-full">
        </div>
        <button type="submit" class="btn btn-dng">Delete</button>

    </form>
</div>
@endsection