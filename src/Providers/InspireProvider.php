<?php

namespace Pawanyd\Inspire\Providers;

use Illuminate\Support\ServiceProvider;

class InspireProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // echo "yes"; exit;
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'inspire');
    }
}