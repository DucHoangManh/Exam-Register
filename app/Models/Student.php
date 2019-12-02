<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
    	'name', 'code', 'gender', 'birthday'
    ];

    protected $hidden = [

    ];

    public function class() {
    	return $this->belongsToMany('App\Models\Class', 'student_class', 'student_id', 'class_id');
    }

    public function room() {
    	return $this->belongsToMany('App\Models\Room', 'student_room', 'student_id', 'room_id');
    }

    public function shift() {
    	return $this->belongsToMany('App\Models\Shift', 'student_shift', 'student_id', 'shift_id');
    }
}
