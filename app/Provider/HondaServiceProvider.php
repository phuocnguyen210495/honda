<?php

namespace App\Provider;

use App\Support\Mixins\CarbonMixin;
use App\Support\Mixins\CollectionMixin;
use App\Support\Mixins\StrMixin;
use App\Support\Navigation;
use App\Support\Styles;
use Blade;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Markdown;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Illuminate\View\ComponentAttributeBag;
use ImLiam\BladeHelper\Facades\BladeHelper;
use ImLiam\BladeHelper\Facades\BladeHelpere;
use Spatie\Valuestore\Valuestore;
use Symfony\Component\Finder\SplFileInfo;
use Validator;
use View;

class HondaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        app()->bind(Valuestore::class, function () {
            return Valuestore::make(storage_path('app/settings.json'));
        });
        app()->bind('settings', fn() => app(Valuestore::class));
        app()->bind('navigation', fn() => new Navigation());

        View::share(['settings' => app('settings')]);

        ComponentAttributeBag::macro('hasAnyOf', function (...$attributes) {
            return count($this->filter(fn($_, $attribute) => in_array($attribute, $attributes))->getAttributes()) > 0;
        });
    }

    public function register(): void
    {
        Model::unguard();
        Factory::guessFactoryNamesUsing(function (string $model) {
            return 'Database\\Factories\\' . class_basename($model) . 'Factory';
        });

        $this->registerMacros();
        $this->registerBladeDirectives();
    }

    private function registerMacros(): void
    {
        Collection::mixin(new CollectionMixin());
        Carbon::mixin(new CarbonMixin());
        Str::mixin(new StrMixin());
        ComponentAttributeBag::macro('class', function ($classList) {
            /* @var ComponentAttributeBag $this */
            return $this->merge(['class' => classes($classList)]);
        });
    }

    public function registerBladeDirectives(): void
    {
        BladeHelper::directive('setting', fn($key) => app('settings')->get($key));
        Blade::directive('alpine', function (string $variables) {
            return <<<PHP
                <?php
                    \$data = array_combine(
                        array_map(
                            fn (\$variable) => str_replace('$', '', \$variable),
                            explode(',', '$variables')
                        ),
                        [$variables]
                    )

                    echo trim(
                        str_replace(["'", '"'], ["\'", "'"], json_encode(\$data)),
                        '{}'
                    );
                ?>
            PHP;
        });
        BladeHelper::directive('markdown', fn($markdown) => Markdown::parse($markdown));
    }
}
