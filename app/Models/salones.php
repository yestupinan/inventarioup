<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salones extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_salon';

    public $timestamps = false;

    public function ordenadores()
    {
        return $this->hasMany(Ordenadores::class, 'id_salon');
    }
}
