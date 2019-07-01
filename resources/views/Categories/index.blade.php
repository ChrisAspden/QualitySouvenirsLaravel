@extends('Shared._layout')
@section('title', 'Category Index')
@section('content')

    <h1 style="color: white; position: absolute; left: 600px;">Category Index</h1>



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
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $cat)
            <tr>
                <td>
                    {{ $cat->name}}
                </td>

        @endforeach

        </tbody>
    </table>




@endsection
