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
                                    {{--{!! Form::model($user,['method' =>'PATCH', 'action' => ['UserController@update',$user->id],'files' => true]) !!}--}}
                                    <tr>
                                        <td>First Name</td>
                                        <td><input size="70%" type="text"
                                                   value="{{ ucfirst(Auth::user()->firstName) }}"></td>
                                    </tr>
                                    <tr>
                                        <td>Last Name</td>
                                        <td><input size="70%" type="text" value="{{ ucfirst(Auth::user()->lastName) }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><input size="70%" type="text" value="{{$user->email}}"></td>
                                    </tr>
                                    <tr>
                                        <td>Phone No.</td>
                                        <td><input size="70%" type="text" value="{{$user->phoneNumber}}"></td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td><input size="70%" type="text" value="{{$user->address}}"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td align="right"><a href="{{ url('user.editProfile') }}"><input type="button"
                                                                                                         value="Update Profile"
                                                                                                         class="btn btn-primary"></a>
                                        </td>
                                    </tr>
                                    {{--{!! Form::close() !!}--}}
                                @endforeach
                            @endif

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
