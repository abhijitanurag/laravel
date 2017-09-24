@extends('layouts.teacherlayout')
@section('body')
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-11"></div>
            <div class="col-md-1">
                <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal"> <span class=" glyphicon glyphicon-plus"></span> Add Student</button>
            </div> </div>
    </div>
    @if(count($students))
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <h3>Id</h3>

                </div>
                <div class="col-md-1"></div>
                <div class="col-md-1">  <h3>First name</h3></div>
                <div class="col-md-1">  <h3>Last name</h3></div>
                <div class="col-md-1">  <h3>Batch id</h3></div>
                <div class="col-md-1">  <h3>DOB </h3></div>
                <div class="col-md-1">  <h3>Gender </h3></div>
                <div class="col-md-2">  <h3>Phone </h3></div>



            </div>
            <hr>
            {!! Form::open(['method'=>'post','action'=>'TeacherAttendence@store']) !!}
            <input type="hidden" name="batch_id" value="{{$subject->batch_id}}"/>
            <input type="hidden" name="sub_id" value="{{$subject->batch_id}}"/>
            <?php  $i=0; ?>
            @foreach($students as $student)
                <div class="row">
                    <div class="col-md-1">
                        <input type="hidden" name="stud_id{{$i}}" value="{{$student->id}}"/>

                        <h4>{{$student->id}}</h4>
                    </div>
                    <div class="col-md-1"><img src="{{asset($student->path)}}" height="60px" width="70px"></div>
                    <div class="col-md-1">  <h4> {{$student->first_name}}</h4></div>
                    <div class="col-md-1">  <h4>{{$student->last_name}}</h4></div>
                    <div class="col-md-1">  <h4>{{$student->batch_id}}</h4></div>
                    <div class="col-md-1">  <h4>{{$student->dob}} </h4></div>
                    <div class="col-md-1">  <h4>{{$student->gender}} </h4></div>
                    <div class="col-md-2">  <h4>{{$student->phone}} </h4></div>
                    <div class="col-md-1"><select name="{{$i}}present" class="form-control">
                            <option value="a"><b>A</b></option>
                            <option value="p">P</option>
                        </select></div>
                   </div>

<?php $i++?>
            @endforeach
            <br />
            <br />
<div class="row">
            {!! Form::submit('mark attendence',['class'=>'btn btn-info' ]) !!}
</div>
{!! Form::close() !!}
        </div>
    @else
        <h2>Please Add students</h2>


    @endif


@stop