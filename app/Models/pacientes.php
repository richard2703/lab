<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pacientes extends Model
{
    use HasFactory;
    protected $table = "pacientes";

    public $timestamps = false;

    protected $fillable = [
        'nombre', 'apellido', 'telefono', 'nacimiento'
    ];
}
