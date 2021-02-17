<?php

namespace App\View\Components\Dropdown;

use Illuminate\View\Component;

class Divider extends Component
{
    public function render()
    {
        return <<<HTML
<div class="border-t border-gray-100 my-1"></div>
HTML;

    }
}
