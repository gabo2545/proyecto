<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seguimientos extends Model
{
    use HasFactory;
    protected $fillable = [
        'fechahora_inicio',
        'fechahora_final',
        'tipomantenimiento',
        'observacion',
        'FK_empleados',
        'FK_solicitudes'
    ];
    public function empleados()
    {
        return $this->belongsTo(roles::class,'FK_empleados');
    }
    public function solicitudes()
    {
        return $this->belongsTo(roles::class,'FK_solicitudes');
    }
}
