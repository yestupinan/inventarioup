<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caracteristicas extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_caracteristica';
    public $timestamps = false;

    protected $fillable = [
        'id_ordenador',
        'office',
        'so',
        'serial_cpu',
        'serial_monitor',
        'serial_teclado',
        'serial_mouse',
        'serial_disco_duro_mecanico',
        'serial_disco_solido',
        'camara_web',
        'estabilizadores',
        'cpu',
        'ram',
    ];
}
