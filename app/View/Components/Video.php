<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Video extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function render()
    {
        return view('components.video');
    }
}
