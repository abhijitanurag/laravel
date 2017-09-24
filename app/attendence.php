<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attendence extends Model
{
    protected $fillable=['batch_id','present','stud_id','sub_id'];
}
