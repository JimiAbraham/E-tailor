<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;


class authController extends Controller
{
    public function Login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            
             return redirect()->intended('dashboard')
                 ->withSuccess('Signed in');
        }
  
        return back()->withSuccess('Login details are not valid');
    }



    public function Registration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:3',

        ]);


        

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),


        ]);

        return redirect("login")->withSuccess('Great! You have Successfully Registered, Login Now');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('login');
    }

}
