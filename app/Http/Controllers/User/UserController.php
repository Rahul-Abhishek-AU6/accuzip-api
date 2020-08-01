<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function UpdateUserInfo(Request $request) {
    	$request->validate([
    		'first_name' => 'required|string',
    		'last_name' => 'required|string'
    	]);

    	$user = Auth::user();
    	$user->first_name = $request->first_name;
    	$user->last_name = $request->last_name;

    	if ($user->save()) {
    		return back()->with(['type'=>'success','message'=>'Profile Updated!']);
    	}

    	return back();
    }

    public function UpdatePassword(Request $request) {
    	
    	$request->validate([
    		'old_password'=> 'required',
    		'password' => 'required|min:8|confirmed'
    	]);

    	if (!Hash::check($request->old_password, Auth::user()->password)) {
    		return back()->with(['type'=>'error','message'=>'Old Password not match!']);
    	}

    	$user = Auth::user();
    	$user->password = bcrypt($request->password);

    	if ($user->save()) {
    		return back()->with(['type'=>'success','message'=>'Password changed!']);
    	}

    	return back();

    }

    public function AddAddress(Request $request) {
    	return back()->with(['type'=>'success','message'=>'Address added successfully!']);
    }
}
