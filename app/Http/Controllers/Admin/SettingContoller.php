<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;

class SettingContoller extends Controller
{
    public function AllProduct(Request $request){
    	$Data = Setting::all();
    	return view('admin.setting.listing',compact('Data'));
    }    

    public function EditProduct(Request $request){
       $Data = Setting::first();
       return view('admin.setting.edit', compact('Data'));
    }

    public function UpdateProduct(Request $request){     
        if(isset($request->submit)) {
            $data = Setting::find($request->id);
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->address = $request->address;
        	$data->facebook_link = $request->facebook_link;
            $data->insta_link = $request->insta_link;
            $data->youtube_link = $request->youtube_link;
            $data->linkedin_link	 = $request->linkedin_link;
            $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       		 ]);
        	$imageName = time().'.'.$request->image->extension(); 
        	//dd(); 
        	$request->image->move(public_path('images'), $imageName);
        	$data->logo = $imageName;
            if ($data->save()) {
            return redirect()->route('setting-listing')->with(['message'=>'Data Updated Successfully','type'=>'success']);
          	}
          
        }
    }
}
