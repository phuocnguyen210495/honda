<?php

namespace App\Support;

use Illuminate\View\ComponentAttributeBag;

class Scripts
{
    public static array $pushedScripts = [];
    public static array $pushedRaw     = [];

    public static function push(string $link, ComponentAttributeBag $attributes = null): void
    {
        static::$pushedScripts[$link] = $attributes ?? new ComponentAttributeBag();
    }

    public static function pushRaw(string $script): void
    {
        static::$pushedRaw[] = $script;
    }
}
