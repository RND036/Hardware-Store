<?php

namespace Tests\Unit;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if a user can be created successfully.
     *
     * 
     */
    public function test_it_can_create_a_user()
    {
        $user = User::create([
            'name' => 'Alice',
            'email' => 'alice@example.com',
            'password' => bcrypt('password123'), // Password should be hashed
            
            'is_admin' => false,
        ]);

        $this->assertDatabaseHas('users', [
            'name' => 'Alice',
            'email' => 'alice@example.com',
        ]);
    }

    /**
     * Test if a user can access the admin panel.
     *
     * 
     */
    public function test_user_can_access_admin_panel()
    {
        $adminUser = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password123'),
           
            'is_admin' => true,
        ]);

        $regularUser = User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => bcrypt('password123'),
           
            'is_admin' => false,
        ]);

        $this->assertTrue($adminUser->canAccessPanel(new \Filament\Panel()));
        $this->assertFalse($regularUser->canAccessPanel(new \Filament\Panel()));
    }

    /**
     * Test if a user can have one customer.
     *
     * 
     */
    public function test_user_can_have_one_customer()
    {
        $user = User::create([
            'name' => 'Charlie',
            'email' => 'charlie@example.com',
            'password' => bcrypt('password123'),
            
            'is_admin' => false,
        ]);

        $customer = Customer::create([
            'name' => 'Customer One',
            'email' => 'customer1@example.com',
            'user_id' => $user->id,
        ]);

        $this->assertInstanceOf(Customer::class, $user->customer);
        $this->assertEquals($user->customer->id, $customer->id);
    }
}
