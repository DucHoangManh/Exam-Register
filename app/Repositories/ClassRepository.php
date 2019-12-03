<?php

namespace App\Repositories;

use App\Models\Class;
use App\Repositories\Contracts\ClassInterface;

abstract class ClassRepository implements ClassInterface {
	public function __construct(Class $class) {
        parent::__construct($class);
    }
}