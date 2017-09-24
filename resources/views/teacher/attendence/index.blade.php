@extends('layouts.teacherlayout')
@section('body')
    @if(count($subjects))
   <div class="container">
      <div class="row">
          <div class="col-md-1">

          </div>
          <div class="col-md-2"><h3>Batch Id</h3></div>
          <div class="col-md-2"><h3>Subject Id</h3></div>
          <div class="col-md-2"><h3>Subject Name</h3></div>
      </div>
       {!! Form::open(['method'=>'put','action'=>['TeacherAttendence@update','1']]) !!}


    @foreach($subjects as $subject)
    <div class="col-md-1">
        <input type="radio" name="id" value="{{$subject->id}}">
    </div>
        <div class="col-md-2">
            <h4>{{$subject->batch_id}}<input type="hidden" name="batch_id" value="{{$subject->batch_id}}"> </h4>
        </div>
    <div class="col-md-2">
<h4>{{$subject->sub_id}}</h4>
    </div>
        <div class="col-md-1">
            <h4>{{$subject->sub_name}}</h4>
        </div>
        @endforeach</div>
   <br />
       <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-3">
    {!! Form::submit('Get Attendence Sheet ',['class'=>'btn btn-primary']) !!}
           </div>
       </div>
        {!! Form::close() !!}

    @endif
    @stop