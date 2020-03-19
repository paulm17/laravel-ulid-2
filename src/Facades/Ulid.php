<?php
namespace Paulm17\Ulid\Facades;

use Illuminate\Support\Facades\Facade;

class Ulid extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Paulm17\Ulid\Ulid::class;
    }
}
