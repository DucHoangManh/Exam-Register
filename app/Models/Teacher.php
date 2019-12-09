<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
    	'name', 'email'
    ];

    protected $hidden = [];

    public function class() {
    	return $this->hasMany('App\Models\ClassSubject');
    }
}
