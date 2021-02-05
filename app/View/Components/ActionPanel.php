<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ActionPanel extends Component
{
    public string $title;
    public ?string $description;
    public bool $well;

    public function __construct(string $title, string $description = null, bool $well = false)
    {
        $this->title       = $title;
        $this->description = $description;
        $this->well        = $well;
    }

    public function render()
    {
        return view('components.action-panel');
    }
}
