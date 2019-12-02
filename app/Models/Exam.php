<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
    	'name', 'start_date', 'end_date'
    ];

    protected $hidden = [];

    public function subject() {
    	return $this->belongsToMany('App\Models\Subject', 'exam_subject', 'exam_id', 'subject_id');
    }
}
