<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['nombre', 'descripcion', 'codigo'];

    // Un producto puede tener muchos detalles de producto
    public function productDetails()
    {
        return $this->hasMany(ProductDetail::class);
    }

    // Un producto puede tener muchos históricos de precios
    public function priceHistory()
    {
        return $this->hasMany(PriceHistory::class);
    }
}
