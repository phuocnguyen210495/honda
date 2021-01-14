<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Title extends Component
{
    public string $level;
    public ?string $color;
    public ?string $content;

    /**
     * Create a new component instance.
     *
     * @param string $level
     * @param string|null $content
     * @param string|null $color
     */
    public function __construct(string $level, string $content = null, string $color = null)
    {
        $this->level = $level;
        $this->color = $color;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.title');
    }
}
