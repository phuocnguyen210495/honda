<?php

use App\Provider\RouteServiceProvider;
use BladeUI\Icons\Factory;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view(RouteServiceProvider::HOME, 'front.home')->middleware(['auth', 'verified'])->name('home');
Route::view('/', 'front.welcome')->name('welcome');
Route::view('/playground', 'playground')->name('playground');
Route::view('/icons', 'icons', [
    'sets' => app(Factory::class)->all(),
])->name('icons');
require __DIR__ . '/auth.php';
require __DIR__ . '/starts.php';
