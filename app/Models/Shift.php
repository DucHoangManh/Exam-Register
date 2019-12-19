<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $fillable = [
    	'date', 'start', 'end', 'code'
    ];

    protected $hidden = [];

    public function modules() {
        return $this->belongsToMany('App\Models\Module', 'module_shift');
    }

    public function rooms() {
    	return $this->belongsToMany('App\Models\Room', 'tests');
    }

    public function tests() {
        return $this->hasMany('App\Models\Test');
    }
}
