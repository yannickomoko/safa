<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Marque;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['getRecord'] = Car::getRecord();
        return view('admin.cars.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['getMake'] = Marque::getMarque();
        return view('admin.cars.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

        $car = new Car();

        $car->name = $request->name;
        $car->years = $request->years;
        $car->mileage = $request->mileage;
        $car->fueltype = $request->fueltype;
        $car->make_id = $request->make_id;
        $car->engine = $request->engine;
        $car->seats = $request->seats;
        $car->doors = $request->doors; 
        $car->bodytype = $request->bodytype;  
        $car->model = $request->model;
        $car->price = $request->price;
        $car->interior = $request->interior;
        $car->exterior = $request->exterior;
        $car->trans = $request->trans;
        $car->description = $request->description;
        $car->image = 'uploads/'.$imageName; 

        $car->save();

        return redirect('admin/cars')->with('success', 'Car Successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['getMake'] = Marque::getMarque();
        $data['getRecord'] = Car::getCarId($id);
        return view('admin.cars.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

        $car = Car::getCarId($id); 

        $car->name = $request->name;
        $car->years = $request->years;
        $car->mileage = $request->mileage;
        $car->fueltype = $request->fueltype;
        $car->make_id = $request->make_id;
        $car->engine = $request->engine;
        $car->seats = $request->seats;
        $car->doors = $request->doors;
        $car->bodytype = $request->bodytype;
        $car->model = $request->model;
        $car->price = $request->price;
        $car->interior = $request->interior;
        $car->exterior = $request->exterior;
        $car->trans = $request->trans;
        $car->description = $request->description;
        $car->image = 'uploads/'.$imageName; 

        $car->save();

        return redirect('admin/cars')->with('success', 'Car updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $car = Car::getCarId($id);
        $car->delete();

        return redirect('admin/cars')->with('success', 'Car Successfully deleted');
    }
}
