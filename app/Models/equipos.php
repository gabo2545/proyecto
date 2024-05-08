<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipos extends Model
{
    use HasFactory;
    protected $fillable = [
        'etiquetas',
        'FK_tipo_equipos'

    ];
    public function tipo_equipos()
    {
        return $this->belongsTo(roles::class,'FK_tipo_equipos');
    }
}
