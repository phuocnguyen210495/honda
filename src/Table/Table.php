<?php


namespace Starts\Table;


use Livewire\Component;
use Livewire\WithPagination;

abstract class Table extends Component
{
    use WithPagination;

    public string $model;

    public string $query = '';
    public int $perPage = 10;
    public string $sortField = '';
    public bool $sortAsc = true;
    public array $selected = [];

    protected $queryString = [
        'query' => ['except' => ''],
        'sortField' => ['except' => ''],
        'sortAsc' => ['except' => true],
        'perPage' => ['except' => 10],
    ];

    public function render()
    {
        return view('livewire.table', [
            'columns' => $columns = $this->columns(),
            'items' => $this->model
                ::search(
                    collect($columns)
                        ->filter(fn($column) => $column->searchable)
                        ->map(fn($column) => $column->modelColumn)
                        ->toArray(),
                    $this->query
                )->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage),
            'hasActions' => fn() => count($this->actions()) > 0,
            'hasSearchableColumns' => function () {
                return collect($this->columns())
                    ->filter(fn($column) => $column->searchable)
                    ->isNotEmpty();
            }
        ]);
    }

    abstract public function columns(): array;

    /**
     * @return Action[]
     */
    public function actions(): array
    {
        return [];
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

    public function handleAction(string $action)
    {
        ($this->actions()[$action]->executor)($this->selected);
    }
}
