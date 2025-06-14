<?php

declare(strict_types=1);

namespace Tests\Unit\Models;

test('to array method returns correct attributes', function () {
    $user = \App\Models\User::factory()->create()->refresh();

    expect(array_keys($user->toArray()))->toBe(['id', 'name', 'email', 'email_verified_at', 'created_at', 'updated_at']);
});

test(
    'User model has correct fillable attributes',
    function () {
        $user = new \App\Models\User;
        $fillable = $user->getFillable();

        expect($fillable)->toContain('name');
        expect($fillable)->toContain('email');
        expect($fillable)->toContain('password');  // TODO: como não dá erro?
    }
);
