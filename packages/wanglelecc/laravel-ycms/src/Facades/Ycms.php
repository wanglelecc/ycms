<?php

namespace Wanglelecc\Ycms\Facades;

use Illuminate\Support\Facades\Facade;

class Ycms extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Wanglelecc\Ycms\Ycms::class;
    }
}
