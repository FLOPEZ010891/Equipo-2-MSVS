<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class ForumPost extends Model
{
    use HasFactory;


    /**
     * Las columnas que pueden ser asignadas masivamente.
     */
    protected $fillable = [
        'user_id',
        'user_name',
        'content',
        'published_at',
    ];

    /**
     * Castear columnas a tipos específicos.
     */
    protected $casts = [
        'published_at' => 'datetime',
    ];

    /**
     * Relación: un post puede tener muchas respuestas.
     */
    public function replies()
    {
        return $this->hasMany(ForumReply::class, 'post_id');
    }

    /**
     * Relación inversa: un post pertenece a un usuario.
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    /**
     * Accesor para obtener el nombre del usuario relacionado.
     */
    public function getUserNameAttribute()
    {
        return $this->user->name ?? 'Usuario desconocido';
    }
}

