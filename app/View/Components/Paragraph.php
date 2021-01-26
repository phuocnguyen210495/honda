<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Paragraph extends Component
{
    public ?string $content;
    public string $color;
    public bool $markdown;

    /**
     * Create a new component instance.
     */
    public function __construct(string $content = null, string $color = 'gray', bool $markdown = false)
    {
        $this->content  = $content;
        $this->color    = $color;
        $this->markdown = $markdown;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.paragraph');
    }
}
