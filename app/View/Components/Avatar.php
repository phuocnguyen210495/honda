<?php

namespace App\View\Components;

use Illuminate\View\Component;
use InvalidArgumentException;

class Avatar extends Component
{
    public const STATUSES = ['online', 'idle', 'dnd', 'absent'];
    public const STATUSES_COLOR = [
        'online' => 'green',
        'idle' => 'orange',
        'dnd' => 'red',
        'absent' => 'gray'
    ];

    public string $search;
    public string $src;
    public string $provider;
    public string $fallback;
    public ?string $status;
    public int $size;

    /**
     * Create a new component instance.
     *
     * @param string $search
     * @param string $src
     * @param string $provider
     * @param string $fallback
     * @param string $size
     */
    public function __construct(string $search = null, string $src = null, string $provider = null, string $fallback = null, int $size = 8, string $status =  null)
    {
        if (!$search && !$src) {
            throw new InvalidArgumentException('Both src and search are empty, unable to find an avatar');
        }
        $this->search = $search;
        $this->src = $src;
        $this->provider = $provider;
        $this->fallback = $fallback;
        $this->size = $size;
        // TODO: Make it work
        $this->status = $status !== null ? static::STATUSES_COLOR[$status] : null;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.avatar');
    }

    public function url(): string
    {
        if ($this->src) {
            return $this->src;
        }

        $query = http_build_query(array_filter([
            'fallback' => $this->fallback,
        ]));

        if ($this->provider) {
            return sprintf('https://unavatar.now.sh/%s/%s?%s', $this->provider, $this->search, $query);
        }

        return sprintf('https://unavatar.now.sh/%s?%s', $this->search, $query);
    }
}
