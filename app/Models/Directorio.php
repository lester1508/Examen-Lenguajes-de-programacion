<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directorio extends Model
{
    use HasFactory;

    public $table = 'directorio';
    public $primaryKey = 'codigoEntrada';
    public $incrementing = false; 
    public $keyType = 'string'; 

    public $fillable = [
        'codigoEntrada',
        'nombre',
        'apellido',
        'correo',
        'telefono'
    ];
}

