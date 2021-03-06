@extends('layouts.studentlayout')
<h2> Student Details</h2>

@section('body')
<div class="container">

    <div class="row">
        <div class="col-md-2">
            <h3>Batch Id</h3>
        </div>
        <div class="col-md-2">
            <h4>
                {{$student->batch_id}}
            </h4>
        </div>
    </div>



    <div class="row">
        <div class="col-md-2">
            <h3>First Name</h3>
        </div>
        <div class="col-md-2">
            <h4>
                {{$student->first_name}}
            </h4>
        </div>
    </div>


    <div class="row">
        <div class="col-md-2">
            <h3>Last Name</h3>
        </div>
        <div class="col-md-2">
            <h4>
                {{$student->last_name}}
            </h4>
        </div>
    </div>



    <div class="row">
        <div class="col-md-2">
            <h3>Email</h3>
        </div>
        <div class="col-md-2">
            <h4>
                {{$user->email}}
            </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <h3>Gender</h3>
        </div>
        <div class="col-md-2">
            <h4>
                {{$student->gender}}
            </h4>
        </div>
    </div>


    <div class="row">
        <div class="col-md-2">
            <h3>Phone</h3>
        </div>
        <div class="col-md-2">
            <h4>
                {{$student->phone}}
            </h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <h3>Dob</h3>
        </div>
        <div class="col-md-2">
            <h4>
                {{$student->dob}}
            </h4>
        </div>
    </div>

</div>
@stop