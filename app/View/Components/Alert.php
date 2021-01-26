<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public string $content;
    public string $icon;
    public bool $closeable;
    public string $type;
    public string $description;

    /**
     * Alert constructor.
     */
    public function __construct(string $content, string $type, string $description = '', string $icon = 'information-circle', bool $closeable = false)
    {
        $this->content     = $content;
        $this->type        = $type;
        $this->description = $description;
        $this->icon        = $icon;
        $this->closeable   = $closeable;
    }

    public function render(): View
    {
        return view('components.alert');
    }

    public function convertType(string $type): string
    {
        return [
                'error'   => 'red',
                'success' => 'green',
                'warning' => 'yellow',
                'info'    => 'blue',
            ][$type] ?? 'gray';
    }
}
