<?php

namespace Yaghob\Time;

use Illuminate\Support\ServiceProvider;
use Yaghob\Time\Facade\Timer;
use Yaghob\Time\Middleware\TimeCheckMiddleware;

class TimeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/config.php', 'tconfig'
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'tview');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/tview')
        ],'yaghob-time');

        $this->publishes([
            __DIR__.'/config/config.php' => config_path('tconfig.php')
        ],'yaghob-tconfig');

//        $router = $this->app['router'];
//        $router->middleware['checktime',TimeCheckMiddleware::class]);

        // binding
        $this->app->bind('timer',function (){
            return new Timer();
        });
    }
}
