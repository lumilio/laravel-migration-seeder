@extends('layouts.app')
@section('page-title','home')



@section('content')
<div class="container-fluid d-flex justify-content-center flex-column align-items-center">
    @forelse ($costante as $item)
        <div class='d-flex'>
            <p class='mx-1'>{{$item->city1}}</p>
            <p class='mx-1'>{{$item->city2}}</p>
            <p class='mx-1'>{{$item->start_trip}}</p>
            <p class='mx-1'>{{$item->price}}</p>        
        </div>
    @empty
        <div class='d-flex'>
            <p>no data</p>     
        </div>
    @endforelse 
    <a href="{{route('page2')}}">vai al blog</a>
</div>
@endsection


