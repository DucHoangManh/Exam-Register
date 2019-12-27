<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Student;
use App\Models\Location;
use App\Models\ClassSubject;
use App\Models\Room;
use App\Models\Shift;
use App\Models\User;

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

    public function user() {
        $username = request('username');
        $user = User::where('username', 'like', '%'.$username.'%')->get();
        return $user->toJson();
    }

    public function class() {
        $code = request('code');
        $class = ClassSubject::where('code', 'like', '%'.$code.'%')->get();
        return $class->toJson();
    }

    public function room() {
        $name = request('name');
        $room = Room::where('name', 'like', '%'.$name.'%')->get();
        $room->each(function($room) {
            $room->location = $room->location->name;
        });
        // dd($room);
        return $room->toJson();
    }

    public function shift() {
        $code = request('code');
        $shift = Shift::where('code', 'like', '%'.$code.'%')->get();
        return $shift->toJson();
    }
}
