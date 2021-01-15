<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Overline extends Component
{
    public ?string $content;
    public ?string $size;
    public ?string $color;

    /**
     * Create a new component instance.
     *
     * @param string|null $content
     * @param string|null $size
     * @param string|null $color
     */
    public function __construct(string $content = null, string $size = 'xs', string $color = null)
    {
        $this->content = $content;
        $this->size = $size;
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.overline');
    }
}
