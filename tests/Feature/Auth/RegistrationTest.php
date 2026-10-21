<?php

use App\Models\User;
use App\Providers\RouteServiceProvider;

test('registration screen can be rendered', function () {
    $response = $this->get('/register');

    $response->assertStatus(200);
});

test('new users can register', function () {
    $response = $this->post('/register', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $response->assertRedirect(RouteServiceProvider::HOME);
    $response->assertCookie('access_token');
    $response->assertCookie('refresh_token');

    $user = User::where('email', 'test@example.com')->firstOrFail();

    $this->assertDatabaseHas('refresh_tokens', [
        'user_id' => $user->id,
        'revoked_at' => null,
    ]);
});
