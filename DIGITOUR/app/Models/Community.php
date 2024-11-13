<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;

    protected $table = 'communities';

    protected $fillable = ['nombre', 'localidad'];

    public $timestamps=false;

    // Una comunidad pertenece a una comuna
    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }
}
