<?php

namespace App\Support;

use Illuminate\View\ComponentAttributeBag;

class Styles {

    public static $pushedStyles = [];

    public static function push(string $link, ComponentAttributeBag $attributes = null) {
        static::$pushedStyles[$link] = $attributes ?? new ComponentAttributeBag();
    }
}