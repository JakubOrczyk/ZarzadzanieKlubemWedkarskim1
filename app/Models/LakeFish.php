<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LakeFish extends Model
{
    use HasFactory;


    protected $table = 'lake_fish';

    protected $fillable = [
        'lake_id',
        'fish_id',
    ];

    public $timestamps = true;
}
