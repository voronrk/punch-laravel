<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PunchPic extends Model
{
    use HasFactory;

    private $value;

    function punch()
    {
        return $this->belongsTo(Punch::class);
    }
}
