<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unidaddesalud extends Model
{
    use HasFactory;
    protected $table = 'unidaddesalud';
    protected $fillable =[
        'Nombre',
        'Ubicación',
        'Especialidades',
        'domicilio',
        'telefono',
        'horarioAtencion',
        'email',
    ];
}
