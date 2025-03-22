<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class PostContoller extends Controller
{
    public function index()
    {
        return view('Post.index');
    }

    public function create()
    {
        return view('Post.create');
    }

    public function show()
    {
        return view('Post.show');
    }

}

