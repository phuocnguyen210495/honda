<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AvatarsStack extends Component
{

    public string $sourceFrom;
    public string $searchFrom;

    /**
     * @var mixed $models
     */
    public $models;
    public int $size;
    public string $margin;
    public bool $reverse;
    public int $limit;
    public string $provider;
    public string $fallback;

    /**
     * Create a new component instance.
     *
     * @param $models
     * @param string $sourceFrom
     * @param string $searchFrom
     * @param int $size
     * @param bool $reverse
     * @param int $limit
     * @param string $provider
     * @param string $fallback
     */
    public function __construct($models, string $sourceFrom = 'profile_photo_url', string $searchFrom = 'name', int $size = 10, bool $reverse = false, int $limit = 4, string $provider = '', string $fallback = '')
    {
        // Ensure we work with a Collection
        $models = collect($models);

        $this->models = $models->take($limit);
        $this->sourceFrom = $sourceFrom;
        $this->searchFrom = $searchFrom;
        $this->size = $size;
        $this->reverse = $reverse;
        $this->limit = $limit;
        $this->provider = $provider;
        $this->fallback = $fallback;

        // Define the margin direction and amount
        $marginDirection = $reverse ? '-ml-' : '-mr-';
        $this->margin = $marginDirection . ceil($size/5);
    }

    /**
     * Try to retrieve a qualified url from the model
     *
     * @param $model
     * @return string
     */
    public function urlFromSource($model): string
    {
        if(isset($model->{$this->sourceFrom}) && filter_var($model->{$this->sourceFrom}, FILTER_VALIDATE_URL)) {
            return $model->{$this->sourceFrom};
        }

        return '';
    }

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('components.avatars-stack');
    }
}
