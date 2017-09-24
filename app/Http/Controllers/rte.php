<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class rte extends Controller
{
   public function index(){
       if(Auth::user()->role_id==1){
           return view('admin');
       }else if(Auth::user()->role_id==2){
           return view('teacher');
       }
       else{
           return view('student');
       }
   }
}
