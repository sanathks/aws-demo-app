<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PostController extends Controller
{
    public function add()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        
    }
}
