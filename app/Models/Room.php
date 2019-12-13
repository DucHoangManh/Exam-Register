<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
    	'name', 'location_id'
    ];

    protected $hidden = [];

    public function shift() {
    	return $this->belongsToMany('App\Models\Shift', 'shift_room', 'room_id', 'shift_id');
    }

    public function location() {
        return $this->belongsTo('App\Models\Location');
    }
}
