<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $table = 'permission';


    static public function getRecord()
    {
        $getRole = Permission::groupBy('groupby')->get();
        
        $result = array();
        foreach ($getRole as $value)
        {
            $getPermissionGroup = Permission::getPermissionGroup($value->groupby);
            $data = array();
            $data['id'] = $value->id;
            $data['name'] = $value->name;
            $group = array();
            foreach ($getPermissionGroup as $valueG)
            {
                $dataG = array();
                $dataG['id'] = $valueG->id;
                $dataG['name'] = $valueG->name;
                $group[] = $dataG;
            }
            $data['group'] = $group;
            $result[] = $data;
        }

        return $result;
    }

    static public function getPermissionGroup($groupby)
    {
       return Permission::where('groupby', '=', $groupby)->get();
    }

    static public function getId($id)
    {
        return Permission::find($id);
    }
}
