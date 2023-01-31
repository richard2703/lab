<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parametros extends Model
{
    use HasFactory;
    protected $table = "parametros";

    public $timestamps = false;

    protected $fillable = [
        'nombre', 'bajo', 'alto', 'referencia', 'tipo', 'medicion'
    ];
    public function examenes()
    {
        return $this->belongsToMany(examenes::class, 'examenParametro');
    }
}
