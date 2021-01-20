<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Icon extends Component
{
    public string $type;
    public string $width;
    public string $height;
    public string $name;
    public string $set;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param bool $solid
     * @param string $w
     * @param string $h
     * @param string|null $size
     */
    public function __construct(string $name, bool $solid = false, string $w = '8', string $h = '8', string $size = null,  string $set = 'heroicon')
    {
        $this->name = $name;
        $this->type = $solid ? 's' : 'o';
        $this->width = $size === null ? (str_starts_with($w, 'w-') ? $w : 'w-' . $w) : 'w-' . $size;
        $this->height = $size === null ? (str_starts_with($h, 'h-') ? $h : 'h-' . $h) : 'h-' . $size;
        $this->set = $set;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.icon');
    }
}
