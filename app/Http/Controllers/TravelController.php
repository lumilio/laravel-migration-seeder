<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Travel;

class TravelController extends Controller
{
    public function index1()
    {
        $travels_arrey = Travel::all();
        return view('travels.index',compact('travels_arrey'));
    }
    public function index2()
    {
        return view('travels.show');
    }
}
