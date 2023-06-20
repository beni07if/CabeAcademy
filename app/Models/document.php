<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class document extends Model
{
    use HasFactory;
    protected $fillable = [
        'topic_id', 'file_name'
    ];

    public function Topic(){
        return $this->belongsTo(Topic::class)
    }
}
