<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public $timestamps = false;

    public function exam() {
    	return $this->belongsTo('App\Models\Exam');
    }

    public function subject() {
    	return $this->belongsTo('App\Models\Subject');
    }

    public function classes() {
    	return $this->hasMany('App\Models\ClassSubject');
    }

    public function shifts() {
    	return $this->belongsToMany('App\Models\Shift', 'module_shift');
    }
}
