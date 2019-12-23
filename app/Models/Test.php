<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\Facades\TestRepository;

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
    	return $this->belongsToMany('App\Models\Student', 'student_class');
    }

    public function class() {
        return $this->belongsTo('App\Models\ClassSubject', 'class_id');
    }

    public function registers() {
        return $this->hasMany('App\Models\Register');
    }

    public function isFull() {
        return TestRepository::isFull($this->id);
    }

    public function status() {
        return TestRepository::status($this->id);
    }
}
