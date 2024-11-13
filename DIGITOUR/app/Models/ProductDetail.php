<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $table = 'product_details';

    protected $fillable = ['disponible', 'perfil_id', 'producto_id'];

    public $timestamps=false;

    // Un detalle de producto pertenece a un perfil
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    // Un detalle de producto pertenece a un producto
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
