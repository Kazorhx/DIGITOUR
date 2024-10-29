<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    protected $fillable = [
        'fechacreacion', 'tema', 'descripcion', 'redessociales',
        'datoscontacto', 'geolocalizacion', 'tipoperfil_id', 'usuario_id'
    ];

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
}
