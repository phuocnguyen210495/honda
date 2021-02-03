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
        $this->title = $title;
        $this->description = $description;
        $this->well = $well;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.action-panel');
    }
}
