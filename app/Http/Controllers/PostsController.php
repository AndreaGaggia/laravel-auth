<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('guests.index', compact('posts'));
    }
}
