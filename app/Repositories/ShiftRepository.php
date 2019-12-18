<?php

namespace App\Repositories;

use App\Models\Shift;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\ShiftInterface;

class ShifttRepository extends BaseRepository implements ShiftInterface
{
	public function __construct(Shift $shift) {
        parent::__construct($shift);
    }
}