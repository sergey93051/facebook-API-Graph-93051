<?php

namespace Fbvendor\Grathapi\Facades;

use Illuminate\Support\Facades\Facade;


class Fb extends Facade
{

    protected  static function getFacadeAccessor()
    {
        return "Fb";
    }
}
