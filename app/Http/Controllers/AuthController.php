<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    
    public function login()
    {
       // dd(Hash::make(12345));
        if(Auth::check()){

            redirect('admin/dashboard');
        }
        return view('admin.login');
    }

    public function auth(Request $request)
    {
        if(Auth::attempt(['uname'=> $request->uname, 'password' => $request->password]))
         {
            return redirect('admin/dashboard');
         }
         else
         {
            return redirect()->back()->with('error', 'Please enter current email and password');
         }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('admin/login');
    }

    
}
