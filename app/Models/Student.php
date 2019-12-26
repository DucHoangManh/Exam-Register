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

    public function classes() {
    	return $this->belongsToMany('App\Models\ClassSubject', 'student_class', 'student_id', 'class_id')->withPivot('is_baned');
    }

    public function tests() {
    	return $this->belongsToMany('App\Models\Test', 'student_class')->withPivot('id_number');;
    }

    public function user() {
        return $this->hasOne('App\Models\User', 'username', 'code');
    }

    public function registers() {
        return $this->hasMany('App\Models\Register');
    }
}
