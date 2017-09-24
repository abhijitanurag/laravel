@extends('layouts.adminlayout')


@section('body')
    <div class="form-group">
        {!! Form::open(['method'=>'patch','action'=>['StudentController@update',$student->id],'files'=>'true']) !!}

        {!! Form::label('batch_id','batch id') !!}
        <input type="text" name="batch_id" value=" {{$student->batch_id}}" class="form-control "/>

        {!! Form::label('first_name','First Name') !!}
        <input type="text" name="first_name" value="{{$student->first_name}}" class="form-control""/>

        {!! Form::label('last_name','Last Name') !!}
        <input type="text" name="last_name" value="{{$student->last_name}}" class="form-control""/>


        {!! Form::label('email','Email') !!}
        <input type="text" name="email" value="{{$user->email}}" class="form-control"/>


        {!! Form::label('gender','Gender') !!}
        <input type="text" name="gender" value="{{$student->gender}}" class="form-control"/>

        {!! Form::label('dob','DOB') !!}
        <input type="text" name="dob" value="{{$student->dob}}" class="form-control"/>

        {!! Form::label('phone','Phone') !!}
        <input type="text" name="phone" value="{{$student->phone}}" class="form-control"/>
        {!! Form::submit('update record',['class'=>'btn btn-danger']) !!}
        {!! form::close() !!}
        </div>


@stop