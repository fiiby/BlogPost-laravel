@extends('layouts.app') <!-- extends here means what? -->

@section('content')
<div class="container mx-auto">
    <div class="mt-8">
        <h1 class="text-2xl font-bold mb-4"> Create Blog Post</h1>
        <form action="{{ route('post.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title</label>
                <input type="text" name="title" id="title" class="from-input mt-1 bloc w-full">
            </div>
            <div class="mb-4">
                <label for="content" class="block text-gray-700">Content</label>
                <!-- content/title from store in PostController
                -->
                <br>
                <textarea type="text" name="content" id="content" class=" from-input mt-1 block w-full"></textarea>

            </div>
            <br>
            <div class="mb-4">
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Post</button>
            </div>
        </form>
    </div>
</div>
@endsection
<!-- why this underline? -->
<!-- last thing:
this cmd is after u finnish all things in the post folder and its working then:
php artisan make:migration add_user_id_post_table --table=post -->