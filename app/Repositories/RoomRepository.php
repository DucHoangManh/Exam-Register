<?php

namespace App\Repositories;

use App\Models\Room;
use App\Repositories\Contracts\RoomInterface;

abstract class RoomRepository implements RoomInterface
{
	public function __construct(Room $room) {
        parent::__construct($room);
    }
}