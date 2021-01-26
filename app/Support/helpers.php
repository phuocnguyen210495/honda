<?php

use Spatie\Valuestore\Valuestore;

if (!function_exists('settings')) {
    /**
     * @param string|null $key
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
