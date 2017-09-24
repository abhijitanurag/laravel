<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TeacherController extends Controller
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
        $teachers=\App\teacher::all();
      return view('admin.users.teacher.index',compact('teachers'));
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
        session(['path'=>$path,'name'=>$name,'password'=>$name,'role_id'=>'3']);
        \App\user::create($request->all());
        \App\teacher::create($request->all());
        session(['flag'=>'0']);
        $ids=\App\user::where('id','!=','0')->orderBy('id','desc')->first();
        $teachers=\App\teacher::where('id','!=','0')->orderBy('id','desc')->first();

        \App\teacher::where('id','=',$teachers->id)->update(['user_id'=>$ids->id]);

        \App\user::where('id','=',$ids->id)->update(['role_id'=>'2','password'=>bcrypt($teachers->first_name)]);
        return redirect('/teacher');
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
    {$user_id =\App\teacher::find($id)->user_id;
        $teacher=\App\teacher::find($id);
        $user=\App\user::find($user_id);
        return view('admin.users.teacher.edit',compact(['user','teacher']));
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
        $userid=\App\teacher::where('id','=',$id)->first()->user_id;

        $teacher=\App\teacher::find($id);
        $teacher->update($request->all());

        \App\user::find($userid)->update($request->all());

        return redirect('/teacher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userid=\App\teacher::where('id','=',$id)->first()->user_id;
        \App\user::where('id','=',$userid)->delete();
        \App\teacher::where('id','=',$id)->delete();
        return redirect('/teacher');
    }
}
