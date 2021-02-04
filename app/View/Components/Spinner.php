<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Spinner extends Component
{
    public string $color;
    public bool $hide;
    public int $size;

    /**
     * Create a new component instance.
     */
    public function __construct(string $color = null, bool $hide = false, int $size = 6)
    {
        $this->color = $color ?? settings('color');
        $this->hide  = $hide;
        $this->size  = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.spinner');
    }
}
