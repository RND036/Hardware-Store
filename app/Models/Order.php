<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
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
    ];
    // Relationship: An Order belongs to a Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Relationship: An Order belongs to many Products (Many-to-Many)
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

}
