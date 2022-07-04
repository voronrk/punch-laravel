<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Punch extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'ordernum',
        'year',
        'size_length',
        'size_width',
        'size_height',
        'knife_size_length',
        'knife_size_width',
    ];

    function pics()
    {
        return $this->hasMany(PunchPic::class);
    }

    function products()
    {
        return $this->hasMany(PunchProduct::class)->hasOne(Product::class);
    }
    
    function materials()
    {
        return $this->hasMany(PunchMaterial::class)->hasOne(Material::class);
    }
    
    function machines()
    {
        return $this->hasMany(PunchMachine::class)->hasOne(Machine::class);
    }

}
