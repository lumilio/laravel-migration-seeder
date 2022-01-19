<?php

namespace App\Http\Controllers;
use App\Models\Travel;   
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index1()
    {   
        $costante = Travel::all();
        return view('pages.start-page',compact('costante'));
    }
    public function index2()
    {
        return view('pages.second-page');
    }
}
