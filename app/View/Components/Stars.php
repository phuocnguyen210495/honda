<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Stars extends Component
{
    public int $filled;
    public int $max;
    public string $icon;

    /**
     * Create a new component instance.
     */
    public function __construct(int $filled = 0, int $max = 5)
    {
        $this->filled = min($filled, $max);
        $this->max    = $max;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.stars');
    }
}
