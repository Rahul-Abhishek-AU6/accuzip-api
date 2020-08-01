<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function store(Request $request) {
    	$request->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'phone' => 'required|numeric',
    		'order_no' => 'required|numeric',
    		// 'message' => 'required'
    	]);

    	$con = new Contact;
    	$con->name = $request->name;
    	$con->email = $request->email;
    	$con->phone = $request->phone;
    	$con->order_no = $request->order_no;
    	$con->message = $request->message;



    	if ($con->save()) {

            return redirect()->route('success.message')->with(['type'=>'success','message'=>'Data submited!']);
    		// return back()->with(['type'=>'success','message'=>'Data submited!']);
    	}
        return redirect()->route('success.message')->with(['type'=>'error','message'=>'Something went wring please try again']);
    	// return back()->with(['type'=>'error','message'=>'Something went wring please try again']);
    }
}
