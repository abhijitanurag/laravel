<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable=['first_name','last_name','phone','batch_id','batch_id','dob','gender','user_id','path'];
public function setPathAttribute($value){
    if(session('flag')==1){

        return $this->attributes['path']=session('path');
    }
}
   
    public function user(){
        return $this->belongsTo('App\user');
    }
}
