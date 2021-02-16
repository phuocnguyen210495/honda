<?php

namespace App\Controller;

use Illuminate\Http\Request;

class ShowHomeController
{
    public function __invoke(Request $request)
    {
        return view('front.home');
    }
}
