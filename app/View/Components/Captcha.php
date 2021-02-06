<?php

namespace App\View\Components;

use App\Support\Scripts;
use Illuminate\View\Component;

class Captcha extends Component
{
    public const PROVIDERS = ['recaptcha', 'hcaptcha'];

    public string $provider;

    public function __construct(string $provider = 'recaptcha')
    {
        $this->provider = $provider;
    }

    public function usingRecaptcha(): void
    {
        Scripts::push('');
    }

    public function usingHcaptcha(): void
    {
        Scripts::push('');
    }

    public function render()
    {
        return view('components.captcha');
    }
}
