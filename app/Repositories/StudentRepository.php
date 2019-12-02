<?php

namespace App\Repositories;

use App\Models\Student;
use App\Repositories\Contracts\StudentInterface;

abstract class StudentRepository extends BaseRepository implements StudentInterface
{
	public function __construct(Student $student) {
        parent::__construct($student);
    }

	public function findByName($name) {
		return $this->model->where('name', $name)->first();
	}

	public function findByCode($code) {
		return $this->model->where('code', $code)->first();
	}
}