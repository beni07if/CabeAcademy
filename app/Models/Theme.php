<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;
    protected $fillable = [
        'theme'
    ];

    public function topics()
    {
        return $this->hasMany(Topic::class);
    }
}
