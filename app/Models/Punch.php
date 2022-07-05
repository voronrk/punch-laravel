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
        return $this->belongsToMany(Product::class, 'punch_products');
    }
    
    function materials()
    {
        return $this->belongsToMany(Material::class, 'punch_materials');
    }
    
    function machines()
    {
        return $this->belongsToMany(Machine::class, 'punch_machines');
    }

    function productsCreate()
    {
        return $this->hasMany(PunchProduct::class);
    }
    
    function materialsCreate()
    {
        return $this->hasMany(PunchMaterial::class);
    }
    
    function machinesCreate()
    {
        return $this->hasMany(PunchMachine::class);
    }

}
