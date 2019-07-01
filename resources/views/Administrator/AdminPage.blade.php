@extends('Shared._layout')
@section('title', 'Admin Page')
@section('content')

    <style>
        .myDiv
        {
            color:white;
        }
    </style>

    <div class="myDiv">
        <h2>Administrator Page</h2>
        <br/>
        <br/>
        <a style="color: white; text-decoration: none" href="{{url('Souvenirs/')}}">Souvenirs</a>
        <br/>
        <br/>
        <a style="color: white; text-decoration: none" href="{{url('Categories/')}}">Categories</a>
    </div>


@endsection
