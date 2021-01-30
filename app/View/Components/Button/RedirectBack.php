<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;

class RedirectBack extends Component
{
    public string $button;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $button = 'button')
    {
        $this->button = $button;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.button.redirect-back');
    }
}
