<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria_areas extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombrearea'
    ];
}
