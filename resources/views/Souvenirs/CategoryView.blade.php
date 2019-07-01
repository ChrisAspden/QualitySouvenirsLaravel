@extends('Shared._layout')
@section('title', 'CategoryView')
@section('content')

    <style>

        #SouvenirList{
            position: absolute;
            top:100px;
        }

        th{
            color:white;
            padding-left: 50px;
        }

        td{
            padding-left: 100px;
            padding-bottom: 50px;
            padding-top: 50px;
        }

        img{
            width: 100px;
            height: 100px;
        }

        a:-webkit-any-link {
            color: white;
            cursor: pointer;
            text-decoration: none;
        }


    </style>

    <table id="SouvenirList">
        <thead>
        <tr>
            <th>Souvenir Name</th>
            <th>Souvenir Price</th>
            <th>Souvenir Image</th>
        </tr>

        </thead>

        <tbody>

        @foreach($souvenir as $s)
            <tr>
                <td>
                    <a style="text-decoration: none; color: white;" href="{{url('/ProductView',
                    ['id'=>$s->id])}}"><p>{{$s->name}}</p></a>
                </td>
                <td>
                    <a style="text-decoration: none; color: white;" href="{{url('/ProductView',
                    ['id'=>$s->id])}}"><p>{{$s->ItemPrice}}</p></a>
                </td>
                <td>
                    <a style="text-decoration: none; color: white;" href="{{url('/ProductView',
                    ['id'=>$s->id])}}"><img src="{{URL::asset($s->ImagePath)}}"></a>
                </td>
            </tr>

        @endforeach

        <div class="paging" style="position: absolute; left:800px; top:200px; color: white;">
            {{$souvenir->links()}}
        </div>




        </tbody>



    </table>




@endsection
