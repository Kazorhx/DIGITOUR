<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserStatus extends Model
{
    use HasFactory;

    protected $table = 'user_statuses';

    protected $fillable = ['descripcion'];

    public $timestamps=false;
    
    // Un estado de usuario puede tener muchos usuarios
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
