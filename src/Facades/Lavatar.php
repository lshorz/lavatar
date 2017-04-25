<?php

namespace Lshorz\Lavatar\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Created by PhpStorm.
 * User: LSH
 * Date: 2017-4-24
 * Time: 15:41
 */
class Lavatar extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Lavatar';
    }
}