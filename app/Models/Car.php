<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';
    protected $fillblade = [
        'name',
        'description',
        'image',
        'make_id',
        'model',
        'price',
        'trans',
        'years',
        'fueltype',
        'mileage',
        'seats',
        'doors',
        'bodytype',
        'engine',
        'exterior',
        'interior',
        'statut'
    ];

    static public function getCars()
    {
        return Car::get();
    }

    static public function getCarId($id)
    {
        return Car::find($id);
    }

    static public function getRecord()
    {
        return Car::select('cars.*', 'marques.name as make_name')
                 ->join('marques','marques.id', '=', 'cars.make_id')
                 ->orderBy('cars.id', 'desc')
                 ->get();
    }

    static public function getCarByName($name)
    {
        return Car::where('name',$name)->first();
    }
}
