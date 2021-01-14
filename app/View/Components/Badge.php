<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Badge extends Component
{
    public string $content;
    public string $color;
    public string $href;
    public bool $dotted;
    public bool $disabled;

    /**
     * Create a new component instance.
     *
     * @param string $color
     * @param string $content
     * @param bool $dotted
     * @param bool $disabled
     * @param string $href
     */
    public function __construct(string $content, string $color = 'gray', bool $dotted = false, bool $disabled = false, string $href = '')
    {
        $this->content = $content;
        $this->color = $disabled ? 'gray' : $color;
        $this->dotted = $dotted;
        $this->disabled = $disabled;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.badge');
    }
}
