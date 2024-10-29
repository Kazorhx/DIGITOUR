<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;

    protected $table = 'communes';

    protected $fillable = ['nombre', 'provincia_id'];

    // Una comuna pertenece a una provincia
    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    // Una comuna puede tener muchas comunidades
    public function community()
    {
        return $this->hasMany(Community::class);
    }
}
