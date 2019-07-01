@extends('Shared._layout')
@section('title', 'Shopping Cart')
@section('content')

    <div id="header">
        <h2>ShoppingCart</h2>
        <br />
        <p>All prices in NZD ($)</p>
        <br />

    </div>

    <style>

        h2,p,a
        {
            color: white;
            text-decoration: none;
        }

        img
        {
            width: 75px;
            height: 75px;
        }

        table
        {
            position: absolute;
            left:100px;
            top:250px;
            color:white;
            text-decoration: none;

        }

        table,th,td
        {

            padding-left: 50px;

        }

        th
        {
            padding-bottom: 30px;
        }



        #header
        {
            position: absolute;
            left:200px;
        }

    </style>

    <body>

    <table id="MyTable">

        <thead>

            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Subtotal</th>
                <th style="width: 5px;">-</th>
                <th>Quantity</th>
                <th>+</th>

            </tr>

        </thead>



        <tbody>



        @foreach($SouvenirsInCart as $s)
            <tr>
                <td><img src="{{URL::asset($s->ImagePath)}}"></td>
                <td>{{$s->name}}</td>
                <td>{{$s->ItemPrice}}</td>
                <td>{{$s->ItemPrice * $s->Quantity}}</td>
                <td><a>-</a></td>
                <td>{{$s->Quantity}}</td>
                <td><a>+</a></td>
            </tr>



        @endforeach

        <tr>
            <td style="position: absolute; left:380px; padding-top: 30px;">Subtotal:</td>
            <td style="position: absolute; left:455px; padding-top: 30px;">{{ $OrderTotal }}</td>
            <td style="position: absolute; left:550px; padding-top: 30px;">Grand Total (GST incl):</td>
            <td style="position: absolute; left:730px; padding-top: 30px;">{{ $GrandTotal }}</td>
        </tr>

        <tr>
            <td style="padding-top: 80px; position: absolute;left: 300px;"><a href="{{url('/category')}}">Continue Shopping</a></td>
            <td style="padding-top: 80px; position: absolute;left: 500px;"><a href="{{action('SouvenirController@ClearCart')}}">Clear Cart</a></td>
            <td style="padding-top: 80px; position: absolute;left: 700px;"><a href="{{action('SouvenirController@Checkout')}}">Checkout</a></td>
        </tr>

        </tbody>

    </table>
    </body>






@endsection