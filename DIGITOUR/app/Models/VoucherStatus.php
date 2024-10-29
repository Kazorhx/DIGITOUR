<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoucherStatus extends Model
{
    use HasFactory;

    protected $table = 'voucher_statuses';

    protected $fillable = ['descripcion'];

    // Un estado de voucher puede tener muchos vouchers
    public function Voucher()
    {
        return $this->hasMany(Voucher::class);
    }
}
