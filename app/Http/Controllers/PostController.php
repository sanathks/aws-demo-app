<?php

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function add()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        Post::create($request->all());

        return redirect()->route('overview');
    }

    public function view($id)
    {
        $post = Post::find($id);

        return view('view')
            ->with(compact('post'));
    }
}
