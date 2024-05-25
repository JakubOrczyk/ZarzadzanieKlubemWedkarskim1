<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    use HasFactory;

    protected $fillable = [
        'species', 'type', 'image'
    ];

    public $timestamps = true;

    protected $table = 'fishes';

    public function lakes()
    {
        return $this->belongsToMany(Lake::class, 'lake_fish');
    }
}
