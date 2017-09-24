<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class TeacherTimeTable extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','Teacher']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $user=Auth::user();
        $id=$user->id;

        $tch=\App\teacher::where('user_id','=',$id)->get();
        foreach ($tch as $teacher) {
            $tchid=$teacher->id;
        }


        $timetable=\App\timetable::where('lec1','=',$tchid)->orWhere('lec2','=',$tchid)->orWhere('lec3','=',$tchid)->orWhere('lec4','=',$tchid)->orWhere('lec5','=',$tchid)->orWhere('lec6','=',$tchid)->orWhere('lec7','=',$tchid)->get(['lec1','lec2','lec3','lec4','lec5','lec6','lec7','day','batch_id',]);
        foreach($timetable as $table) {
            if ($table->day != '') {
                $tchtables[$table->day]['day'] = $table->day;
            }
            if ($table->lec1 != '') {
                $tchtables[$table->day]['lec1'] = $table->batch_id;
            }
            if ($table->lec2 != '') {
                $tchtables[$table->day]['lec2'] = $table->batch_id;
            }
            if ($table->lec3 != '')
            {
                $tchtables[$table->day]['lec3'] = $table->batch_id;
            }
            if ($table->lec4 != '')
            {
                $tchtables[$table->day]['lec4'] = $table->batch_id;
            }
            if ($table->lec5 != '')
            {
                $tchtables[$table->day]['lec5'] = $table->batch_id;
        }
            if ($table->lec6 != '')
            {
                $tchtables[$table->day]['lec6'] = $table->batch_id;
        }
            if ($table->lec7 != '')
            {       $tchtables[$table->day]['lec7'] = $table->batch_id;
        }
            
        }


        return view('teacher.timetable.index',compact('tchtables'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
