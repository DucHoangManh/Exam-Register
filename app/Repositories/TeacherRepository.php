<?php

namespace App\Repositories;

use App\Models\Teacher;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\TeacherInterface;

class TeacherRepository extends BaseRepository implements TeacherInterface
{
	public function __construct(Teacher $teacher) {
        parent::__construct($teacher);
    }
}