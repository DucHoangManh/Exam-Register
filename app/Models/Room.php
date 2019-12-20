<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
    	'name', 'location_id', 'computer_number'
    ];

    protected $hidden = [];

    public function shifts() {
    	return $this->belongsToMany('App\Models\Shift', 'tests');
    }

    public function location() {
        return $this->belongsTo('App\Models\Location');
    }

    public function tests() {
        return $this->hasMany('App\Models\Test');
    }
}
