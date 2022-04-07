<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //method untuk menampilkan semua postingan
    public function index()
    {
        return view('posts', [
            'title' => 'All Posts',
            'posts' => Post::latest()->get()
        ]);
    }

    //method untuk menampilkan satu postingan
    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Single Post',
            'post' => $post
        ]);
    }
}
