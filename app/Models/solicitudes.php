<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicitudes extends Model
{
    use HasFactory;
    protected $fillable = [
        'folio',
        'fechahora',
        'descripcion_problema',
        'estado',
        'FK_equipos',
        'FK_empleados',
        'FK_categoria_areas'
    ];
    public function equipos()
{
    return $this->belongsTo(roles::class,'FK_equipos');
}
    public function empleados()
    {
        return $this->belongsTo(roles::class,'FK_empleados');
    }
    public function categoria_areas()
    {
        return $this->belongsTo(roles::class,'FK_categoria_areas');
    }
}
