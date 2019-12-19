<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
    	'name', 'credit', 'code'
    ];

    protected $hidden = [];

    public function exams() {
    	return $this->belongsToMany('App\Models\Exam', 'modules');
    }

    public function modules() {
        return $this->hasMany('App\Models\Modules');
    }
}
