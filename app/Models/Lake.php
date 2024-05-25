<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lake extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'location', 'type', 'image'
    ];

    public $timestamps = true;

    protected $table = 'lakes';

    public function fishes()
    {
        return $this->belongsToMany(Fish::class, 'lake_fish');
    }

    public function tournaments()
    {
        return $this->hasMany(Tournament::class);
    }
}
