<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PunchMaterial extends Model
{
    use HasFactory;

    protected $fillable = [
        'punch_id',
        'material_id'
    ];

    function material()
    {
        return $this->hasOne(Material::class);
    }
}
