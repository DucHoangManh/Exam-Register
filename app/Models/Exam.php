<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
    	'name', 'start_date', 'end_date'
    ];

    protected $hidden = [];

    public function subjects() {
    	return $this->belongsToMany('App\Models\Subject', 'modules');
    }

    public function modules() {
    	return $this->hasMany('App\Models\Module');
    }
}
