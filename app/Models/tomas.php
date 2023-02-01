<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tomas extends Model
{
    use HasFactory;
    protected $table = "tomas";

    public $timestamps = false;

    protected $fillable = [
        'ticket_id', 'examen_id', 'estatus'
    ];
}
