<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $table = 'vouchers';

    protected $fillable = [
        'fecha_emision', 'fecha_validacion', 'url', 'rut',
        'nombre_cliente', 'estado_voucher_id', 'oferta_id'
    ];

    public $timestamps=false;

    // Un voucher pertenece a un estado de voucher
    public function voucherStatus()
    {
        return $this->belongsTo(VoucherStatus::class);
    }

    // Un voucher pertenece a una oferta
    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }

    // Un voucher pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
