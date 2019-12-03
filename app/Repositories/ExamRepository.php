<?php

namespace App\Repositories;

use App\Models\Exam;
use App\Repositories\Contracts\ExamInterface;

abstract class ExamRepository implements ExamInterface
{
	public function __construct(Exam $exam) {
        parent::__construct($exam);
    }
}