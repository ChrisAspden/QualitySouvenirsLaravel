@extends('Shared._layout')
@section('title', 'Category Select')
@section('content')

    <style>

        #catlist{
            position: absolute;

            top:150px;
            color: white;
        }

        td{
            padding-left: 200px;
            padding-bottom: 50px;
        }

    </style>

<div id="catlist">

    <table>
            <tr>
                <td>
                    <a style="color: white; text-decoration: none" href="{{url('/CategoryView', ['id' =>1])}}">
                        <img src="{{URL::asset('images/KoruNecklace.jpg')}}" alt="Koru">
                    </a>
                </td>
                <td>
                    <a style="color: white; text-decoration: none" href="{{url('/CategoryView', ['id' =>2])}}">
                        <img src="{{URL::asset('images/NZShirt.jpg')}}" alt="Koru">
                    </a>
                </td>
                <td>
                    <a style="color: white; text-decoration: none" href="{{url('/CategoryView', ['id' =>3])}}">
                        <img src="{{URL::asset('images/NZMug.jpg')}}" alt="Koru">
                    </a>
                </td>
            </tr>

            <tr>
                @foreach($categories as $category)
                    <td>
                        {{$category->name}}
                    </td>
                @endforeach
            </tr>
    </table>

</div>

@endsection