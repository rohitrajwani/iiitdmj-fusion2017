<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supervisor extends Model
{
     protected $table ='supervisor';
    protected $primaryKey = 'student_id';
    public $incrementing = false;
}
