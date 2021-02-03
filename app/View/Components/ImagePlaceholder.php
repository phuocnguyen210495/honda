<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ImagePlaceholder extends Component
{
    public int $width;
    public int $height;
    public string $format;
    public string $background;
    public string $color;
    public string $text;

    public function __construct(
        int $width = 1920,
        int $height = 1080,
        string $format = 'png',
        string $background = '000000',
        string $color = 'FFFFFFF',
        string $text = null,
        bool $square = false
    ) {
        if ($square) {
            $height  = $width;
        }
        $this->width      = $width;
        $this->height     = $height;
        $this->format     = $format;
        $this->background = $background;
        $this->color      = $color;
        $this->text       = $text;
    }

    public function url()
    {
        $base = "https://via.placeholder.com/{$this->width}x{$this->height}.{$this->format}/{$this->background}/{$this->color}";

        if ($this->text) {
            $base .= '?text=' . urlencode($this->text);
        }

        return $this;
    }

    public function render()
    {
        return view('components.image-placeholder');
    }
}
