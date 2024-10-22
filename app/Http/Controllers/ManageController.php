<?php

namespace App\Http\Controllers;

use App\Models\BonPlan;
use App\Models\Car;
use App\Models\TypeCar;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function homepage()
    {
        $data['getCars'] = Car::getCars();
        $data['getBons'] = BonPlan::getBon();
        return view('frontend.home', $data);
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function location()
    {
        $data['getCars'] = Car::getCars();
        $data['getTypeCars'] = TypeCar::getTypeCar();
        return view('frontend.location-voiture', $data);
    }

    public function CarDetail($name)
    {
        $car_detail = Car::getCarByName($name); 
        //dd($detail);
        return view('frontend.car_detail')->with('car_detail',$car_detail);
    }
}
