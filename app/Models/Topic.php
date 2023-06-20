<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $fillable = [
        'theme_id', 'type_source', 'topic'
    ];

    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }

    public function Progress()
    {
        return $this->hasMany(Progress::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function Document()
    {
        return $this->hasMany(Document::class);
    }
    public function TopicUser()
    {
        return $this->hasMany(TopicUser::class);
    }
}
