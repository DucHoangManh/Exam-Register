<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Student;
use App\Models\Location;

class SearchController extends Controller
{
    public function teacher() {
    	$name = request('name');
    	$teacher = Teacher::where('name', 'LIKE', '%'.$name.'%')->get();
    	return $teacher->toJson();
    }

    public function subject() {
    	$name = request('name');
    	$subject = Subject::where('name', 'LIKE', '%'.$name.'%')->get();
    	return $subject->toJson();
    }

    public function student() {
    	$name = request('name');
    	$student = Student::where('name', 'LIKE', '%'.$name.'%')->get();
    	return $student->toJson();
    }
    public function location() {
        $name = request('name');
        $location = Location::where('name', 'LIKE', '%'.$name.'%')->get();
        return $location->toJson();
    }
}
