@extends('Shared._layout')
@section('title', 'Customer Login')
@section('content')

    <h2 style="color: white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;Login</h2>
    <hr/>

    <style>

        .control-label
        {
            color: white;
        }

        .col-md-4
        {
            position: absolute;
            left:100px;
        }

    </style>

    <div class="row">
        <div class="col-md-4">
            <form method="post" action="{{url('Customers/Login')}}">
                @csrf
                <br/>
                <div>
                    <label class="control-label">Email</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="email" class="form-control"/>
                </div>
                <br/>
                <div>
                    <label class="control-label">Password</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="password" name="password" class="form-control"/>
                </div>
                <br/>
                <div class="form-group">
                    <input type="submit" class="btn btn-default">
                </div>

            </form>

        </div>

    </div>

@endsection
