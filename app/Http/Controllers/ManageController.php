<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function homepage()
    {
        return view('frontend.home');
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
        return view('frontend.location-voiture');
    }

    public function detail()
    {
        return view('frontend.1');
    }
}
