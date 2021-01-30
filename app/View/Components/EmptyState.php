<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EmptyState extends Component
{
    public bool $show;
    public string $title;
    public ?string $content;
                                           
    public function __construct(string $title, bool $show = false, string $content = null)
    {
        $this->show = $show;
        $this->title = $title;
        $this->content = $content;
    }

    public function render()
    {
        return view('components.empty-state');
    }
}
