<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Variance extends Component
{
    public string $variance;
    public bool $uncolored;

    public function __construct(string $variance = '0', bool $uncolored = false)
    {
        $this->variance = $variance;
        $this->uncolored = $uncolored;
    }

    public function render()
    {
        return view('components.variance');
    }
}
