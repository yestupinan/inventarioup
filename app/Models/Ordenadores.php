<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordenadores extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_ordenador';
    public $timestamps = false;
    
    public function caracteristicas()
    {
        return $this->hasMany(Caracteristicas::class, 'id_ordenador');
    }

    public function observaciones()
    {
        return $this->hasMany(Observaciones::class, 'id_ordenador');
    }

    protected $fillable = [
        'id_salon',
        'numero_en_salon',
        'mac',
    ];
}
