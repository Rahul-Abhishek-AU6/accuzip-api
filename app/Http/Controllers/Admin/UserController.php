<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\User;
class UserController extends Controller
{
    public function AllUser(Request $request){
    	$Data = User::all();
    	return view('admin.user.listing',compact('Data'));
    }
    public function EditUser(Request $request){
    	$Data = User::find($request->id);    	
    	return view('admin.user.edit',compact('Data'));
    }
    public function DeleteUser(Request $request){
    	if(User::find($request->id)){
            $user = User::find($request->id);
            $user->delete();
            return redirect()->back()->with(['message'=>'Successfully Deleted','type'=>'success']);
        }	
    }

}
