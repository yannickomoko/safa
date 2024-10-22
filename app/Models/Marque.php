<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    use HasFactory;

        protected $table = 'marques';
        protected $fillblade = [
            'name',
            'slug',
        ];

         
                 
    static public function getMarque()
    {
        return Marque::get();
    }
      
    static public function getMarqueId($id)
    {
        return Marque::find($id);
    }
}
