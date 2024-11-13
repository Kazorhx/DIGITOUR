<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'nombre', 'email', 'password', 'apellido', 'genero',
        'fechanacimiento', 'telefono', 'direccion', 'rol_id', 'estado_id'
    ];
    public $timestamps=false;
    // Un usuario pertenece a un rol
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    // Un usuario pertenece a un estado de usuario
    public function userStatus()
    {
        return $this->belongsTo(UserStatus::class);
    }

    // Un usuario tiene un perfil
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

}
