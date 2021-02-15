<?php

use Illuminate\Http\Request;
use Starts\Banner\ChecksumManager;

Route::get('/_/banners/generate', function (Request $request) {
    $checksum = $request->query('checksum');
    $payload = [
        $request->query('title'),
        $request->query('body') ?? '',
        (int)$request->query('width'),
        (int)$request->query('height')
    ];


    abort_if(!app(ChecksumManager::class)->check($checksum, $payload), 400, 'Invalid checksum');

    return \Starts\Banner\Generator::make(...$payload);
})->name('generate-banner');


Route::get('/_/banners/render', function (Request $request) {
    $request->validate(['payload' => 'required|json']);
    $data = json_decode($request->payload, true, 512, JSON_THROW_ON_ERROR);
    $data = array_merge(config('banners'), $data);

    return view('banners::render', $data);
})->name('render-banner');
