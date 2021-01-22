<?php

namespace App\View\Components;

use App\Support\Action;
use Illuminate\View\Component;

class Link extends Component
{
    public string $content;
    public string $href;
    public string $color;
    public bool $unstyled;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $content = null, string $href = null, string $color = null, bool $unstyled = false)
    {
        $this->content = $content;
        $this->href = Action::guess($href);
        $this->color = $color ?? settings('color');
        $this->unstyled  = $unstyled;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.link');
    }
}
