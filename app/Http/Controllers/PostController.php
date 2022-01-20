<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post; 

class PostController extends Controller
{
    public function index1()
    {   
        $posts_arrey = Post::all();
        return view('posts.index',compact('posts_arrey'));
    }
    public function index2()
    {
        return view('posts.show');
    }
}
