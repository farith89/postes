<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_poste',
        'latitud',
        'longitud',
        'altura',
        'material',
        'estado',
        'comuna',
        'direccion',
        'nivel_tension',
        'observacion',
    ];
    protected $casts = [
        'latitud' => 'decimal:10',
        'longitud' => 'decimal:11',
        'altura' => 'decimal:5',
    ];

}
