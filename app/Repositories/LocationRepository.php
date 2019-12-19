<?php

namespace App\Repositories;

use App\Models\Location;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\LocationInterface;

class LocationRepository extends BaseRepository implements LocationInterface
{
	public function __construct(Location $location) {
        parent::__construct($location);
    }
}