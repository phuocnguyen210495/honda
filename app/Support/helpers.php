<?php

if (!function_exists('settings')) {
    function settings(string $key = null)
    {
        if ($key) {
            return app('settings')->get($key);
        }

        return app('settings');
    }
}
