<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class examenParametro extends Model
{
    use HasFactory;
    protected $table = "examenParametro";

    public $timestamps = false;

    protected $fillable = [
        'examen_id', 'parametro_id'
    ];
}
