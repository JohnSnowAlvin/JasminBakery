@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ ucfirst(Auth::user()->firstName) }} Profile</div>

                    <div class="panel-body">
                        {!! Form::open(['method' =>'POST', 'action' => 'UserController@store','files' => true]) !!}
                        <div class="form-group">
                            {!! Form::label('title','{{$user->firstName}}') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Edit Profile', ['class' => 'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Photo</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone No.</th>
                                <th>Address</th>
                                <th>Updated</th>
                            </tr>
                            @if($user)
                                @foreach($user as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td><img height="50"
                                                 src="{{$user->photo ? $user->photo->file : 'No user Photo'}}" alt="">
                                        </td>
                                        <td>{{$user->firstName}}</td>
                                        <td>{{$user->lastName}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phoneNumber}}</td>
                                        <td>{{$user->address}}</td>
                                        <td>{{$user->updated_at->diffForHumans()}}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </table>

                        {{----}}
                        {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success">--}}
                        {{--{{ session('status') }}--}}
                        {{--</div>--}}
                        {{--@endif--}}

                        {{--You are logged in!--}}
                        {{--<a href="{{ url('/products') }}">Products Page</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
