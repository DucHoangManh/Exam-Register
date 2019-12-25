<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = "student_class";

    public $timestamps = false;

    public function test() {
    	return $this->belongsTo('App\Models\Test');
    }

    public function student() {
    	return $this->belongsTo('App\Models\Student');
    }

    public function class() {
    	return $this->belongsTo('App\Models\ClassSubject');
    }
}
