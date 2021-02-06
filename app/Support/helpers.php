<?php

use Spatie\Valuestore\Valuestore;

if (!function_exists('settings')) {
    /**
     * @return Valuestore|mixed
     */
    function settings(string $key = null)
    {
        if ($key) {
            return app('settings')->get($key);
        }

        return app('settings');
    }
}

if (!function_exists('flash')) {
    function flash(string $message, string $level = 'success'): void
    {
        session()->flash($level, $message);
    }
}

if (!function_exists('classes')) {
    function classes(array $classList): string
    {
        $classes = [];

        foreach ($classList as $class => $constraint) {
            if (is_numeric($class)) {
                $classes[] = $constraint;
            } elseif ($constraint) {
                $classes[] = $class;
            }
        }

        return implode(' ', $classes);
    }
}
