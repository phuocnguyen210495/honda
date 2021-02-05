<?php

namespace App\View\Components;

class Pill extends Badge
{
    public function render()
    {
        return view('components.badge', [
            'pill' => true
        ]);
    }
}
