<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class BackendAuthController extends Controller
{
    public function login(Request $request){

        if (Auth::guard('admin')->check()){
            return redirect()->route('admin.dashboard');
        }

        return view('admin.login', ['backendlogin'=>0]);
    }
    public function authenticate(Request $request){
        
        if (Auth::guard('admin')->check()){
            return redirect()->route('admin.dashboard');
        }

        if($request->isMethod('post')){
            
            $credentials = $request->validate([
                'email'=> "required|email|max:225",
                'password'=> 'required',
            ]);

            if(Auth::guard('admin')->attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->route('admin.dashboard');
                
            }

            return back()->withErrors(
                ['email' => 'The provided credentials do not match our records',]
            )->onlyInput('email');
        }
    }


    public function logout(Request $request){

        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('adminlogin');

    }
}
