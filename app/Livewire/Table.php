<?php

namespace App\Livewire;

use App\Model\Visitor;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithPagination;
use phpDocumentor\Reflection\DocBlock\Tags\Deprecated;

class Table extends Component
{
    use WithPagination;
    public string $model;
    public array $booleans;
    public array $dates;
    public array $files;
    public int $perPage;
    public array $included;
    public array $excluded;

    public function mount(
        string $model,
        int $perPage = 10,
        string $include = null,
        string $exclude = null,
        string $booleans = null,
        string $dates = null,
        string $files = null
    ): void
    {
        $this->model = $model;
        $this->perPage = $perPage;
        $this->included = $this->list($include);
        $this->excluded = $this->list($exclude);
        $this->booleans = $this->list($booleans);
        $this->dates = $this->list($dates);
        $this->files = $this->list($files);
    }

    protected function list(string $list = null)
    {
        return $list === null ? [] : collect(
            explode(',', $list)
        )->map(fn($v) => trim($v))->all();
    }

    public function render()
    {
        return view('livewire.table', [
            'items' => $this->model::paginate($this->perPage),
            'columns' => $this->getModelColumns()->filter(
                fn($value) => !empty($this->included) ? in_array($value, $this->included, true) : !in_array($value, $this->excluded, true)
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
