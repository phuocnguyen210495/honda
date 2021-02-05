<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AvatarsStack extends Component
{
    public string $sourceFrom;
    public string $searchFrom;

    public $models;
    public int $size;
    public string $margin;
    public bool $reverse;
    public int $limit;
    public string $provider;
    public string $fallback;

    public function __construct($models, string $sourceFrom = 'profile_photo_url', string $searchFrom = 'name', int $size = 10, bool $reverse = false, int $limit = 4, string $provider = '', string $fallback = '')
    {
        // Ensure we work with a Collection
        $models = collect($models);

        $this->models     = $models->take($limit);
        $this->sourceFrom = $sourceFrom;
        $this->searchFrom = $searchFrom;
        $this->size       = $size;
        $this->reverse    = $reverse;
        $this->limit      = $limit;
        $this->provider   = $provider;
        $this->fallback   = $fallback;

        // Define the margin direction and amount
        $marginDirection = $reverse ? '-ml-' : '-mr-';
        $this->margin    = $marginDirection . ceil($size / 5);
    }

    public function urlFromSource($model): string
    {
        if (isset($model->{$this->sourceFrom}) && filter_var($model->{$this->sourceFrom}, FILTER_VALIDATE_URL)) {
            return $model->{$this->sourceFrom};
        }

        return '';
    }

    public function render()
    {
        return view('components.avatars-stack');
    }
}
