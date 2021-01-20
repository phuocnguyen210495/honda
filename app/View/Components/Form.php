<?php

namespace App\View\Components;

use App\Support\Action;
use Illuminate\View\Component;

class Form extends Component
{
    public $action;
    /**
     * @var string
     */
    public $method;
    /**
     * @var bool
     */
    public $hasFiles;

    /**
     * Create a new component instance.
     *
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

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.form');
    }
}
