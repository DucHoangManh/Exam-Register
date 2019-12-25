<?php

namespace App\Repositories;

use App\Models\Test;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\TestInterface;

class TestRepository extends BaseRepository implements TestInterface
{
	public function __construct(Test $test) {
        parent::__construct($test);
    }

    public function status($id) {
        $test = Test::findOrFail($id);
        $studentCount = $test->students->count();
        $limit = $test->room->computer_quantity;
        return (double)$studentCount/$limit;
    }

    public function isFull($id) {
        $test = Test::findOrFail($id);
        return ($this->status($id) >= 1) ? true : false;
    } 

    public function studentCount($id) {
        $test = Test::findOrFail($id);
        return $test->students->count();
    }
}