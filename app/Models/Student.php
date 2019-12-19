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
    	return $this->belongsToMany('App\Models\ClassSubject', 'student_class', 'student_id', 'class_id')->withPivot('is_baned');;
    }

    public function shift() {
    	return $this->belongsToMany('App\Models\Shift', 'student_shift', 'student_id', 'shift_id');
    }

    public function user() {
        return $this->hasOne('App\Models\User', 'username', 'code');
    }
}
