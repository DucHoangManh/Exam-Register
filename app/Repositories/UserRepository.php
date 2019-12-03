<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Contracts\UserInterface;

abstract class UserRepository implements UserInterface
{
	public function __construct(User $user) {
        parent::__construct($user);
    }
}