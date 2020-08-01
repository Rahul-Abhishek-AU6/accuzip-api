<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class CustomloginController extends Controller
{
    public function Logout(Request $request) {
    	Auth::guard('web')->logout();
    	return redirect('/');
    }

    public function Login(Request $request) {
    	$request->validate([
    		'email' => 'required|email',
    		'password' => 'required|min:8'
    	]);

    	$credentials = $request->only('email', 'password');

    	if (Auth::attempt($credentials)) {
            
            return back()->with(['type'=>'success','message'=>'Login successfully']);
        }


        return back()->withErrors(['email' => ['These credentials do not match our records.']])->withInput($request->all());
    }
}
