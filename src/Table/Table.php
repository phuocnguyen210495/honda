<?php


namespace Starts\Table;


use Livewire\Component;

abstract class Table extends Component
{
    public string $model;

    public function render()
    {
        return view('livewire.table', [
            'items' => $this->model::all(),
            'columns' => $this->columns()
        ]);
    }

    abstract public function columns(): array;


}
