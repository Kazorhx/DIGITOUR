<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    // Nombre de la tabla asociada al modelo
    protected $table = 'offers';

    // Lista de atributos que se pueden asignar masivamente
    protected $fillable = [
        'descripcion',
        'fechainicio',
        'fechavencimiento',
        'tiempoenfriamiento',
        'cantidadvoucher',
        'tipooferta_id',
        'id_perfil' // Relación con el perfil
    ];

    // Indica que no se usarán las columnas created_at y updated_at
    public $timestamps = false;

    /**
     * Relaciones
     */

    // Relación: Una oferta pertenece a un tipo de oferta
    public function offerType()
    {
        return $this->belongsTo(OfferType::class, 'tipooferta_id');
    }

    // Relación: Una oferta puede tener muchos vouchers
    public function vouchers()
    {
        return $this->hasMany(Voucher::class);
    }

    // Relación: Una oferta pertenece a un perfil
    public function profile()
    {
        return $this->belongsTo(Profile::class, 'id_perfil');
    }
}
