@extends('layouts.studentlayout')
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
    <h2>Your attendance Is:</h2>
            </div>
            <div class="col-md-1"><h2>{{$k}}%</h2></div>
        </div>
    </div>
    @stop