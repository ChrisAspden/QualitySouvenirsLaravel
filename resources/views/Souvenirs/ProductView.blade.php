@extends('Shared._layout')
@section('title', 'Product View')
@section('content')

    <style>

        #myDiv{

            color: white;
            position: absolute;
            top:350px;
            left:500px;
        }

        img{
            position: absolute;
            top:100px;
            left:500px;
            height: 200px;
            width: 200px;
        }

        a
        {
            color: white;
            text-decoration: none;
        }

    </style>


        <img src="{{URL::asset($souvenir->ImagePath)}}">

    <div id="myDiv">
        <p>Souvenir Name:&nbsp;&nbsp;&nbsp;{{$souvenir->name}}</p>
        <p>Souvenir Description:&nbsp;&nbsp;&nbsp;{{$souvenir->description}}</p>
        <p>Souvenir Price:&nbsp;&nbsp;&nbsp;{{$souvenir->ItemPrice}}</p>

        <a href="{{url('/ShoppingCart',['id'=>$souvenir->id])}}">Add to cart</a>

    </div>




@endsection
