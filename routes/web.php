<?php

use App\Controller\ShowHomeController;
use App\Provider\RouteServiceProvider;


Route::view('/', 'front.welcome')->name('welcome');

Route::middleware(['auth', 'verified'])->prefix(RouteServiceProvider::HOME)->group(function () {
    Route::get('/', ShowHomeController::class)->name('home');
});

require __DIR__ . '/auth.php';
