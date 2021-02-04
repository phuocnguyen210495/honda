<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Progress extends Component
{
    public string $color;
    public string $background;
    public bool $squared;
    public int $filled;
    public int $total;
    public int $height;

    public function __construct(int $filled = 0, int $total = 100, int $height = 3, string $color = null, string $background = 'gray', bool $squared = false)
    {
        $this->color      = $color ?? settings('color');
        $this->background = $background;
        $this->squared    = $squared;
        $this->filled     = $filled;
        $this->total      = $total;
        $this->height     = $height;
    }

    public function render()
    {
        return view('components.progress');
    }

    public function completedPercentage()
    {
        return $this->filled / $this->total * 100;
    }
}
