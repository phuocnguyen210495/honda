<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Value extends Component
{
    public string $key;
    public string $value;

    /**
     * Create a new component instance.
     */
    public function __construct(string $key, string $value = '')
    {
        $this->key   = $key;
        $this->value = $value;
    }

    public function render()
    {
        return view('components.value');
    }
}
