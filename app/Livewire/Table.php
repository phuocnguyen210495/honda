<?php

namespace App\Livewire;

use App\Model\Visitor;
use App\Support\ArrayList;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithPagination;
use phpDocumentor\Reflection\DocBlock\Tags\Deprecated;

class Table extends Component
{
    use WithPagination;
    public string $model;
    public string $title;
    public string $description;
    public string $translationKey;
    public array $translations;
    public string $query = '';
    public int $perPage = 10;
    public string $sortField = '';
    public bool $sortAsc = true;
    public $truncate;
    public $copyable;
    public $searchable;
    public $booleans;
    public $dates;
    public $files;
    public $included;
    public $excluded;

    protected $queryString = [
        'query' => ['except' => ''],
        'sortField' => ['except' => ''],
        'sortAsc' => ['except' => true],
        'perPage' => ['except' => 10]
    ];

    public function mount(
        string $model,
        int $perPage = 10,
        string $title = '',
        string $description = '',
        string $translationKey = 'table.{model}.{key}',
        array $translations = null,
        string $truncate = null,
        string $searchable = null,
        string $copyable = null,
        string $include = null,
        string $exclude = null,
        string $booleans = null,
        string $dates = null,
        string $files = null
    ): void
    {
        $this->model = $model;
        $this->perPage = $perPage;
        $this->title = $title;
        $this->description = $description;
        $this->translationKey = $translationKey;
        $this->translations = $translations;
        $this->truncate = $this->list($truncate);
        $this->copyable = $this->list($copyable);
        $this->searchable = $this->list($searchable);
        $this->included = $this->list($include);
        $this->excluded = $this->list($exclude);
        $this->booleans = $this->list($booleans);
        $this->dates = $this->list($dates);
        $this->files = $this->list($files);
    }

    protected function list(string $list = null)
    {
        return ArrayList::make($list)->toArray();
    }

    public function updatedQuery()
    {
        $this->resetPage();
    }


    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function render()
    {
        return view('livewire.table', [
            'items' => $this->model
                ::search($this->query, $this->searchable)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage),
            'columns' => $columns = $this->getModelColumns()->filter(
                fn($value) => !empty($this->included) ? in_array($value, $this->included, true) : !in_array($value, $this->excluded, true)
            ),
            'translatedColumns' => array_combine(
                $columns->all(),
                $columns->map(
                    function ($column) {
                        $translated = __(
                            $translationKey = str_replace(
                                ['{model}', '{key}'],
                                [strtolower(class_basename($this->model)), $column],
                                $this->translationKey
                            )
                        );

                        return $translated === $translationKey ? ($this->translations[$column] ?? $column) : $translated;
                    }
                )->all()
            )
        ]);
    }

    protected function getModelColumns(): Collection
    {
        $model = $this->model::first();

        if (!$model) {
            return collect();
        }

        return collect(array_keys($model->getAttributes()));
    }

    public function paginationView()
    {
        return 'components.pagination';
    }
}
