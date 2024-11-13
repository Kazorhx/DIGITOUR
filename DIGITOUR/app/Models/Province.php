<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $table = 'provinces';

    protected $fillable = ['nombre', 'region_id'];

    public $timestamps=false;
    
    // Una provincia pertenece a una región
    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    // Una provincia puede tener muchas comunas
    public function commune()
    {
        return $this->hasMany(Commune::class);
    }
}
