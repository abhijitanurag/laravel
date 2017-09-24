@extends('layouts.adminlayout')


@section('body')
    <div class="form-group">
{!! Form::open([$batch,'method'=>'PATCH','action'=>['BatchController@update',$batch->id]]) !!}
{!! Form::label('batchid','batch id') !!}
{{--//{!! Form::text('batchid',null) !!}--}}

<input type="text" name="batchid" value="{{$batch->batchid}}" class="form-control "/>
{!! Form::label('year','Year') !!}
<input type="text" name="year" value="{{$batch->year}}" class="form-control"/>
{{--{!! Form::text('year',null) !!}--}}
{!! Form::label('branch','branch') !!}
<input type="text" name="branch" value="{{$batch->branch}}" class="form-control"/>
{{--{!! Form::text('branch',null) !!}--}}
{!! Form::label('section','section') !!}
<input type="text" name="section" value="{{$batch->section}}" class="form-control"/>
{{--{!! Form::text('section','section') !!}--}}
    </div>
{!! Form::submit('update form',['class'=>'btn btn-info']) !!}


{!! Form::close() !!}
    @stop