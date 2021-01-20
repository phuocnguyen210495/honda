<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert  extends Component
{
    public string $content;
    public string $icon;
    public bool $closeable;
    public string $type;
    public string $description;

    /**
     * Create a new component instance.
     *
     * @param string $content
     * @param string $type
     * @param string $description
     * @param string $icon
     * @param bool $closeable
     */
    public function __construct(string $content, string $type, string $description = '', string $icon = 'information-circle', bool $closeable = false)
    {
        $this->content = $content;
        $this->type = $type;
        $this->description = $description;
        $this->icon = $icon;
        $this->closeable = $closeable;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.alert');
    }

    public function convertType(string $type) {
        return [
            'error' => 'red',
            'success' => 'green',
            'warning' => 'yellow',
            'info' => 'blue'
        ][$type] ?? 'gray';
    }
}
