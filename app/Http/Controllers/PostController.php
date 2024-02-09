<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // check request cycle notes for explanations.
use \App\Models\Post;   // check request cycle notes for explanations.

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //same as select * from post in mysql
        $posts = Post::all();   // eloquent way!
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
