<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProductCategory;

class ProductCategoryContoller extends Controller
{
    public function AllCategory(Request $request){
    	$Data = ProductCategory::all();
    	return view('admin.pro_category.listing',compact('Data'));
    }

    public function AddNew(Request $request){
    	$cat = ProductCategory::where('status',1)->where('parent_id','0')->get();
      	return view('admin.pro_category.add', compact('cat'));
    }

    public function EditCat(Request $request){
        $cat = ProductCategory::where('status',1)->where('parent_id','0')->get();
        $select_cat = ProductCategory::where('status',1)->where('id',$request->id)->first();
        $Data = ProductCategory::where('id',$request->id)->first();
        return view('admin.pro_category.edit', compact('cat','Data','select_cat'));
    }

    public function SaveCategory(Request $request){    	
    	if(isset($request->submit)) {
			$request->validate([
        'parent_id' => 'required',
        'name' => 'required',
        'status' => 'required',           
      ]);	
			$data = new ProductCategory;
			$data->name = $request->name;
        	$data->slug = $request->name;
        	$data->parent_id = $request->parent_id;
            $data->meta_title = $request->meta_title;
            $data->meta_descrption = $request->meta_descrption;
            $data->meta_key = $request->meta_key;
        	$data->status = $request->status;
        	if ($data->save()) {
			       return redirect()->route('category-listing')->with(['message'=>'Insert data successfully','type'=>'success']);
          }
          
        }
    }

    public function UpdateCat(Request $request){     
        if(isset($request->submit)) {
            $request->validate([
        'parent_id' => 'required',
        'name' => 'required',
        'status' => 'required',           
      ]);   
            $data = ProductCategory::find($request->id);
            $data->name = $request->name;
            $data->slug = $request->name;
            $data->parent_id = $request->parent_id;
            $data->meta_title = $request->meta_title;
            $data->meta_descrption = $request->meta_descrption;
            $data->meta_key = $request->meta_key;
            $data->status = $request->status;
            if ($data->save()) {
                   return redirect()->route('category-listing')->with(['message'=>'Updated data successfully','type'=>'success']);
          }
          
        }
    }
}
