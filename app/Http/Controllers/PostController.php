<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('blogs/posts', [ 
            "title" => "Blogs",
            // "posts" => Post::all()
            "posts" => Post::latest()->get() // dari yang terbaru
        ]);
    }

    public function show(Post $post)
    {
        return view('blogs/blog', [ 
            "title" => "Blogs",
            "post" => $post
        ]);
    }
}
