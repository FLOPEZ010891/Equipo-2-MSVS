<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumReply extends Model
{
    use HasFactory;

    /**
     * Las columnas que pueden ser asignadas masivamente.
     */
    protected $fillable = [
        'post_id',
        'user_id',
        'user_name',
        'content',
    ];

    /**
     * Relación inversa: cada respuesta pertenece a un post.
     */
    public function post()
    {
        return $this->belongsTo(ForumPost::class);
    }

    /**
     * Relación inversa: cada respuesta pertenece a un usuario.
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
