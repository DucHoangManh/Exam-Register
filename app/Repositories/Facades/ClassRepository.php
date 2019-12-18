<?php

namespace App\Repositories\Facades;

use Illuminate\Support\Facades\Facade;

class ClassRepository extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'App\\Repositories\\Contracts\\ClassInterface';
    }
}