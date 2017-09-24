@extends('layouts.teacherlayout')
@section('body')
    <h2>Time Table</h2>

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
        @foreach($tchtables as $table)
            <div class="row">
                <div class="col-md-1">
                    {{ $table['day'] }}
                </div>
                <div class="col-md-1">
                    {{ $table['lec1'] }}
                </div>
                <div class="col-md-1">
                    {{ $table['lec2'] }}
                </div>                <div class="col-md-1">
                    {{ $table['lec3'] }}
                </div>                <div class="col-md-1">
                    {{ $table['lec4'] }}
                </div>                <div class="col-md-1">
                    {{ $table['lec5'] }}
                </div>                <div class="col-md-1">
                    {{ $table['lec6'] }}
                </div>                <div class="col-md-1">
                    {{ $table['lec7'] }}
                </div>


            </div>


            @endforeach



    </div>
@stop