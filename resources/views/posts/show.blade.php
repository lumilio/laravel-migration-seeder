@extends('layouts.app')
@section('page-title','blog')



@section('content')
<div class="container-fluid d-flex justify-content-center flex-row align-items-center">
    <div>
        <p>post pubblicato da {{$item_posts_arrey['author']}}</p>
    </div>
</div>
@endsection