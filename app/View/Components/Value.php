<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Value extends Component
{
    public string $key;
    public string $value;

    /**
     * Create a new component instance.
     *
     * @param string $key
     * @param string $value
     */
    public function __construct(string $key, string $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.value');
    }
}
