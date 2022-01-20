@extends('layouts.app')
@section('page-title','offers')



@section('content')
<div class="container-fluid d-flex justify-content-center flex-row align-items-center">
    <div>
        <p>prenota il volo {{$item_travels_arrey['city1']}} - {{$item_travels_arrey['city2']}}</p>
        <p>prezzo : {{$item_travels_arrey['price']}}€</p>
    </div>
</div>
@endsection