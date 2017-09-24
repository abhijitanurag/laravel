@extends('layouts.adminlayout')


@section('body')
    <div class="form-group">
        {!! Form::open(['method'=>'patch','action'=>['TeacherController@update',$teacher->id],'files'=>'true']) !!}



        {!! Form::label('first_name','First Name') !!}
        <input type="text" name="first_name" value="{{$teacher->first_name}}" class="form-control""/>

        {!! Form::label('last_name','Last Name') !!}
        <input type="text" name="last_name" value="{{$teacher->last_name}}" class="form-control""/>


        {!! Form::label('email','Email') !!}
        <input type="text" name="email" value="{{$user->email}}" class="form-control"/>


        {!! Form::label('gender','Gender') !!}
        <input type="text" name="gender" value="{{$teacher->gender}}" class="form-control"/>

        {!! Form::label('dob','DOB') !!}
        <input type="text" name="dob" value="{{$teacher->dob}}" class="form-control"/>

        {!! Form::label('phone','Phone') !!}
        <input type="text" name="phone" value="{{$teacher->phone}}" class="form-control"/>
        {!! Form::submit('update record') !!}
        {!! form::close() !!}
    </div>


@stop