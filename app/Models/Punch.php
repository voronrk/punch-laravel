<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Punch extends Model
{
    use HasFactory;

    function pics()
    {
        return $this->hasMany(PunchPic::class);
    }

}
