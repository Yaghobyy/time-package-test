<?php

use Illuminate\Support\Facades\Route;

Route::get('/time',[\Yaghob\Time\Controllers\TimeController::class,'time'])->middleware('checktime');

Route::get('/test',function (){
//   $timer = new \Yaghob\Time\Facade\Timer();
//   return $timer->aMinuteAgo();
//    return app('timer')->onHourAgo();
    return \Yaghob\Time\Facade\TimerFacade::onHourAgo();
});
