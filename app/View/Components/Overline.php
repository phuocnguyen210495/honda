<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Overline extends Component
{
    public ?string $content;
    public ?string $size;
    public ?string $color;

    public function __construct(string $content = null, string $size = 'xs', string $color = null)
    {
        $this->content = $content;
        $this->size    = $size;
        $this->color   = $color ?? settings('color');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.overline');
    }
}
