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
            'title' => 'Posts',
            'posts' => Post::all()
        ]);
    }

    //method untuk menampilkan satu postingan
    public function show($slug)
    {
        return view('post', [
            'title' => 'Single Post',
            'post' => Post::find($slug)
        ]);
    }
}
