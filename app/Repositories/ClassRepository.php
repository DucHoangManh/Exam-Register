<?php

namespace App\Repositories;

use App\Models\ClassSubject;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\ClassInterface;

class ClassRepository extends BaseRepository implements ClassInterface {
	public function __construct(ClassSubject $class) {
        parent::__construct($class);
    }
}