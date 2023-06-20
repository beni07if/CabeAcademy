<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopicUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'topic_id'
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
