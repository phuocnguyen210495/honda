<?php

namespace App\Rule;

use GuzzleHttp\Client;

class Captcha
{
    public bool $empty = false;

    public function validate($attribute, $value): bool
    {
        $data = json_decode((new Client())->post('https://hcaptcha.com/siteverify', [
            'form_params' => [
                'secret'   => config('services.hcaptcha.secret'),
                'response' => $value,
            ],
        ])->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);

        return $data['success'] === true;
    }

    public function message(): string
    {
        return __('validation.captcha');
    }
}
