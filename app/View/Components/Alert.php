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

    public function __construct(string $type, string $content = null, string $description = '', string $icon = 'information-circle', bool $closeable = false, bool $inSession = false)
    {
        $this->content = $inSession ? session($type) : $content;
        $this->type = [
                'error' => 'red',
                'success' => 'green',
                'warning' => 'yellow',
                'info' => 'blue'
            ][$type] ?? 'gray';
        $this->description = $description;
        $this->icon = $icon;
        $this->closeable = $closeable;
    }

    public function render(): View
    {
        return view('components.alert');
    }
}
