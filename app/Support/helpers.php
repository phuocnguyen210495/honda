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
    function flash(string $message, string $level = 'success')
    {
        session()->flash($level, $message);
    }
}
