<?php

namespace App\Support;

use Blade;

final class BladeDirective
{
    public static function create(string $name, callable $callable): void
    {
        Blade::directive($name, fn($variables) => ($callable)("'" . $variables . "'", $variables));
    }
}
