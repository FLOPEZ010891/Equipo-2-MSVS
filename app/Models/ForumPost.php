<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class ForumPost extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'user_name', 'content', 'published_at'];

    protected $dates = ['published_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getPublishedAtAttribute($value)
    {
        return Carbon::parse($value);
    }
}

