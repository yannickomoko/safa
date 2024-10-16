<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
    use HasFactory;

    protected $table = 'permission_role';

    static public function InsertUpdateRecord($permission_id, $role_id)
    {
        PermissionRole::where('role_id', '=', $role_id)->delete();

        foreach ($permission_id as $permission_id)
        {
            $data = new PermissionRole();
            $data->permission_id = $permission_id;
            $data->role_id = $role_id;
            $data->save();
        }
    }

    static public function getRolePermission($role_id)
    {
        return PermissionRole::where('role_id', '=', $role_id)->get();
    }
                                              
    static public function getPermission($slug, $role_id)
    {
        return PermissionRole::select('permission_role.id')
                        ->join('permission', 'permission.id', '=', 'permission_role.permission_id')
                        ->where('permission_role.role_id', '=', $role_id)
                        ->where('permission.slug', '=', $slug)    
                        ->count();
    }
}
