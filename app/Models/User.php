<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    function bus(){
        $this->hasMany(Bus::class);
    }
    function place(){
        $this->hasOne(Place::class);
    }
}
