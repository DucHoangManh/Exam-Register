<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassSubject extends Model
{
    protected $table = "classes";
    protected $fillable = [
    	'code', 'teacher_id', 'subject_id'
    ];

    protected $hidden = [];

    public function shift() {
        return $this->hasMany('App\Models\Shift', 'class_id');
    }

    public function teacher() {
    	return $this->belongsTo('App\Models\Teacher', 'teacher_id');
    }

    public function subject() {
    	return $this->belongsTo('App\Models\Subject', 'subject_id');
    }

    public function student() {
    	return $this->belongsToMany('App\Models\Student', 'student_class', 'class_id', 'student_id')->withPivot('is_baned');;
    }
}
