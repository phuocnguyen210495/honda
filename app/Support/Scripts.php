<?php

namespace App\Support;

use Illuminate\View\ComponentAttributeBag;

class Scripts {

    public static $pushedScripts = [];

    public static function push(string $link, ComponentAttributeBag $attributes = null) {
        static::$pushedScripts[$link] = $attributes ?? new ComponentAttributeBag();
    }
}