<?php

namespace App\Support;

use Illuminate\View\ComponentAttributeBag;

class Styles
{
    public static array $pushedStyles = [];
    public static array $pushedRaw    = [];

    public static function push(string $link, ComponentAttributeBag $attributes = null): void
    {
        static::$pushedStyles[$link] = $attributes ?? new ComponentAttributeBag();
    }

    public static function pushRaw(string $style): void
    {
        static::$pushedRaw[] = $style;
    }
}
