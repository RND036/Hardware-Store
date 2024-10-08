<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class supplier extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'contact number',
        'products',
        'cost',
    ];
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
