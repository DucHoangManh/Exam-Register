<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public $timestamps = false;
    
    public function shift() {
    	return $this->belongsTo('App\Models\Shift');
    }

    public function room() {
    	return $this->belongsTo('App\Models\Room');
    }

    public function students() {
    	return $this->belongsToMany('App\Models\Student', 'student_test');
    }

    public function class() {
        return $this->belongsTo('App\Models\ClassSubject', 'class_id');
    }
}
