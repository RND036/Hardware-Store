<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\Supplier; 
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if a product has fillable attributes.
     */
    public function test_it_has_fillable_attributes()
    {
        $product = new Product();

        $this->assertEquals([
            'product',
            'name',
            'category',
            'quantity',
            'stocks',
            'buying price',
            'selling price',
            'profit',
            'supplier_id',
        ], $product->getFillable());
    }

    /**
     * Test if a product belongs to many orders.
     */
    public function test_it_belongs_to_many_orders()
    {
        $product = new Product();

        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Relations\BelongsToMany::class, $product->orders());
    }

    /**
     * Test if a product can be created successfully.
     */
    public function test_it_can_create_a_product()
    {
        // Create a supplier first
        $supplier = Supplier::create([
            'name' => 'Example Supplier',
            
        ]);

        // Now create a product using the supplier's ID
        $product = Product::create([
            'product' => 'Product A',
            'name' => 'Example Product',
            'category' => 'Electronics',
            'quantity' => 10,
            'stocks' => 100,
            'buying price' => 50.00,
            'selling price' => 75.00,
            'profit' => 25.00,
            'supplier_id' => $supplier->id, // Use the supplier's ID
        ]);

        $this->assertInstanceOf(Product::class, $product);
        $this->assertEquals('Product A', $product->product);
        $this->assertEquals('Example Product', $product->name);
        $this->assertEquals(10, $product->quantity);
    }
}
