<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;


    protected $fillable = [
        'name', 'description', 'lake_id'
    ];

    public $timestamps = true;

    protected $table = 'tournaments';

    public function lake()
    {
        return $this->belongsTo(Lake::class);
    }
}
