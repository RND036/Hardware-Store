<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get the currently authenticated user's customer ID
        $customerId = Auth::user()->customer->id;

        // Retrieve orders for the customer with the products relationship eager loaded
        $orders = Order::where('customer_id', $customerId)->get();
        
        // Pass the orders to the view
        return view('orders.index', compact('orders'));
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Retrieve a single order by ID with products relationship
        $order = Order::findOrFail($id);
        
        // Pass the order to the view
        return view('orders.show', compact('order'));
    }
    public function showOrders()
{
    $customerId = Auth::user()->customer->id;

    $orderData = Order::select(DB::raw('SUM(cost) as total_cost'), DB::raw('MONTH(created_at) as month'))
        ->where('customer_id', $customerId)
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->pluck('total_cost', 'month')
        ->toArray();

    // Ensure all months are included in the data
    $months = ['1' => 'Jan', '2' => 'Feb', '3' => 'Mar', '4' => 'Apr', '5' => 'May', '6' => 'Jun', '7' => 'Jul', '8' => 'Aug', '9' => 'Sep', '10' => 'Oct', '11' => 'Nov', '12' => 'Dec'];
    $data = array_fill_keys(array_values($months), 0);

    foreach ($orderData as $month => $totalCost) {
        $monthName = $months[$month];
        $data[$monthName] = $totalCost;
    }

    return view('components.welcome', [
        'data' => $data
    ]);
}
}