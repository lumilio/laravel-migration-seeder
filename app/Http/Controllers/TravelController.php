<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Travel;

class TravelController extends Controller
{
    public function index1()
    {
        return view('travels.index');
    }
    public function index2()
    {
        return view('travels.show');
    }
}
