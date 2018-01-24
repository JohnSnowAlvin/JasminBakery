@extends('layouts.app')


@section('content')

    {!! Form::open(['method' =>'PATCH', 'action' => ['AdminUsersController@update',$user->id],'files' => true]) !!}
    <div class="form-group">
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',null,['class' => 'form_control'] ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email','Email:') !!}
        {!! Form::text('email',null,['class' => 'form_control'] ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('role_id','Role:') !!}
        {!! Form::select('role_id',[''=> 'Choose Options'] + $roles, null,['class' => 'form_control'] ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('photo_id','Photo:') !!}
        {!! Form::file('photo_id',['class' => 'form_control'] ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password','Password:') !!}
        {!! Form::password('password',['class' => 'form_control'] ) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Create User', ['class' => 'btn btn-primary col-sm-3']) !!}
    </div>
    {!! Form::close() !!}

    {!! Form::open(['method' =>'DELETE', 'action' => ['AdminUsersController@destroy',$user->id]]) !!}
    <div class="form-group">
        {!! Form::submit('Delete User', ['class' => 'btn btn-primary col-sm-3']) !!}
    </div>
    {!! Form::close() !!}

    @include('includes.form_error')

@stop