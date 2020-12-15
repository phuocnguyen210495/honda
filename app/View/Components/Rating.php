<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Rating extends Component
{
    public int $max;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $max = 5)
    {
        $this->max = $max;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.rating');
    }
}
