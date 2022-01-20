@extends('layouts.app')
@section('page-title','home')



@section('content')
<div class="container-fluid d-flex justify-content-center flex-row align-items-center">
    @forelse ($travels_arrey as $item)
        <a href='#' class='m-2 card-travel d-flex align-items-center flex-column'>
            <img src="{{$item->photo}}" alt="">
            <p>{{$item->city1}} - {{$item->city2}}</p>
            <p>{{$item->price}}€</p>
            <p class='scadenza'>offerta valida fino al {{$item->start_trip}}</p>
        </a>
    @empty
        <p>no data</p>
    @endforelse 
</div>
@endsection