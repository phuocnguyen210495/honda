<?php

use App\Http\Controllers\ShowHomeController;
use App\Provider\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

Route::view('/', 'front.welcome')->name('welcome');

Route::middleware(['auth', 'verified'])->prefix(RouteServiceProvider::HOME)->group(function () {
    Route::get('/', ShowHomeController::class)->name('home');
});

require __DIR__ . '/auth.php';
