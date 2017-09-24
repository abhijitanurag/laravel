<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
   protected $fillable=['teacher_id','batch_id','sub_id','sub_name'];
}
