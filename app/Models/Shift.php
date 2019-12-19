<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $fillable = [
    	'date', 'start', 'end', 'code'
    ];

    protected $hidden = [];

    public function class() {
        return $this->belongsTo('App\Models\ClassSubject');
    }

    public function student() {
    	return $this->belongsToMany('App\Models\Student', 'student_shift', 'shift_id', 'student_id');
    }

    public function room() {
    	return $this->belongsToMany('App\Models\Room', 'shift_room', 'shift_id', 'room_id');
    }
}
