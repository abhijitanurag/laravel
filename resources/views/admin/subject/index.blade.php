@extends('layouts.adminlayout')
@section('body')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-11"></div>
            <div class="col-md-1">
                <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal"> <span class=" glyphicon glyphicon-plus"></span> Add Subject</button>
            </div> </div>
    </div>
    @if(count($subjects))
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <h3>Id</h3>

                </div>
                <div class="col-md-1"><h3>Teacher id</h3></div>
                <div class="col-md-1">  <h3>Batch Id</h3></div>
                <div class="col-md-1">  <h3>Subject Id</h3></div>
                <div class="col-md-1">  <h3>Subject Name</h3></div>


            </div>
            <hr>
            @foreach($subjects as $subject)
                <div class="row">
                    <div class="col-md-1">  <h4> {{$subject->id}}</h4></div>

                    <div class="col-md-1">
                        <h4>{{$subject->teacher_id}}</h4>
                    </div>
                   <div class="col-md-1">  <h4> {{$subject->batch_id}}</h4></div>
                    <div class="col-md-1">  <h4>{{$subject->sub_id}}</h4></div>
                    <div class="col-md-1">  <h4>{{$subject->sub_name}}</h4></div>
                    <div class="col-md-1">
                        <a href="{{route('subject.edit',$subject->id)}}"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>

                    </div>
                    <div class="col-md-1">  {!! Form::model($subject,['method'=>'delete','action'=>['SubjectController@destroy',$subject->id]]) !!}
                        <div class="row">
                            <div class="col-md-10"></div>
                            {!! Form::submit('delete subject',['class'=>'btn btn-primary']) !!}</div>

                        {!! form::close() !!}</div>
                </div>


            @endforeach

        </div>
    @else
        <h2>Please Add subjects</h2>


    @endif


    {{--<!-- Modal -->--}}
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">Add New Subject </h4>
                </div>
                <div class="form-group">
                    <div class="modal-body">
                        {!! Form::open(['method'=>'post','action'=>'SubjectController@store','files'=>'true']) !!}

                        {!! Form::label('batch_id','Batch id') !!}

                        <select name="batch_id" class="form-control">
                            <option value="0">Please select a batch</option>
                            @foreach($batchs as $batch)
                                <option value="{{$batch->id}}">{{$batch->batchid}}</option>


                            @endforeach
                        </select>

                        {!! Form::label('teacher_id','Teacher Id') !!}
                        <select name="teacher_id" class="form-control">
                            <option value="0">Please select a teacher</option>
                            @foreach($teachers as $teacher)
                                <option value="{{$teacher->id}}">{{$teacher->first_name}}</option>


                            @endforeach
                        </select>

                        {!! Form::label('sub_id','Subject Id') !!}
                        <input type="text" name="sub_id" value="" class="form-control"/>


                        {!! Form::label('sub_name','Subject Name') !!}
                        <input type="text" name="sub_name" value="" class="form-control"/>




                    </div>
                    {!! Form::submit('Add Subject',['class'=>'btn btn-info']) !!}

                </div>

                {!! Form::close() !!}
            </div>


        </div>

    </div>
    </div>



@stop