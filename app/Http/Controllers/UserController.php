<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function list()
    {
        $data['getRecord'] = User::getRecord();
        return view('admin.users.list', $data);
    }

    public function create()
    {
        $data['getRole'] = Role::getRole(); 
        return view('admin.users.create', $data);
    }

    public function store(Request $request)
    {
        $user_data = new User();

        $user_data->name = $request->name;
        $user_data->uname = $request->uname;
        $user_data->phone = $request->phone;
        $user_data->email = $request->email;
        $user_data->role_id = $request->role_id;
        $user_data->password = Hash::make($request->password);

        $user_data->save();

        return redirect('admin/users')->with('success', 'User Successfully created');
    }

    public function edit($id)
    {
        $data['getRole'] = Role::getRole();
        $data['getRecord'] = User::getUserId($id); 
        return view('admin.users.edit', $data);
    }

    public function update(Request $request, $id)
    {
         $user_data = User::getUserId($id);

         $user_data->name = $request->name;
         $user_data->uname = $request->uname;
         $user_data->phone = $request->phone;
         $user_data->email = $request->email;
         $user_data->role_id = $request->role_id;
         $user_data->password = $request->password;

         $user_data->save();

         return redirect('admin/users')->with('success', 'User Successfully updated');
    }

    public function delete($id)
    {
        $user_data = User::getUserId($id);

        $user_data->delete();

        return redirect('admin/users')->with('success', 'User Successfully deleted');
    }
}
