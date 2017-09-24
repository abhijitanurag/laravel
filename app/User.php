<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setNameAttribute($value){
        if(session('flag')==1){

            return $this->attributes['name']=session('name');
        }
        return $this->attributes['name']=$value;
    }

    public function setPasswordAttribute($value){
        if(session('flag')==1){

            return $this->attributes['password']=bcrypt(session('password'));
        }
        return $this->attributes['password']=$value;
        ;
    }
    public function role(){
        return $this->belongsTo('App\role');
    }
    public function isAdmin(){
        if($this->role->name=='admin'){
            return true;

        }
        return false;
    }
    public function isTeacher(){
        if($this->role->name=='teacher'){
            return true;

        }
        return false;
    }
    public function isStudent(){
        if($this->role->name=='student'){
            return true;

        }
        return false;
    }
    
}
