<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class SearchController extends Controller
{
    public function teacher() {
    	$name = request('name');
    	$teacher = Teacher::where('name', 'LIKE', '%'.$name.'%')->get();
    	return $teacher->toJson();
    }
}
