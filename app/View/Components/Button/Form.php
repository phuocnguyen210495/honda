<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;

class Form extends Component
{
    public string $action;
    public string $method;
    public string $extends;

    public function __construct(string $action = '#', string $method = 'POST', string $extends = 'button')
    {
        $this->action    = $action;
        $this->method    = $method;
        $this->extends = $extends;
    }

    public function render()
    {
        return view('components.button.form');
    }
}
