<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SearchableInputDataset extends Component
{
    public array $data;
    
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('components.searchable-input-dataset', [
            'data' => $this->data
        ]);
    }
}
