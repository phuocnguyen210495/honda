<?php

namespace App\View\Components;

use App\Support\Action;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form extends Component
{
    public string $action;
    public string $method;
    public bool $hasFiles;

    /**
     * @param string $action
     * @param string $method
     * @param bool $hasFiles
     */
    public function __construct(string $action, string $method = 'POST', bool $hasFiles = false)
    {
        $this->action = Action::guess($action);
        $this->method = $method;
        $this->hasFiles = $hasFiles;
    }

    public function render(): View
    {
        return view('components.form');
    }
}
