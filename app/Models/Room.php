<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
    	'name', 'code'
    ];

    protected $hidden = [];

    public function student() {
    	return $this->belongsToMany('App\Models\Student', 'student_room', 'room_id', 'student_id');
    }

    public function shift() {
    	return $this->belongsToMany('App\Models\Shift', 'shift_room', 'room_id', 'shift_id');
    }
}
