@extends('layouts.app')


@section('content')
    <h1>User</h1>

    {!! Form::open(['method' =>'POST', 'action' => 'AdminUsersController@store','files' => true]) !!}
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
        {!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

    @include('includes.form_error')

@stop