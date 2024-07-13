<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamizaje extends Model
{
    use HasFactory;

    protected $table = 'tamizaje';

    protected $fillable = [
        'IdTamizaje',
        'user_id',
        'user_name',
        'FechaDesespenranza',
        'PuntajeDesesperanza',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
