<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $table = 'offers_table';

    protected $fillable = [
        'descripcion', 'fechainicio', 'fechavencimiento', 'tiempoenfriamiento',
        'cantidadvoucher', 'tipooferta_id'
    ];

    // Una oferta pertenece a un tipo de oferta
    public function offerType()
    {
        return $this->belongsTo(OfferType::class);
    }

    // Una oferta puede tener muchos vouchers
    public function voucher()
    {
        return $this->hasMany(Voucher::class);
    }
}
