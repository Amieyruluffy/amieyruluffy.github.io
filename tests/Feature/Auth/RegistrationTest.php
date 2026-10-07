<?php

test('public registration screen is unavailable', function () {
    $response = $this->get('/register');

    $response->assertNotFound();
});

test('visitors cannot create admin accounts', function () {
    $response = $this->post('/register', [
        'name' => 'Amieyrul',
        'email' => 'aamieyruljr@gmail.com',
        'password' => '010921',
        'password_confirmation' => '010921',
    ]);

    $this->assertGuest();
    $response->assertNotFound();
    $this->assertDatabaseMissing('users', ['email' => 'aamieyruljr@gmail.com']);
});
