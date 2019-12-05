<?php

namespace App\Repositories;

use App\Models\Shift;
use App\Repositories\Contracts\ShiftInterface;

abstract class ShifttRepository implements ShiftInterface
{
	public function __construct(Shift $shift) {
        parent::__construct($shift);
    }
}