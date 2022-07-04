<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PunchMachine extends Model
{
    use HasFactory;

    protected $fillable = [
        'punch_id',
        'machine_id'
    ];

    function machine()
    {
        return $this->hasOne(Machine::class);
    }
}
