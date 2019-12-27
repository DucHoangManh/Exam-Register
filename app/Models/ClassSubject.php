<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\Facades\ClassRepository;

class ClassSubject extends Model
{
    protected $table = "classes";
    protected $fillable = [
    	'code', 'teacher_id', 'module_id'
    ];

    protected $hidden = [];

    public function teacher() {
    	return $this->belongsTo('App\Models\Teacher');
    }

    public function module() {
    	return $this->belongsTo('App\Models\Module');
    }

    public function students() {
    	return $this->belongsToMany('App\Models\Student', 'student_class', 'class_id', 'student_id')->withPivot('is_baned');
    }

    public function tests() {
        return $this->hasMany('App\Models\Test', 'class_id');
    }

    public function register() {
        return $this->hasMany('App\Models\Register', 'class_id');
    }

    public function registerStatus() {
        return ClassRepository::registerStatus($this->id);
    }
}
