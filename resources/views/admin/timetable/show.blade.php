@extends('layouts.adminlayout')
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-1">
                <h4>Day</h4>
            </div>

            <div class="col-md-1">
                <h4>Lecture1</h4>
            </div>
            <div class="col-md-1">
                <h4>Lecture2</h4>
            </div>
            <div class="col-md-1">
                <h4>Lecture3</h4>
            </div>
            <div class="col-md-1">
                <h4>Lecture4</h4>
            </div>
            <div class="col-md-1">
                <h4>Lecture5</h4>
            </div>
            <div class="col-md-1">
                <h4>Lecture6</h4>
            </div>
            <div class="col-md-1">
                <h4>Lecture7</h4>
            </div>
        </div>
        <hr>


<div class="form-group">
    {!! Form::open(['method'=>'POST','action'=>'TimetableController@store']) !!}
<input type="hidden" name="batch_id" value="{{$id}}">
    @for($i=0;$i<5;$i++)
    <div class="row">
        <div class="col-md-1">
            <h4>
                {{$day[$i]}}
            </h4>



        </div>
        <input type="hidden" name="{{$day[$i]}}_day" value="{{$day[$i]}}" />

        <div class="col-md-1">
            <select  name="{{$day[$i]}}_lec1" class="form-control">
                @foreach($teacher as $tch)
                    <?php $tmt=\App\timetable::where('day','=',$day[$i])->where('lec1','=',$tch->teacher_id)->get();
                    if(count($tmt)==0){?>

                    <option value="{{$tch->teacher_id}}">{{$tch->teacher_id}}</option>
                   <?php } ?>
                @endforeach
            </select>
        </div>

        <div class="col-md-1">
            <select  name="{{$day[$i]}}_lec2" class="form-control">
                @foreach($teacher as $tch)
                    <?php $tmt=\App\timetable::where('day','=',$day[$i])->where('lec1','=',$tch->teacher_id)->get();
                    if(count($tmt)==0){?>
                    <option value="{{$tch->teacher_id}}">{{$tch->teacher_id}}</option>
                    <?php } ?>
                @endforeach
            </select>
        </div>
        <div class="col-md-1">
            <select  name="{{$day[$i]}}_lec3" class="form-control">
                @foreach($teacher as $tch)
                    <?php $tmt=\App\timetable::where('day','=',$day[$i])->where('lec1','=',$tch->teacher_id)->get();
                    if(count($tmt)==0){?>
                    <option value="{{$tch->teacher_id}}">{{$tch->teacher_id}}</option>
                    <?php } ?>
                @endforeach
            </select>
        </div>


        <div class="col-md-1">
            <select  name="{{$day[$i]}}_lec4" class="form-control">
                @foreach($teacher as $tch)
                    <?php $tmt=\App\timetable::where('day','=',$day[$i])->where('lec1','=',$tch->teacher_id)->get();
                    if(count($tmt)==0){?>
                    <option value="{{$tch->teacher_id}}">{{$tch->teacher_id}}</option>
                    <?php } ?>
                @endforeach
            </select>
        </div>


        <div class="col-md-1">
            <select  name="{{$day[$i]}}_lec5" class="form-control">
                @foreach($teacher as $tch)
                    <?php $tmt=\App\timetable::where('day','=',$day[$i])->where('lec1','=',$tch->teacher_id)->get();
                    if(count($tmt)==0){?>
                    <option value="{{$tch->teacher_id}}">{{$tch->teacher_id}}</option>
                    <?php } ?>
                @endforeach
            </select>
        </div>

        <div class="col-md-1">
            <select  name="{{$day[$i]}}_lec6" class="form-control">
                @foreach($teacher as $tch)
                    <?php $tmt=\App\timetable::where('day','=',$day[$i])->where('lec1','=',$tch->teacher_id)->get();
                    if(count($tmt)==0){?>
                    <option value="{{$tch->teacher_id}}">{{$tch->teacher_id}}</option>
                    <?php } ?>
                @endforeach
            </select>
        </div>


        <div class="col-md-1">
            <select  name="{{$day[$i]}}_lec7" class="form-control">
                @foreach($teacher as $tch)
                    <?php $tmt=\App\timetable::where('day','=',$day[$i])->where('lec1','=',$tch->teacher_id)->get();
                    if(count($tmt)==0){?>
                    <option value="{{$tch->teacher_id}}">{{$tch->teacher_id}}</option>
                    <?php } ?>
                @endforeach
            </select>
        </div>

    </div>
    @endfor

    {!! Form::submit('Create Timetable',['class'=>'btn btn-info']) !!}


    {!! Form::close()!!}




</div>
    </div>
    {{--<div class="form-group">--}}
        {{--{!! Form::open(['method'=>'Post','action'=>'TimetableController@store']) !!}--}}
        {{--{!! Form::label('batch_id','Please select the batch') !!}--}}
        {{--<select name="batch_id" class="form-control">--}}
            {{--<option value="0">Please select a batch</option>--}}
            {{--@foreach($batchs as $batch)--}}
                {{--<option value="{{$batch->id}}">{{$batch->batchid}}</option>--}}
                {{--session--}}

            {{--@endforeach--}}
        {{--</select>--}}
        {{--{!! Form::submit('select',['class'=>'btn btn-info']) !!}--}}
        {{--{!! Form::close() !!}--}}
    {{--</div>--}}
@stop
