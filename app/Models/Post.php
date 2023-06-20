<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'topic_id', 'title', 'description', 'comment', 'photo'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
