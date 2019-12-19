<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\UserInterface;

class UserRepository extends BaseRepository implements UserInterface
{
	public function __construct(User $user) {
        parent::__construct($user);
    }
}