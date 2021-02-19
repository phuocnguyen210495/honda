<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Throwable;

class Style extends Component
{
    public ?string $link;

    public function __construct(string $link = null)
    {
        try {
            $link = mix($link);
        } catch (Throwable $e) {
        }

        $this->link = $link;
    }

    public function render()
    {
        return view('components.style');
    }
}
