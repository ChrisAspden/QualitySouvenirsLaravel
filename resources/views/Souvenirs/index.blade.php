@extends('Shared._layout')
@section('title', 'Souvenir Index')
@section('content')

<h1 style="color: white; position: absolute; left: 600px;">Index</h1>



<style>
    table,th,td
    {
        padding-right: 50px;
        padding-bottom: 50px;
        color: white;
    }

    table{
        position: absolute;
        top:200px;
    }

</style>

<table class="table">
    <thead>
    <tr>
        <th>
            Name
        </th>
        <th>
            Description
        </th>
        <th>
            Supplier ID
        </th>
        <th>
            Category ID
        </th>
        <th>
            Quantity
        </th>
        <th>
            Item Price
        </th>
        <th>
            Image Path
        </th>
    </tr>
    </thead>
    <tbody>
    @foreach($souvenirs as $souvenir)
        <tr>
            <td>
                {{ $souvenir->name}}
            </td>

            <td>
                {{ $souvenir->description}}
            </td>
            <td>
                {{ $souvenir->supplier_id}}
            </td>
            <td>
                {{ $souvenir->category_id}}
            </td>
            <td>
                {{ $souvenir->Quantity}}
            </td>
            <td>
                {{ $souvenir->ItemPrice}}
            </td>
            <td>
                {{ $souvenir->ImagePath}}
            </td>
        </tr>
    @endforeach

    </tbody>
</table>


@endsection
