<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class TeacherAttendence extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user();
        $teachers=\App\teacher::where('user_id','=',$user->id)->get();
        foreach($teachers as $teacher){
            $id1=$teacher->id;

        }
        $subjects=\App\subject::where('teacher_id','=',$id1)->get();

        return view('teacher.attendence.index',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $batch_id= $request->batch_id;
        $sub_id= $request->sub_id;
        $i=0;
        foreach($request->all() as $col){
            $arr[$i]=$col;
            if(($arr[$i]=='p')||($arr[$i]=='a')){
                if($arr[$i]=='p'){
                    \App\attendence::create(['batch_id'=>$batch_id,'sub_id'=>$sub_id,'stud_id'=>$arr[$i-1],'present'=>'1']);
                }
                else{
                    \App\attendence::create(['batch_id'=>$batch_id,'sub_id'=>$sub_id,'stud_id'=>$arr[$i-1],'present'=>'0']);
                }
            }
            $i++;

        }
        return redirect('/');

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
        $id1= $request->id;

        $subject=\App\subject::find($id1);
        $students=\App\student::where('batch_id','=',$subject->batch_id)->get();

        return view('teacher.attendence.show',compact('subject','students'));

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
