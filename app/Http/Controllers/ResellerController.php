<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reseller;

class ResellerController extends Controller
{
    public function store(Request $request) {
    	$request->validate([
    		'name' => 'required|max:50',
    		'company' => 'required',
    		'email' => 'required|email',
    		'phone' => 'required|numeric',
    		'employe_category' => 'required',
    		'project_detail' => 'required'
    	]);

    	$new = new Reseller;
    	$new->name = $request->name;
    	$new->company = $request->company;
    	$new->email = $request->email;
    	$new->phone = $request->phone;
    	$new->employe_category = $request->employe_category;
    	$new->project_detail = $request->project_detail;

    	if ($new->save()) {
    		return back()->with(['type'=>'success','message'=>'Your request has been received!']);
    	}

    	return back()->with(['type'=>'error','message'=>'something went wrong try again!']);
    }
}
