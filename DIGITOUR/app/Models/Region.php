<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $table = 'regions';

    protected $fillable = ['nombre'];

    // Una región puede tener muchas provincias
    public function province()
    {
        return $this->hasMany(Province::class);
    }
}
