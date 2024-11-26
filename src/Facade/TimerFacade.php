<?php

namespace Yaghob\Time\Facade;

use Illuminate\Support\Facades\Facade;

class TimerFacade extends Facade
{

    /*
     * static onHourAgo() : string;
     */




    protected static function getFacadeAccessor()
    {
        return 'timer';
    }
}
