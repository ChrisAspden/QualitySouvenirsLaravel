@extends('Shared._layout')
@section('title', 'Customer Create')
@section('content')

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

        .alert-danger
        {
            color:white;
            position: absolute;
            top:140px;
            left:400px;
        }

    </style>

    <h2 style="color: white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;Register</h2>
    <hr/>
    <div class="row">
        <div class="col-md-4">
            <form method="post" action="{{url('Customers/Create')}}">
                @csrf
                    <br/>
                <div class="form-group">
                    <label class="control-label">First Name</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="FirstMidName" class="form-control"/>

                </div>
                    <br/>
                <div>
                    <label class="control-label">Last Name</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="LastName" class="form-control"/>
                </div>
                    <br/>
                <div>
                    <label class="control-label">Home Phone</label>
                    &nbsp;
                    <input name="HomePhoneNumber" class="form-control"/>
                </div>
                    <br/>
                <div>
                    <label class="control-label">Work Phone</label>
                    &nbsp;&nbsp;
                    <input name="WorkPhoneNumber" class="form-control"/>
                </div>
                    <br/>
                <div>
                    <label class="control-label">Mobile Phone</label>
                    <input name="MobilePhoneNumber" class="form-control"/>
                </div>
                    <br/>
                <div>
                    <label class="control-label">Address</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="Address" class="form-control"/>
                </div>
                    <br/>
                <div>
                    <label class="control-label">Email</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="Email" class="form-control"/>
                </div>
                    <br/>
                <div>
                    <label class="control-label">Password</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="Password" class="form-control"/>
                </div>
                    <br/>
                <div class="form-group">
                    <input type="submit" class="btn btn-default">
                </div>

            </form>

        </div>

    </div>

    @if($errors->any())

        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif


@endsection

