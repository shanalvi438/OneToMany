<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Girl extends Model
{
    use HasFactory;

    protected $table = 'girls';

    protected $primary_key = 'id';

    protected $fillable = ['name'];
    public function boys()
    {
        return $this->hasMany(Boy::class);
    }

    
}
