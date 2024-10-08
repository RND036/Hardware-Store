<?php

namespace Tests\Unit;

use App\Models\Customer;
use App\Models\Order;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CustomerTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_create_a_customer()
    {
        // Ensure there is a user to associate the customer with
        $user = User::create([
            'name' => 'Alice',
            'email' => 'alice@example.com',
            'password' => bcrypt('password123'), // Password should be hashed
        ]);

        $customer = Customer::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'contact_number' => '1234567890',
            'address' => '123 Main St',
            'user_id' => $user->id, // Use the created user's ID
        ]);

        $this->assertDatabaseHas('customers', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
        ]);
    }

    /**
     * Test if a customer belongs to a user.
     */
    public function test_a_customer_belongs_to_a_user()
    {
        $user = User::create([
            'name' => 'Bob',
            'email' => 'bob@example.com',
            'password' => bcrypt('password123'), // Password should be hashed
        ]);

        $customer = Customer::create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'contact_number' => '0987654321',
            'address' => '456 Elm St',
            'user_id' => $user->id,
        ]);

        $this->assertInstanceOf(User::class, $customer->user);
        $this->assertEquals($customer->user->id, $user->id);
    }

    /**
     * Test if a customer can have many orders.
     */
    public function test_a_customer_can_have_many_orders()
    {
        $user = User::create([
            'name' => 'Charlie',
            'email' => 'charlie@example.com',
            'password' => bcrypt('password123'), // Password should be hashed
        ]);

        $customer = Customer::create([
            'name' => 'Tom Smith',
            'email' => 'tom@example.com',
            'contact_number' => '1122334455',
            'address' => '789 Pine St',
            'user_id' => $user->id,
        ]);

        // Create an order associated with the customer
        $order = Order::create([
            'name' => 'Order Name', // Adjust these fields based on your Order model's fillable properties
            'email' => 'customer@example.com',
            'contact number' => '1234567890',
            'products' => 'Sample Product',
            'payment method' => 'Credit Card',
            'cost' => 99.99,
            'address' => '789 Pine St',
            'created_at' => now(),
            'shipping status' => 'Pending',
            'customer_id' => $customer->id,
        ]);

        $this->assertTrue($customer->orders->contains($order));
    }
}
