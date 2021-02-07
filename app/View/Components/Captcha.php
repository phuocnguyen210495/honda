<?php

namespace App\View\Components;

use App;
use App\Support\Scripts;
use Illuminate\View\Component;
use Illuminate\View\ComponentAttributeBag;

class Captcha extends Component
{
    public string $hl;
    public string $theme;
    public string $size;
    public int $tabindex;
    public bool $first;
    public ?string $label;

    public function __construct(string $hl = null, string $theme = 'light', string $size = 'normal', int $tabindex = 0, string $label = null, bool $first = false)
    {
        $this->hl       = $hl ?? App::currentLocale();
        $this->theme    = $theme;
        $this->size     = $size;
        $this->tabindex = $tabindex;
        $this->first    = $first;
        $this->label    = $label;
    }

    public function render()
    {
        Scripts::push('https://hcaptcha.com/1/api.js&hl=' . $this->hl, new ComponentAttributeBag([
            'async',
            'defer',
        ]));

        return view('components.captcha');
    }
}
