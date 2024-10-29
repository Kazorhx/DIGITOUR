<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferType extends Model
{
    use HasFactory;

    protected $table = 'offer_types';

    protected $fillable = ['descripcion'];

    // Un tipo de oferta puede tener muchas ofertas
    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
