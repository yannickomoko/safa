<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\PermissionRole;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissionRole = PermissionRole::getPermission('Administration système', Auth::user()->role_id);

        if(empty($permissionRole))
        {
            abort(404);
        }
         
        $data['getRecord'] = Role::getRole();
        return view('admin.autorisations.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $getRole = Permission::getRecord();
        $data['getRole'] = $getRole;
        return view('admin.autorisations.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $save_data = new Role();
        $save_data->name = $request->name;
        $save_data->code = $request->code;
        $save_data->save();

        PermissionRole::InsertUpdateRecord($request->permission_id, $save_data->id);

        return redirect('admin/autorisations')->with('success', 'Profil Successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $getRole = Permission::getRecord();
        $data['getRecord'] = Role::getRoleId($id);
        $data['getRole'] = $getRole;
        $data['getRolePermission'] = PermissionRole::getRolePermission($id);
        return view('admin.autorisations.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $save_data = Role::getRoleId($id);
        $save_data->code = $request->code;
        $save_data->name = $request->name;
        $save_data->save();

        PermissionRole::InsertUpdateRecord($request->permission_id, $save_data->id);

        return redirect('admin/autorisations')->with('success', 'Profil successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $save_data = Role::getRoleId($id);
        $save_data->delete();

        return redirect('admin/autorisations')->with('success', 'Profil Successfully deleted');
    }
}
