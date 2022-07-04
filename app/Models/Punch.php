<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Punch extends Model
{

    use HasFactory;

    function pic()
    {
        // return $this->hasMany(PunchPic::class);
        return $this->hasOne(PunchPic::class);
    }

}
