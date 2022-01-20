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

    public function index2($id)
    {
        $posts_arrey = Post::all();
        if(is_numeric($id) && $id >= 0 && $id < count($posts_arrey)){
            $item_posts_arrey = $posts_arrey[$id];
            return view('posts.show',compact('item_posts_arrey'));
        }
        else{
            abort(404);
        }
    }

}
