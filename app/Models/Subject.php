<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
    	'name', 'credit'
    ];

    protected $hidden = [];

    public function exam() {
    	return $this->belongsTo('App\Models\Exam');
    }

    public function class() {
    	return $this->hasMany('App\Models\ClassSubject');
    }
}
