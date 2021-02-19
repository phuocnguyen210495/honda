<?php

namespace App\Provider;

use Illuminate\Support\ServiceProvider;

class NavigationServiceProvider extends ServiceProvider
{
    public function register()
    {
        app()->bind('navigation.dashboard', function () {
            return app('navigation');
        });
    }
}
