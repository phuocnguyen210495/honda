<?php

namespace App\Provider;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Str;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Model::unguard();

        Str::macro('humanize', function (string $text) {
            return ucfirst(trim(preg_replace('/[^\x21-\x7E]/', '', str_replace(['_', '-'], '', $text))));
        });
    }
}
