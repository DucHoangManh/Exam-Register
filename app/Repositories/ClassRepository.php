<?php

namespace App\Repositories;

use App\Models\ClassSubject;
use App\Models\Module;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\ClassInterface;

class ClassRepository extends BaseRepository implements ClassInterface {
	public function __construct(ClassSubject $class) {
        parent::__construct($class);
    }

    public function findByExam($id) {
    	$modules = Module::where('exam_id', '=', $id)->get();
        $classes = ClassSubject::whereIn('module_id', $modules->pluck('id')->all())->get();
        return $classes;
    }

    public function findByExamPaginate($id, $limit) {
    	$modules = Module::where('exam_id', '=', $id)->get();
        $classes = ClassSubject::whereIn('module_id', $modules->pluck('id')->all())->paginate($limit);
        return $classes;
    }

    public function registerStatus($id) {
        $class = ClassSubject::findOrFail($id);
        $testCount = $class->tests->count();
        $registerStatus = 0;
        foreach($class->tests as $test) {
            $registerStatus += $test->status();
        }
        return ($testCount == 0) ? 0 : (double)$registerStatus/$testCount;
    }

    public function getTestsJson($id) {
        $class = ClassSubject::findOrFail($id);
        $tests = collect([]);
        foreach($class->tests as $test) {
            $arr = [
                'Thu' => 'Chua lam',
                'date' => $test->shift->date,
                'start' => $test->shift->start.' - '.$test->shift->end,
                'shift' => $test->shift->code,
                'room' => $test->room->name,
                'location' => $test->room->location->name
            ];
            $tests->push($arr);
        }
        return $tests->toJson();
    }
}