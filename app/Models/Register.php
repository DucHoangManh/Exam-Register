<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = "student_class";

    protected $fillable = [
    	'name'
    ];

    public function test() {
    	return $this->belongsTo('App\Models\Test');
    }
}
