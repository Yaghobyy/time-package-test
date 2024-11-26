<?php

namespace Yaghob\Time\Facade;

use Illuminate\Support\Carbon;

class Timer{

    public $time;

    public function __construct()
    {
        $this->time = Carbon::now()->setTimezone('Asia/Tehran');
    }

    public function onHourAgo()
    {
        return $this->time->subHour()->toTimeString();
    }

    public function aMinuteAgo(){
        return $this->time->subMinute()->toTimeString();
    }
}
