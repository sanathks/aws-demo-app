<?php

namespace App\Http\Controllers;

use App\Post;

class BlogController extends Controller
{
    public function overview()
    {
        $posts = Post::orderBy('id')->get();

        return view("overview")
            ->with(compact('posts'));
    }
}
