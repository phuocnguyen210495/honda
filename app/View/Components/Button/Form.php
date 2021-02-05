<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;

class Form extends Component
{
    public string $action;
    public string $method;
    public string $component;

    public function __construct(string $action = '#', string $method = 'POST', string $component = 'button')
    {
        $this->action    = $action;
        $this->method    = $method;
        $this->component = $component;
    }

    public function render()
    {
        return view('components.button.form');
    }
}
