<?php

namespace App\Middleware;

use Auth;
use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
    ];

    public function handle($request, Closure $next)
    {
        if (!Auth::check() && $request->route()->named('logout')) {
            $this->except[] = route('logout');

        }

        return parent::handle($request, $next);
    }
}
