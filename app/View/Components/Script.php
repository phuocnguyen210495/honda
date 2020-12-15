<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Throwable;

class Script extends Component
{
    public string $link;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $link)
    {
        try {
            $link = mix($link);
        } catch (Throwable $e) {}
        
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.script');
    }
}
