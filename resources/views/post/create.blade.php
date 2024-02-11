@extends('layouts.app')

@section('content')
<div>
    <div>
        <h1> Create Blog Post</h1>
        <form action="{{ route('post.store') }}" method="POST">
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
                <button type="submit" class="">Post</button>
            </div>
        </form>
    </div>
</div>
@endsection