@extends('layouts.app') <!-- extends here means what? -->

@section('content')
<div class="container mx-auto"> 
    <div class="mt-8">
        <h1> Create Blog Post</h1>
        <form action="{{ route('post.store') }}" method="POST">
            @csrf
            <div>
                <label for="title" class="">Title</label>
                <input type="text" name="title" id="title" class="">
            </div>
            <div>
                <label for="content" class="">Content</label>
                <!-- content/title from store in PostController
                -->
                <br>
                <textarea type="text" name="content" id="content" class=""></textarea>

            </div>
             <br>
            <div>
                <button type="submit" class="">Post</button>
            </div>
        </form>
    </div>
</div>
@endsection   
 <!-- why this underline? -->