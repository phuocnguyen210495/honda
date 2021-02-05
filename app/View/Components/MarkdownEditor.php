<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MarkdownEditor extends Component
{
    public ?string $name;
    public ?string $label;
    public bool $hideLabel;

    public function __construct(string $name = null, string $label = null, bool $hideLabel = false)
    {
        $this->name      = $name;
        $this->label     = $label;
        $this->hideLabel = $hideLabel;
    }

    public function render()
    {
        return view('components.markdown-editor');
    }
}
