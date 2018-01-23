@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ ucfirst(Auth::user()->firstName) }} Profile</div>

                    <div class="panel-body">
                        <table class="table">
                            @if($user)
                                @foreach($user as $user)
                                    <tr>
                                        <td>First Name</td>
                                        <td>{{ ucfirst(Auth::user()->firstName) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Last Name</td>
                                        <td>{{ ucfirst(Auth::user()->lastName) }}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{$user->email}}</td>
                                    </tr>
                                    <tr>
                                        <td>Phone No.</td>
                                        <td>{{$user->phoneNumber}}</td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>{{$user->address}}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td align="right"><a href="{{ url('user.editProfile') }}"><input type="button" value="Edit Profile"></a></td>
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
