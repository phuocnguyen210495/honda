<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Pill extends Component
{
    public string $content;
    public string $color;
    public string $href;
    public bool $dotted;
    public bool $disabled;

    /**
     * Create a new component instance.
     */
    public function __construct(string $content, string $color = 'gray', bool $dotted = false, bool $disabled = false, string $href = '')
    {
        $this->content  = $content;
        $this->color    = $disabled ? 'gray' : $color;
        $this->dotted   = $dotted;
        $this->disabled = $disabled;
        $this->href     = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.pill');
    }
}
