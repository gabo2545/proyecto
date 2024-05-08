<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class usuarios extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'usuario',
        'contraseña',
        'correo_electronico',
        'FK_roles'
];
    public function roles()
    {
        return $this->belongsTo(roles::class,'FK_roles');
    }
}
