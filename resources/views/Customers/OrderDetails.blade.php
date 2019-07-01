@extends('Shared._layout')
@section('title', 'My Account')
@section('content')


    <style>
        .details
        {
            color:white;
        }

        table,th,td
        {
            padding-right: 50px;
        }
    </style>

    <div class="details">
        <h2>Order Details</h2>
        <table>
            <thead>
                <tr>
                    <th>Souvenir ID</th>
                    <th>Souvenir Quanitity</th>
                    <th>Souvenir Price</th>
                </tr>
            </thead>

            <tbody>
            @foreach($ItemsInOrder as $s)

                <tr>
                    <td>{{$s->Souvenir_ID}}</td>
                    <td>{{$s->Quantity}}</td>
                    <td>{{$s->TotalCost}}</td>
                </tr>

            @endforeach
            </tbody>
        </table>

    </div>


@endsection