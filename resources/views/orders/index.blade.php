<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          
<!-- resources/views/orders/index.blade.php -->
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-black border border-black bg-black">
        <thead class="text-xs text-white uppercase bg-gray-800 border-b border-black">
            <tr>
                <th scope="col" class="px-6 py-3">Order ID</th>
                <th scope="col" class="px-6 py-3">Customer Name</th>
                <th scope="col" class="px-6 py-3">Total Cost</th>
                <th scope="col" class="px-6 py-3">Order Date</th>
                <th scope="col" class="px-6 py-3">Address</th>
                <th scope="col" class="px-6 py-3">products</th>
              
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr class="bg-white border-b border-black hover:bg-gray-100">
                <td class="px-6 py-4">
                    {{ $order->id }}
                </td>
                <td class="px-6 py-4">
                    {{ $order->customer->name ?? 'N/A' }}
                </td>
                <td class="px-6 py-4">
                    Rs.{{ number_format($order->cost, 2) }}
                </td>
                <td class="px-6 py-4">
                    {{ $order->created_at->format('Y-m-d') }}
                </td>
                <td class="px-6 py-4">
                    {{ $order->address }}
                </td>
                <td class="px-6 py-4">
                {{ $order->products ?? 'N/A' }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Pagination links if needed -->
</div>
            </div>
        </div>
    </div>
</x-app-layout>

