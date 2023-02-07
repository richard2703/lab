<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resultados extends Model
{
    use HasFactory;
    protected $table = "resultados";

    public $timestamps = false;

    protected $fillable = [
        'ticket_id', 'examen_id', 'parametro_id', 'resultado'
    ];
}
