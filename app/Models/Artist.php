<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    public function character(){
        return $this->hasMany(Caracther::class);
    }
    use HasFactory;
}
