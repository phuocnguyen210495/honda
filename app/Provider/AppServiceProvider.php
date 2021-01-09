<?php

namespace App\Provider;

use App\Support\ArrayList;
use App\Support\BladeDirective;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Spatie\Valuestore\Valuestore;
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
        app()->bind(Valuestore::class, function () {
            return Valuestore::make(storage_path('app/settings.json'));
        });

        app()->bind('settings', fn() => app(Valuestore::class));
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
        Str::macro('quote', function (string $str, string $quote = '"') {
            if ($str[0] === $quote && $str[-1] === $quote) {
                return $str;
            }

            return $quote . $str . $quote;
        });
        Str::macro('unquote', function (string $str, string $quotes = '\'"') {
            collect(str_split($quotes))->each(function ($quote) use (&$str) {
                if (strpos($quote, $str) === 0) {
                    $str = substr($str, 1);
                }

                if (strpos($quote, $str) === strlen($str)) {
                    $str = substr($str, -1);
                }
            });

            return $str;
        });

        BladeDirective::create('alpine', function (string $variables, string $literalVariables) {
            return <<<html
                <?php
                    \$alpineKeys = App\Support\ArrayList::make($variables)->toCollection()->map(function (\$variable) {
                        return str_replace('$', '', \$variable);
                    })->all();
                    \$alpineValues = [$literalVariables];
                    \$alpine = array_combine(\$alpineKeys, \$alpineValues);

                    echo substr(
                        str_replace('"', "'", str_replace("'", "\'", json_encode(\$alpine))),
                        1,
                        -1
                    );
                ?>
            html;
        })->register();
        BladeDirective::create('bind', function (string $variables) {
            return <<<html
                <?php
                    [\$attribute, \$binding] = App\Support\ArrayList::make($variables)->toArray();

                    if (\$attribute === 'text' || \$attribute === 'html') {
                        echo 'x-' . Str::unquote(\$attribute) . '="' . Str::unquote(\$binding) . '"';
                    } else {
                        echo 'x-bind:' . Str::unquote(\$attribute) . '="' . Str::unquote(\$binding) . '"';
                    }
                ?>
            html;
        })->register();
    }
}
