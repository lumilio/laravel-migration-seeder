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
    public function index2($id)
    {
        $travels_arrey = Travel::all();
        if(is_numeric($id) && $id >= 0 && $id < count($travels_arrey)){
            $item_travels_arrey = $travels_arrey[$id];
            return view('travels.show',compact('item_travels_arrey'));
        }
        else{
            abort(404);
        }
    }



}
