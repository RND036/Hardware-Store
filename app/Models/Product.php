<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'product',
        'name',
        'category',
        'quantity',
        'stocks',
        'buying price',
        'selling price',
        'profit',
        'supplier_id',
    ];
     // Relationship: A Product belongs to many Orders (Many-to-Many)
     public function orders()
     {
         return $this->belongsToMany(Order::class);
     }
}
