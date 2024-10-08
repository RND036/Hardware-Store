<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrdersControllerTest extends TestCase
{
    use RefreshDatabase; // Use this trait if you want to reset the database after each test

    public function test_display_listing_of_orders()
    {
        // Arrange
        $user = new User();
        $user->name = 'Test User';
        $user->email = 'test@example.com';
        $user->password = bcrypt('password');
        $user->save();

        $customer = new Customer();
        $customer->user_id = $user->id;
        $customer->name = 'Customer Name';
        $customer->email = 'customer@example.com';
        $customer->save();

        $order = new Order();
        $order->customer_id = $customer->id;
        $order->cost = 100;
        $order->created_at = now();
        $order->save();

        // Act
        $response = $this->actingAs($user)->get(route('orders.index'));

        // Assert
        $response->assertStatus(200);
        $response->assertViewHas('orders', function ($orders) use ($order) {
            return $orders->contains($order);
        });
    }

}