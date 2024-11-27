<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    protected $fillable = [
        'fecha_creacion', 'tema', 'nombre', 'descripcion', 'redes_sociales',
        'datos_contacto', 'url_geolocalizacion', 'categoria_id', 'usuario_id'
    ];

    public $timestamps=false;

    // Un perfil pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Un perfil pertenece a una categoría
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Un perfil puede tener muchos detalles de productos
    public function productDetail()
    {
        return $this->hasMany(ProductDetail::class);
    }

public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}

