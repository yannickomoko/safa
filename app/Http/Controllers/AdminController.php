<?php

namespace App\Http\Controllers;

use App\Models\BonPlan;
use App\Models\Marque;
use App\Models\TypeCar;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function listMarque()
    {
        $data['getRecord'] = Marque::getMarque();
        return view('admin.marques.list',$data);
    }

    public function createMarque(Request $request)
    {
        $mar_data = new Marque();
        $mar_data->name = $request->name;
        $mar_data->slug = $request->slug;
        $mar_data->save();

        return redirect('admin/marques')->with('successfully', 'Marque Successfully created');
    }

    public function editMarque(Request $request, $id)
    {
        $mar_data = Marque::getMarque();
        $mar_data = Marque::getMarqueId($id);
        $mar_data->name = $request->name;
        $mar_data->slug = $request->slug;
        $mar_data->save();
         
        return redirect('admin/marques')->with('success', 'Marque Successfully updated');
    }

    public function deleteMarque($id)
    {
        $mar_data = Marque::getMarqueId($id);
        $mar_data->delete();
         
        return redirect('admin/marques')->with('success', 'Marque Successfully deleted');
    }

    public function listBonplan()
    {
        $data['getRecord'] = BonPlan::getBon();
       // dd($data['getRecord']);
        return view('admin.bons-plans.list',$data);
    }

    public function addBonplan()
    {
        $data['getRecord'] = BonPlan::getBon();
        return view('admin.bons-plans.create',$data);
    }

    public function createBonplan(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

        $bon = new BonPlan();

        $bon->titre = $request->titre;
        $bon->lieu = $request->lieu;
        $bon->description = $request->description;
       // $bon->image = $request->file('image')->getClientOriginalName();
        $bon->image = 'uploads/'.$imageName;                            

        // upload image in public storage folder
       // $path = $request->file('image')->store('public/images');
        //$bon->$path;
        $bon->save();

        return redirect('admin/bonplans')->with('success', 'Bon plan created Successfully');

    }

    public function editBonplan($id)
    {
        $data['getRecord'] = BonPlan::getBonId($id);
        return view('admin.bons-plans.edit',$data);
    }

    public function updateBonplan(Request $request,$id)
    {
         
    }

    public function deleteBonplan($id)
    {
       // $data = BonPlan::getBonId($id);
       // $data->delete();

        //return redirect('admin/bonplans')->with('success', 'BonPlan created Successfully');
    }

    public function listTypeCar()
    {
        $data['getTypeCars'] = TypeCar::getTypeCar();
        return view('admin.type-cars.list',$data);
    }

    public function createTypeCar(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

        $type = new TypeCar();

        $type->name = $request->name;
        $type->image = 'uploads/'.$imageName;

        //dd($type);
        $type->save();

        return redirect('admin/typecars')->with('success', 'Type created Successfully');
    }
    
}
