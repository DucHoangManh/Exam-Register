<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    public $table = 'exams';
    protected $fillable = [
    	'type', 'school_year', 'deadline'
    ];

    protected $hidden = [];

    public function subjects() {
    	return $this->belongsToMany('App\Models\Subject', 'modules');
    }

    public function modules() {
    	return $this->hasMany('App\Models\Module');
    }
}
