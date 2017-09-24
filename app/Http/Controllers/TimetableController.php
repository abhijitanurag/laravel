<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

class TimetableController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','IsAdmin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batchs=\App\batch::all();
        return view('admin.timetable.index',compact('batchs'));
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
\DB::Update('Update batches set hastimetable="1" where id =?',[$request->batch_id]);
////
  //      if($test) {
            $GLOBALS['i'] = 0;

            foreach ($request->all() as $dd) {

                $arr[$GLOBALS['i']] = $dd;


                if (($arr[$GLOBALS['i']] == 'tue') || ($arr[$GLOBALS['i']] == 'wed') || ($arr[$GLOBALS['i']] == 'thu') || ($arr[$GLOBALS['i']] == 'fri') || ($GLOBALS['i'] == 41)) {

                    if ($GLOBALS['i'] == 41)
                        $GLOBALS['i'] = $GLOBALS['i'] + 1;
                    $lec7 = $arr[$GLOBALS['i'] - 1];
                    $lec6 = $arr[$GLOBALS['i'] - 2];
                    $lec5 = $arr[$GLOBALS['i'] - 3];
                    $lec4 = $arr[$GLOBALS['i'] - 4];
                    $lec3 = $arr[$GLOBALS['i'] - 5];
                    $lec2 = $arr[$GLOBALS['i'] - 6];
                    $lec1 = $arr[$GLOBALS['i'] - 7];
                    $day = $arr[$GLOBALS['i'] - 8];
                    \App\timetable::create(['batch_id' => $request->batch_id, 'day' => $day, 'lec1' => $lec1, 'lec2' => $lec2, 'lec3' => $lec3, 'lec4' => $lec4, 'lec5' => $lec5, 'lec6' => $lec6, 'lec7' => $lec7]);
                }
                $GLOBALS['i'] = $GLOBALS['i'] + 1;
            }
            return redirect('/batch');
    //    }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $day=['0'=>'mon','1'=>'tue','2'=>'wed','3'=>'thu','4'=>'fri'];
        $timetable=\App\timetable::where('batch_id','=',$id)->get();
       $teacher=\App\subject::where('batch_id','=',$id)->get();


        if(count($timetable)){
            $pt='timetable/'.$id.'/edit';
            return redirect($pt);

        }
        
        return view('admin.timetable.show',compact('id','day','tt','teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $timetable=\App\timetable::where('batch_id','=',$id)->orderBy('id','asc')->get();
        return view('admin.timetable.index',compact('timetable'));
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
