<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamizaje extends Model
{
    use HasFactory;

    protected $table = 'tamizaje';

    protected $fillable = [
        'user_id',
        'user_name',
        'fecha',
        'pregunta1',
        'pregunta2',
        'pregunta3',
        'pregunta4',
        'pregunta5',
        'pregunta6',
        'pregunta7',
        'pregunta8',
        'pregunta9',
        'pregunta10',
        'pregunta11',
        'pregunta12',
        'pregunta13',
        'pregunta14',
        'pregunta15',
        'pregunta16',
        'pregunta17',
        'pregunta18',
        'pregunta19',
        'pregunta20',
        'puntaje',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
