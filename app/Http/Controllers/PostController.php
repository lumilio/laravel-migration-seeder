<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post; 

class PostController extends Controller
{
    public function index1()
    {
        return view('posts.index');
    }
    public function index2()
    {
        return view('posts.show');
    }
}
