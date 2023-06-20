<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimelineShortCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'month', 'week', 'description'
    ];
}
