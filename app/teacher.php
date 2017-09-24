<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    protected $fillable=['first_name','last_name','phone','dob','gender','user_id','path'];
    public function setPathAttribute($value){
        if(session('flag')==1){

            return $this->attributes['path']=session('path');
        }
    }
//    public function setId2Attribute($value){
//        if(session('flag')==1){
//
//
//            return $this->attributes['id2']=session('user_id');
//        }
   // }

}
