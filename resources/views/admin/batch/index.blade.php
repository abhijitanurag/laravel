@extends('layouts.adminlayout')
@section('body')
@if($errors->has('batchid')||$errors->has('year')||$errors->has('branch')||$errors->has('section'))
<div style="background-color: red"><div style="color:white"> Please enter correct details</div></div>


@endif
    <div class="container">
        <div class="row">
            <div class="col-md-11"></div>
            <div class="col-md-1">
    <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal"><span class=" glyphicon glyphicon-plus"></span> Create Batch</button>
            </div> </div>
    </div>
    @if(count($batch))
        <div class="container">
            <div class="row">
     <div class="col-md-2">
     <h3>Batch Id</h3>
     </div>
            <div class="col-md-2">  <h3>Year</h3></div>
            <div class="col-md-2">  <h3>Branch</h3></div>
            <div class="col-md-2">  <h3>Section</h3></div>
            <div class="col-md-2">  <h3>Time Table </h3></div>

            </div>
<hr>
@foreach($batch as $bt)
                <div class="row">
                    <div class="col-md-2">
                        <h4>{{$bt->batchid}}</h4>
                    </div>
                    <div class="col-md-2">  <h4> {{$bt->year}}</h4></div>
                    <div class="col-md-2">  <h4>{{$bt->branch}}</h4></div>
                    <div class="col-md-2">  <h4>{{$bt->section}}</h4></div>
                    <div class="col-md-1">  <h4>{{$bt->hastimetable?'yes':'no'}} </h4></div>


                        <div class="col-md-1">

                                <a href="{{route('timetable.show',$bt->id)}}"><i class="fa fa-table fa-2x" aria-hidden="true"></i></a>

                        </div>

                        <div class="col-md-1">
                    <a href="{{route('batch.edit',$bt->id)}}"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>



                </div>
                    <div class="col-md-1">  {!! Form::model($bt,['method'=>'delete','action'=>['BatchController@destroy',$bt->id]]) !!}
<div class="row">
    <div class="col-md-10"></div>
                        {!! Form::submit('delete record',['class'=>'btn btn-primary']) !!}</div>

                        {!! form::close() !!}</div>
</div>


    @endforeach

        </div>
        @else
        <h2>Sorry, No batch to display</h2>


@endif


    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Create New Batch </h4>
                </div>
                <div class="form-group">
                <div class="modal-body">
                 {!! Form::open(['method'=>'post','action'=>'BatchController@store']) !!}
                    {!! Form::label('batchid','batch id') !!}
                    {!! Form::text('batchid',null,['class'=>'form-control']) !!}

                    {{--<input type="text" name="batchid" value="{{$batch->batchid}}" class="form-control "/>--}}
                    {!! Form::label('year','Year') !!}
                    {{--<input type="text" name="year" value="{{$batch->year}}" class="form-control""/>--}}
                    {!! Form::text('year',null,['class'=>'form-control']) !!}
                    {!! Form::label('branch','branch') !!}
                    {{--<input type="text" name="branch" value="{{$batch->branch}}" class="form-control""/>--}}
                    {!! Form::text('branch',null,['class'=>'form-control']) !!}
                    {!! Form::label('section','section') !!}
                    {{--<input type="text" name="section" value="{{$batch->section}}" class="form-control"/>--}}
                    {!! Form::text('section',null,['class'=>'form-control']) !!}
                </div>
                {!! Form::submit('update form',['class'=>'btn btn-info']) !!}

                </div>

                {!! Form::close() !!}
                </div>


            </div>

        </div>
    </div>
    @stop