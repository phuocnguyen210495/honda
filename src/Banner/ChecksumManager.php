<?php


namespace Starts\Banner;


class ChecksumManager
{
    public function check(string $checksum, array $payload): bool
    {
        return hash_equals($this->generate($payload), $checksum);
    }

    public function generate(array $payload): string
    {
        $hashKey = app('encrypter')->getKey();

        return hash_hmac('sha256', json_encode(array_values($payload), JSON_THROW_ON_ERROR), $hashKey);
    }
}
