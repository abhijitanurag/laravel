<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class timetable extends Model
{
    protected $fillable=['batch_id','day','lec1','lec2','lec3','lec4','lec5','lec6','lec7'];
}
