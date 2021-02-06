<?php

namespace App\Provider;

use App\Rule\Captcha;
use App\Support\BladeDirective;
use App\Support\Navigation;
use App\Support\Styles;
use Blade;
use File;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\ComponentAttributeBag;
use Spatie\Valuestore\Valuestore;
use Str;
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
        Str::macro('humanize', function (string $text) {
            return ucwords(str_replace(
                '#[space]',
                ' ',
                trim(preg_replace('/[^\x21-\x7E]/', '', str_replace(['_', '-'], '#[space]', $text)))
            ));
        });
        Str::macro('quote', function (string $str, string $quote = '"') {
            if ($str[0] === $quote && $str[-1] === $quote) {
                return $str;
            }

            return $quote . $str . $quote;
        });
        Str::macro('unquote', function (string $str, string $quotes = '\'"') {
            return str_replace(str_split($quotes), '', $str);
        });
        View::share(['settings' => app('settings')]);
        ComponentAttributeBag::macro('class', function ($classList) {
            /* @var ComponentAttributeBag $this */
            return $this->merge(['class' => classes($classList)]);
        });
        Blade::directive('setting', function ($key) {
            $key = Str::unquote($key);

            return <<<html
                <?php
                    echo \$settings->get('$key');
                ?>
            html;
        });
        Blade::directive('alpine', function (string $variables, string $literalVariables) {
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
        Blade::directive('bind', function (string $variables) {
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
        Blade::directive('markdown', function (string $variables) {
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

        collect(File::allFiles(app_path('Rule')))->each(function (SplFileInfo $file) {
            [$name] = explode('.', $file->getFilename());

            Validator::extend(strtolower($name), "\\App\\Rule\\$name");
        });
    }
}
