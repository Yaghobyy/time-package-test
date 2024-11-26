<?php

namespace Yaghob\Time\Controllers;

class TimeController{

    public function time(){
        $timezone = config('tconfig.tehran');
        $time =  \Illuminate\Support\Carbon::now()->setTimezone($timezone);
        return view('tview::time',compact('time'));
    }
}
