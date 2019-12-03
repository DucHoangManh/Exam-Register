<?php

namespace App\Repositories;

use App\Models\Subject;
use App\Repositories\Contracts\SubjectInterface;

abstract class SubjectRepository implements SubjectInterface
{
	public function __construct(Subject $subject) {
        parent::__construct($subject);
    }
}