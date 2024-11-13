<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = ['descripcion'];

    public $timestamps=false;

    // Relación uno a muchos con Perfil
    public function profile()
    {
        return $this->hasMany(Profile::class, 'tipoperfil_id');
    }
}
