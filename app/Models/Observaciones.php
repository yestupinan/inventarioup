<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observaciones extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_observacion';
    public $timestamps = false;

    protected $fillable = [
        'id_ordenador',
        'fecha',
        'observacion',
    ];
}
