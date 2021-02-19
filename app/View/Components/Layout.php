<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Starts\Banner\ChecksumManager;

class Layout extends Component
{
    public string $title;
    public string $description;

    public function __construct(string $title, string $description = '')
    {
        $this->title       = $title;
        $this->description = $description;
    }

    public function generateImage(?int $width = null, ?int $height = null)
    {
        $payload = [
            'title'  => $this->title,
            'body'   => $this->description,
            'width'  => $width ?? config('banners.width'),
            'height' => $height ?? config('banners.height'),
        ];

        $checksum = app(ChecksumManager::class)->generate($payload);

        return route('generate-banner') . '?' . http_build_query(array_merge($payload, ['checksum' => $checksum]));
    }

    public function render()
    {
        return view('components.layout');
    }
}
