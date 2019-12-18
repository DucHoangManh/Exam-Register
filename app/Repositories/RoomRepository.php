<?php

namespace App\Repositories;

use App\Models\Room;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\RoomInterface;

class RoomRepository extends BaseRepository implements RoomInterface
{
	public function __construct(Room $room) {
        parent::__construct($room);
    }
}