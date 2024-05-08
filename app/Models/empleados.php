<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_empleado',
        'apellido_paterno',
        'apellido_materno',
        'telefono',
        'FK_categoria_cargos',
        'FK_categoria_areas',
        'FK_usuarios'
    ];
    public function categoria_cargos()
    {
        return $this->belongsTo(roles::class,'FK_categoria_cargos');
    }
    public function categoria_areas()
    {
        return $this->belongsTo(roles::class,'FK_categoria_areas');
    }
    public function usuarios()
    {
        return $this->belongsTo(roles::class,'FK_usuarios');
    }
}
