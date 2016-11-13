<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'vh_rooms';
    protected $primaryKey = 'room_no';
    public $incrementing = false;
}
