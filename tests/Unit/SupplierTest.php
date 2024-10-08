<?php

namespace Tests\Unit;

use App\Models\Supplier;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SupplierTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test if a supplier has fillable attributes.
     */
    public function test_it_has_fillable_attributes()
    {
        $supplier = new Supplier();

        $this->assertEquals([
            'name',
            'email',
            'contact number',
            'products',
            'cost',
        ], $supplier->getFillable());
    }

    /**
     * Test if a supplier can have many products.
     */
    public function test_it_can_have_many_products()
    {
        $supplier = new Supplier();

        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Relations\HasMany::class, $supplier->products());
    }

    /**
     * Test if a supplier can be created successfully.
     */
    public function test_it_can_create_a_supplier()
    {
        $supplier = Supplier::create([
            'name' => 'Supplier A',
            'email' => 'supplier@example.com',
            'contact number' => '1234567890',
            'products' => 'Product A, Product B',
            'cost' => 100.00,
        ]);

        $this->assertInstanceOf(Supplier::class, $supplier);
        $this->assertEquals('Supplier A', $supplier->name);
        $this->assertEquals('supplier@example.com', $supplier->email);
        $this->assertEquals('1234567890', $supplier->{'contact number'}); 
    }
}
