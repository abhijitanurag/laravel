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
                <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal"> <span class=" glyphicon glyphicon-plus"></span> Add teacher</button>
            </div> </div>
    </div>
    @if(count($teachers))
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <h3>Id</h3>

                </div>
                <div class="col-md-1"> </div>
                <div class="col-md-1">  <h3>First name</h3></div>
                <div class="col-md-1">  <h3>Last name</h3></div>

                <div class="col-md-1">  <h3>DOB </h3></div>
                <div class="col-md-1">  <h3>Gender </h3></div>
                <div class="col-md-2">  <h3>Phone </h3></div>



            </div>
            <hr>
            @foreach($teachers as $teacher)
                <div class="row">
                    <div class="col-md-1">
                        <h4>{{$teacher->id}}</h4>
                    </div>

                    <div class="col-md-1"><img src="{{asset($teacher->path)}}" height="60px" width="70px"></div>
                    <div class="col-md-1">  <h4> {{$teacher->first_name}}</h4></div>
                    <div class="col-md-1">  <h4>{{$teacher->last_name}}</h4></div>

                    <div class="col-md-1">  <h4>{{$teacher->dob}} </h4></div>
                    <div class="col-md-1">  <h4>{{$teacher->gender}} </h4></div>
                    <div class="col-md-2">  <h4>{{$teacher->phone}} </h4></div>
                    <div class="col-md-1">
                        <a href="{{route('teacher.edit',$teacher->id)}}"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>

                    </div>
                    <div class="col-md-1">  {!! Form::model($teacher,['method'=>'delete','action'=>['TeacherController@destroy',$teacher->id]]) !!}
                        <div class="row">
                            <div class="col-md-10"></div>
                            {!! Form::submit('delete record',['class'=>'btn btn-primary']) !!}</div>

                        {!! form::close() !!}</div>
                </div>


            @endforeach

        </div>
    @else
        <h2>Please Add teachers</h2>


    @endif


    {{--<!-- Modal -->--}}
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">Add New teacher </h4>
                </div>
                <div class="form-group">
                    <div class="modal-body">
                        {!! Form::open(['method'=>'post','action'=>'TeacherController@store','files'=>'true']) !!}






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
                        <input type="text" name="dob" value="" class="form-control"/>

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
                    {!! Form::submit('Add teacher',['class'=>'btn btn-info']) !!}

                </div>

                {!! Form::close() !!}
            </div>


        </div>

    </div>
    </div>
@stop