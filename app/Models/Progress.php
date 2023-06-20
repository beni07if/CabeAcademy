<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;
    protected $fillable = [
        'topic_id', 'outline', 'draft_report', 'report', 'slide_p', 'comment'
    ];

    public function Topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
