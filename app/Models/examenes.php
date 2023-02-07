<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class examenes extends Model
{
    use HasFactory;
    protected $table = "examenes";

    public $timestamps = false;

    protected $fillable = [
        'nombre', 'costo', 'maquila', 'leyenda'
    ];

    public function parametros()
    {
        return $this->belongsToMany(parametros::class, 'examenParametro');
    }
}
