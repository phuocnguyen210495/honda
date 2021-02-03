<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * @see https://github.com/blade-ui-kit/blade-ui-kit/blob/0.x/src/Components/Maps/Mapbox.php
 * All credit is due to Dries Vints and any eventual contributor.
 */
class Map extends Component
{
    public string $id;
    public string $theme;
    public array $options;
    public array $markers;

    public function __construct(
        string $id = 'map',
        string $theme = 'streets-v11',
        array $options = [],
        array $markers = []
    ) {
        $this->id      = $id;
        $this->theme   = $theme;
        $this->options = $options;
        $this->markers = $markers;
    }

    public function render(): View
    {
        return view('components.map');
    }

    public function options(): array
    {
        return array_merge([
            'container' => $this->id,
            'style'     => "mapbox://styles/mapbox/{$this->theme}",
        ], $this->options);
    }
}
