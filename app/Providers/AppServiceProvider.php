<?php

namespace App\Providers;

use App\Support\Alert;
use Honda\Navigation\Item;
use Honda\Navigation\Navigation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        Navigation::macro('dashboard', function () {
            return Navigation::create()
                ->add('welcome', fn(Item $item) => $item->icon('x'));
        });
    }

    public function boot(): void
    {
    }
}
