@extends('layouts.adminlayout')


@section('body')
    <div class="form-group">
        {!! Form::open(['method'=>'PUT','action'=>['SubjectController@update',$subject->id]]) !!}

        {!! Form::label('batch_id','Batch id') !!}
        <input type="text" name="batch_id" value=" {{$subject->batch_id}}" class="form-control "/>

        {!! Form::label('teacher_id','Teacher Id') !!}
        <input type="text" name="teacher_id" value="{{$subject->teacher_id}}" class="form-control"/>

        {!! Form::label('sub_name','Subject Name') !!}
        <input type="text" name="sub_name" value="{{$subject->sub_name}}" class="form-control"/>


        {!! Form::label('sub_id','Subject Id') !!}
        <input type="text" name="sub_id" value="{{$subject->sub_id}}" class="form-control"/>
<br />

        {!! Form::submit('update subject',['class'=>'btn btn-danger']) !!}
        {!! form::close() !!}
    </div>



@stop