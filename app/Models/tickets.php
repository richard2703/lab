<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tickets extends Model
{
    use HasFactory;
    protected $table = "tickets";

    public $timestamps = true;

    protected $fillable = [
        'paciente_id', 'maquila_id', 'total', 'abono', 'doctor'
    ];
    public function examenes()
    {
        return $this->belongsToMany(examenes::class, 'tomas');
    }
}
