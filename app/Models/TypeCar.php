<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCar extends Model
{
    use HasFactory;

    protected $table = 'typeCar';
    
    protected $fillblade = [
        'name',
        'image'
    ];

    static public function getTypeCar()
    {
        return TypeCar::get();
    }
}
