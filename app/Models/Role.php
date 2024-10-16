<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = "roles";
    
    protected $fillable = [
        'code',
        'name'
    ];

    static public function getRole()
    {
        return Role::get();
    }

    static public function getRoleId($id)
    {
        return Role::find($id);
    }
}
