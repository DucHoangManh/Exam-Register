<?php

namespace App\Repositories;

use App\Models\Subject;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\SubjectInterface;

class SubjectRepository extends BaseRepository implements SubjectInterface
{
	public function __construct(Subject $subject) {
        parent::__construct($subject);
    }
}