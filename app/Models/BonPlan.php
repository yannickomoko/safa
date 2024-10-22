<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BonPlan extends Model
{
    use HasFactory;

    protected $table = 'bonplans';
    protected $fillblade = [
        'titre',
        'lieu',
        'image',
        'description'
    ];


    static public function getBon()
    {
        return BonPlan::get();
    }

    static public function getBonId($id)
    {
        return BonPlan::find($id);
    }
}
