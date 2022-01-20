@extends('layouts.app')
@section('page-title','blog')




@section('content')
<div class="container-fluid d-flex justify-content-center flex-column align-items-center">
    @forelse ($posts_arrey as $index => $item)
        <a href="{{route('single-blogRoute',['id'=> $index])}}" class='m-2 card-post d-flex flex-column'>
            <p>{{$item->author}}, {{$item->created_at}}</p>
            <p>{{$item->text}}</p>
            <img src="{{$item->photo}}" alt="">
        </a>
    @empty
        <p>no data</p>
    @endforelse 
</div>
@endsection
