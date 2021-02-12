<?php


namespace Starts\Table;


use Livewire\Component;

abstract class Table extends Component
{
    public string $model;

    public string $query     = '';
    public int $perPage      = 10;
    public string $sortField = '';
    public bool $sortAsc     = true;

    protected $queryString = [
        'query'     => ['except' => ''],
        'sortField' => ['except' => ''],
        'sortAsc'   => ['except' => true],
        'perPage'   => ['except' => 10],
    ];

    public function render()
    {
        return view('livewire.table', [
            'columns' => $columns = $this->columns(),
            'items' => $this->model
                ::search(
                    collect($columns)
                        ->filter(fn ($column) => $column->searchable)
                        ->map(fn ($column) => $column->modelColumn)
                        ->toArray(),
                    $this->query
                )->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage),
        ]);
    }

    public function hasSearchableColumns() {
        return collect($this->columns())
            ->filter(fn ($column) => $column->searchable)
            ->isNotEmpty();
    }

    public function sortBy($field): void
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    abstract public function columns(): array;


}
