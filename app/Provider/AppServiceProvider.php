<?php

namespace App\Provider;

use App\Support\BladeDirective;
use App\Support\Mixins\CarbonMixin;
use App\Support\Mixins\CollectionMixin;
use App\Support\Mixins\StrMixin;
use App\Support\Navigation;
use App\Support\Styles;
use Carbon\Carbon;
use Illuminate\Console\GeneratorCommand;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Illuminate\View\ComponentAttributeBag;
use Livewire;
use Spatie\Valuestore\Valuestore;
use Symfony\Component\Finder\SplFileInfo;
use Validator;
use View;

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
        app()->bind('navigation', function () {
            return new Navigation();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Model::unguard();
        Collection::mixin(new CollectionMixin());
        Carbon::mixin(new CarbonMixin());
        Str::mixin(new StrMixin());
        ComponentAttributeBag::macro('class', function ($classList) {
            /* @var ComponentAttributeBag $this */
            return $this->merge(['class' => classes($classList)]);
        });
        View::share(['settings' => app('settings')]);
        BladeDirective::create('setting', function ($key) {
            $key = Str::unquote($key);

            return <<<html
                <?php
                    echo \$settings->get('$key');
                ?>
            html;
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
        });
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
        });
        BladeDirective::create('markdown', function (string $variables) {
            return <<<html
                <?php
                    [\$rawMarkdown] = App\Support\ArrayList::make($variables)->toArray();

                    # Eval here is actually not dangerous because \$rawMarkdown contains the variable that contains the markdown
                    # No user content is evaluated here whatsoever
                    eval('\$markdown = ' . \$rawMarkdown . ';');
                    echo \Illuminate\Mail\Markdown::parse(\$markdown);
                ?>
            html;
        });
        Factory::guessFactoryNamesUsing(function (string $model) {
            return 'Database\\Factories\\' . class_basename($model) . 'Factory';
        });
        Styles::pushRaw('[x-cloak] { display: none; }');
        Collection::fromFiles(app_path('Rule'))->each(function (SplFileInfo $file) {
            [$name] = explode('.', $file->getFilename());

            Validator::extend(strtolower($name), "\\App\\Rule\\$name");
        });

        Collection::fromFiles(app_path('View/Table'))->each(function (SplFileInfo $file) {
            $alias = strtolower(
                preg_replace(
                    '/[A-Z]/',
                    '-$0',
                    lcfirst($file->getFilenameWithoutExtension())
                )
            );
            Livewire::component($alias, 'App\View\Table\\' . $file->getFilenameWithoutExtension());
        });
    }
}
