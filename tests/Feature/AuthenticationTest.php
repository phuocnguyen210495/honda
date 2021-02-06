<?php

namespace Tests\Feature;

use App\Model\User;
use App\Provider\RouteServiceProvider;

it('can render login screen', function () {
    $response = $this->get('/login');

    $response->assertStatus(200);
});

it('can authenticated users using the login screen', function () {
    $user = User::factory()->create();

    $response = $this->post('/login', [
        'email'    => $user->email,
        'password' => 'password',
    ]);

    $this->assertAuthenticated();
    $response->assertRedirect(RouteServiceProvider::HOME);
});

it('can not authenticated users with invalid password', function () {
    $user = User::factory()->create();

    $this->post('/login', [
        'email'    => $user->email,
        'password' => 'wrong-password',
    ]);

    $this->assertGuest();
});
