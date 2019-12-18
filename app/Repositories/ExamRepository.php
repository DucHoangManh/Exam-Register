<?php

namespace App\Repositories;

use App\Models\Exam;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\ExamInterface;

class ExamRepository extends BaseRepository implements ExamInterface
{
	public function __construct(Exam $exam) {
        parent::__construct($exam);
    }
}