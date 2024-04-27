<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boy extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'girl_id',
    ];

    public function girl()
    {
        return $this->belongsTo(Girl::class);
    }
    
}
