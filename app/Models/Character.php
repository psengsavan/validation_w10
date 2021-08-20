<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public function artist(){
        return $this->belongsTo(Artist::class);
    }
    use HasFactory;
}
