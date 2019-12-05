<?php

namespace App\Repositories;

use App\Models\Teacher;
use App\Repositories\Contracts\TeacherInterface;

abstract class TeacherRepository implements TeacherInterface
{
	public function __construct(Teacher $teacher) {
        parent::__construct($teacher);
    }
}