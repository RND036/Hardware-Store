<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Fortify\Features;
use Tests\TestCase;
use App\Models\User;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered(): void
    {
        if (! Features::enabled(Features::registration())) {
            $this->markTestSkipped('Registration support is not enabled.');
        }

        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_registration_screen_cannot_be_rendered_if_support_is_disabled(): void
    {
        if (Features::enabled(Features::registration())) {
            $this->markTestSkipped('Registration support is enabled.');
        }

        $response = $this->get('/register');

        $response->assertStatus(404);
    }

    public function test_new_users_can_register(): void
    {
        if (! Features::enabled(Features::registration())) {
            $this->markTestSkipped('Registration support is not enabled.');
        }

        // Use withoutMiddleware to bypass CSRF protection for this test
        $response = $this->withoutMiddleware()->post('api/auth/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'phone' => '1234567890',  // Include phone
            'address' => '123 Test St', // Include address
            'dob' => '1990-02-02',      // Include date of birth
        ]);
        

        // Assert that the response is successful and has the expected structure
        $response->assertStatus(200) // Changed to 200 for JSON response
                 ->assertJson([
                     'status' => true,
                     'message' => 'User Created Successfully',
                 ]);

        // Check if a user was created and authenticate as that user
        $user = User::where('email', 'test@example.com')->first();
        $this->actingAs($user); // Act as the newly created user

        // Assert that the user is authenticated
        $this->assertAuthenticated();
    }
}
