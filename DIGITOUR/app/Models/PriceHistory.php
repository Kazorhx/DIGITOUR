<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceHistory extends Model
{
    use HasFactory;

    protected $table = 'price_histories';

    protected $fillable = ['fechainicio', 'fechafin', 'precio', 'producto_id'];

    // Un histórico de precios pertenece a un producto
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
