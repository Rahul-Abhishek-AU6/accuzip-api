<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request) {    
        return view('admin.admin-login');           
    }   

    public function adminlogin(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email','password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard')->with(['message'=>'Successfully login','type'=>'success']);
        }

        return back()->with(['message'=>'Please enter correct details','type'=>'error'])->withInput();
        
    }
    
    public function logout() {
       Auth::guard('admin')->logout();
       return redirect()->route('admin-login')->with(['message'=>'Successfully  logout','type'=>'success']);
    }
}
