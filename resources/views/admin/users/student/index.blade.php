@extends('layouts.adminlayout')
{{--@if($errors->has('path')||$errors->has('first_name')||$errors->has('last_name')||$errors->has('dob')||$errors->has('batch_id')||$errors->has('gender')||$errors->has('phone')||$errors->has('email'))--}}
    {{--<div style="background-color: red"><div style="color:white"> Please enter correct details</div></div>--}}

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{--@endif--}}

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
            @foreach($students as $student)
                <div class="row">
                    <div class="col-md-1">
                        <h4>{{$student->id}}</h4>
                    </div>
                    <div class="col-md-1"><img src="{{asset($student->path)}}" height="60px" width="70px"></div>
                    <div class="col-md-1">  <h4> {{$student->first_name}}</h4></div>
                    <div class="col-md-1">  <h4>{{$student->last_name}}</h4></div>
                    <div class="col-md-1">  <h4>{{$student->batch_id}}</h4></div>
                    <div class="col-md-1">  <h4>{{$student->dob}} </h4></div>
                    <div class="col-md-1">  <h4>{{$student->gender}} </h4></div>
                    <div class="col-md-2">  <h4>{{$student->phone}} </h4></div>
                    <div class="col-md-1">
                        <a href="{{route('student.edit',$student->id)}}"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>

                    </div>
                    <div class="col-md-1">  {!! Form::model($student,['method'=>'delete','action'=>['StudentController@destroy',$student->id]]) !!}
                        <div class="row">
                            <div class="col-md-10"></div>
                            {!! Form::submit('delete record',['class'=>'btn btn-primary']) !!}</div>

                        {!! form::close() !!}</div>
                </div>


            @endforeach

        </div>
    @else
        <h2>Please Add students</h2>


    @endif


    {{--<!-- Modal -->--}}
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">Add New Student </h4>
                </div>
                <div class="form-group">
                    <div class="modal-body">
                        {!! Form::open(['method'=>'post','action'=>'StudentController@store','files'=>'true']) !!}

                        {!! Form::label('batch_id','batch id') !!}

                        {{--<input type="text" name="batch_id" value=" " class="form-control "/>--}}

                        <select name="batch_id" class="form-control">
                            <option value="0">Please select a batch</option>
                            @foreach($batchs as $batch)
                                <option value="{{$batch->id}}">{{$batch->batchid}}</option>


                                @endforeach
                        </select>

                        {!! Form::label('first_name','First Name') !!}
                        <input type="text" name="first_name" value="" class="form-control""/>

                        {!! Form::label('last_name','Last Name') !!}
                        <input type="text" name="last_name" value="" class="form-control""/>


                        {!! Form::label('email','Email') !!}
                        <input type="text" name="email" value="" class="form-control"/>


                        {!! Form::label('gender','Gender') !!}<br />
                        {{--<input type="text" name="gender" value="" class="form-control"/>--}}
                        Male{!! Form::radio('gender','male') !!}
                        Female{!! Form::radio('gender','female') !!}<br />
                        {!! Form::label('dob','DOB') !!}
                        <input type="text" name="dob" class="form-control"/>

                        {!! Form::label('phone','Phone') !!}
                        <input type="text" name="phone" value="" class="form-control"/>
                        {!! Form::label('file','pic') !!}
                        <input type="file" name="file"/>

                        {!! Form::hidden('name','nn') !!}
                        {!! Form::hidden('role_id','3') !!}
                        {!! Form::hidden('user_id','1') !!}
                        {!! Form::hidden('path','images/path') !!}
                        {!! Form::hidden('password','ss') !!}
                        {!! Form::hidden('id2','1') !!}

                    </div>
                    {!! Form::submit('Add Student',['class'=>'btn btn-info']) !!}

                </div>

                {!! Form::close() !!}
            </div>


        </div>

    </div>
    </div>
@stop