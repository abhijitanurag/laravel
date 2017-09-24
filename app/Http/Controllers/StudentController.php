<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StudentController extends Controller
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

        $students =\App\student::all();
        return view('admin.users.student.index',compact(['students','batchs']));
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
            $this->validate($request,[
                'batch_id'=>'required|alpha_num',
                'first_name'=>'required|alpha',
                'last_name'=>'required|alpha',
                'phone'=>'required|digits:10',
                'email'=>'required|email|unique:users',
                'dob'=>'required|date',
                'gender'=>'required|alpha',
                'file'=>'required|image|max:5096'
            ]);
//
        $file=$request->file('file');

        $name=$file->getClientOriginalName();
        $file->move('images',$name);
        $path='images/'.$name;
        session(['flag'=>'1']);
        $name=$request->input('first_name');
        session(['path'=>$path,'name'=>$name,'password'=>$name,'roleid'=>'3']);
        \App\user::create($request->all());
        \App\student::create($request->all());
        session(['flag'=>'0']);
        $ids=\App\user::where('id','!=','0')->orderBy('id','desc')->first();
        $students=\App\student::where('id','!=','0')->orderBy('id','desc')->first();

        \App\student::where('id','=',$students->id)->update(['user_id'=>$ids->id]);
        \App\user::where('id','=',$ids->id)->update(['role_id'=>'3','password'=>bcrypt($students->first_name)]);
        return redirect('/student');
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
       $user_id =\App\student::find($id)->user_id;
        $student=\App\student::find($id);
        $user=\App\user::find($user_id);
        return view('admin.users.student.edit',compact(['user','student']));
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
        $userid=\App\student::where('id','=',$id)->first()->user_id;

        $student=\App\student::find($id);
        $student->update($request->all());

        \App\user::find($userid)->update($request->all());

        return redirect('/student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userid=\App\student::where('id','=',$id)->first()->user_id;
        \App\user::where('id','=',$userid)->delete();
        \App\student::where('id','=',$id)->delete();
        return redirect('/student');
    }
}
