<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware; // Add this line
use Tests\TestCase;

class PasswordConfirmationTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware; // Use WithoutMiddleware to disable CSRF protection

   

    public function test_password_is_not_confirmed_with_invalid_password(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/user/confirm-password', [
            'password' => 'wrong-password',
        ]);

        $response->assertSessionHasErrors(['password']);
    }
}
