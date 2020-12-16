<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Rating extends Component
{
    public string $name;
    public int $max;
    public int $size;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name, int $max = 5, int $size = 6)
    {
        $this->name = $name;
        $this->max = $max;
        $this->size = $size;
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

    public function rate(int $stars): array
    {
        return array_pad(
            array_fill(0, $stars, true),
            $this->max,
            false
        );
    }
}
