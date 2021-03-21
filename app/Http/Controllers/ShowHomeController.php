<?php

namespace App\Http\Controllers;

use App\Support\Alert;
use Illuminate\Http\Request;

class ShowHomeController
{
    public function __invoke(Request $request)
    {
        return view('admin.home');
    }
}
