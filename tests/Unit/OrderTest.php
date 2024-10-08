<?php

namespace Tests\Unit;

use App\Models\Order;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrderTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if an order can have fillable attributes.
     */
    public function test_it_has_fillable_attributes()
    {
        $order = new Order();

        $this->assertEquals([
            'name',
            'email',
            'contact number',
            'products',
            'payment method',
            'cost',
            'address',
            'created_at',
            'shipping status',
            'customer_id',
        ], $order->getFillable());
    }

    /**
     * Test if an order belongs to a customer.
     */
    public function test_it_belongs_to_a_customer()
    {
        $order = new Order();
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Relations\BelongsTo::class, $order->customer());
    }

    /**
     * Test if an order belongs to many products.
     */
    public function test_it_belongs_to_many_products()
    {
        $order = new Order();
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Relations\BelongsToMany::class, $order->products());
    }

    /**
     * Test if an order can be created successfully with a customer.
     */
    public function test_it_can_create_an_order_with_a_customer()
    {
        // Create a user first
        $user = User::create([
            'name' => 'User Name',
            'email' => 'user@example.com',
            'password' => bcrypt('password'), // Ensure to hash the password
        ]);

        // Create a customer associated with the user
        $customer = Customer::create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'contact_number' => '9876543210',
            'address' => '123 Main St',
            'user_id' => $user->id, // Associate with the created user
        ]);

        // Create an order record
        $order = Order::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'contact number' => '1234567890',
            'products' => 'Sample Product',
            'payment method' => 'Credit Card',
            'cost' => 99.99,
            'address' => '123 Main St',
            'created_at' => now(),
            'shipping status' => 'Pending',
            'customer_id' => $customer->id,
        ]);

        $this->assertInstanceOf(Order::class, $order);
        $this->assertEquals('John Doe', $order->name);
        $this->assertEquals($customer->id, $order->customer_id);
    }
}
