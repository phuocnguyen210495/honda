<?php

namespace App\Http\Controllers;

use App\Models\OnlineMailable;
use Illuminate\Http\Request;

class ViewOnlineMailableController
{
    public function __invoke(Request $request, OnlineMailable $onlineMailable)
    {
        if (!$request->hasValidSignature()) {
            abort(404);
        }

        return response($onlineMailable->content)
            ->header('Content-Type', 'text/html');
    }
}
