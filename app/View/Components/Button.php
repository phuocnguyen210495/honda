<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public string $content;
    public string $type;
    public string $iconSide;
    public string $iconSet;
    public string $icon;
    public string $color;
    public string $size;

    public static array $sizesTable = [
        'xs' => ['y' => 1, 'x' => 2],
        'sm' => ['y' => 2, 'x' => 4], 
        'md' => ['y' => 3, 'x' => 6],
        'lg' => ['y' => 4, 'x' => 8]
    ];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $content = null, string $type = 'submit', string $icon = null, string $iconSide = 'left', string $iconSet = 'heroicon', string $color, string $size = 'md')
    {
        $this->content = $content;
        $this->type = $type;
        $this->icon = $icon;
        $this->iconSide = $iconSide;
        $this->iconSet = $iconSet;
        $this->color = $color;
        $this->size = $size;
    }

    public function paddings(): string
    {
        ['y' => $y, 'x' => $x] = static::$sizesTable[$this->size];

        return 'py-' . $y . ' ' . 'px-' . $x;
    }

    public function iconSize() {
        return [
            'xs' => 4,
            'sm' => 5,
            'md' => 5,
            'lg' => 8
        ][$this->size];
    }
 
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.button');
    }
}
