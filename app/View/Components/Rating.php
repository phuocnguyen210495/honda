<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Str;

class Rating extends Component
{
    public ?string $name;
    public ?string $label;
    public int $max;
    public int $size;
    public bool $first;
    public bool $hideLabel;

    public function __construct(string $name = null, string $label = null, bool $hideLabel = false, int $max = 5, int $size = 6, bool $first = false)
    {
        $this->name = $name;
        $this->label     = $label ?? ($name === null ? $name : Str::humanize($name));
        $this->max = $max;
        $this->size = $size;
        $this->first = $first;
        $this->hideLabel = $hideLabel;
    }

    public function render()
    {
        return view('components.rating');
    }

    public function rate(int $stars): array
    {
        return array_pad(
            array_fill(0, $stars, true),
            $this->max,
            false
        );
    }
}
