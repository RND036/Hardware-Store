<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase; // Reset the database for each test

    public function test_create_user_success()
    {
        $response = $this->postJson('/api/auth/register', [
            'name' => 'Test User',
            'email' => 'testuser@example.com',
            'password' => 'password123',
            'phone' => '1234567890',
            'address' => '123 Test St',
            'dob' => '2000-01-01'
        ]);

        $response->assertStatus(200)
            ->assertJson([
                'status' => true,
                'message' => 'User Created Successfully',
            ]);
    }

   

    public function test_login_user_success()
    {
        // Create a user first
        $this->postJson('/api/auth/register', [
            'name' => 'Test User',
            'email' => 'testuser@example.com',
            'password' => 'password123',
            'phone' => '1234567890',
            'address' => '123 Test St',
            'dob' => '2000-01-01'
        ]);

        $response = $this->postJson('/api/auth/login', [
            'email' => 'testuser@example.com',
            'password' => 'password123'
        ]);

        $response->assertStatus(200)
            ->assertJson([
                'status' => true,
                'message' => 'User Logged In Successfully', // Adjusted to match actual response
            ])
            ->assertJsonStructure(['token']); // Check if the token exists
    }

   

    public function test_login_user_invalid_credentials()
    {
        $response = $this->postJson('/api/auth/login', [
            'email' => 'nonexistent@example.com',
            'password' => 'wrongpassword'
        ]);

        $response->assertStatus(401)
            ->assertJson([
                'status' => false,
                'message' => 'Email & Password does not match with our record.',
            ]);
    }
}
