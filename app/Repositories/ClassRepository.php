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
}