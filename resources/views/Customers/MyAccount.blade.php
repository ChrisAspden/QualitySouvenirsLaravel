@extends('Shared._layout')
@section('title', 'My Account')
@section('content')

    <style>
        .AccountDetails
        {
            color: white;
        }

        .Orders
        {
            color:white;
        }

        table,th,td
        {
            padding-right: 50px;
        }

    </style>

    <div class="AccountDetails">

        <h2>My Account</h2>

        <p>First Name: {{$customerFirstMidName}}</p>
        <p>Last Name: {{$customerLastName}}</p>
        <p>Mobile Phone Number: {{$customerMobile}}</p>
        <p>Email: {{$customerEmail}}</p>
        <br/>
    </div>

    <div class="Orders">
        <h2>Orders</h2>

        <table>
            <thead>

            <tr>
                <th>Order ID</th>
                <th>Order Status</th>
                <th>Subtotal</th>
                <th>Grand Total</th>
                <th></th>
            </tr>

            </thead>

            <tbody>
            @foreach($CustomerOrders as $c)
                <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->OrderStatus}}</td>
                    <td>{{$c->Subtotal}}</td>
                    <td>{{$c->GrandTotal}}</td>
                    <td><a style="color: white; text-decoration: none;" href="{{url('/OrderDetails',['id'=>$c->id])}}">Details</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



@endsection