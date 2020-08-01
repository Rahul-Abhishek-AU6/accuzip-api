<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductAttributeValue;

class CommonController extends Controller
{
    public function getPrice(Request $request) {
    	// return $request;
    	$price = 0;
        foreach ($request->all() as $key => $value) {

        	if ($value) {        		
        		if (substr($key,-6) != '_value') {
	                $parm = $key.'_value';
	                $price += ProductAttributeValue::where(['product_attributes_id'=>$request->$parm,'attribute_value_id'=>$value])->first()->price;
	            }
        	}
                        
            
        }
    	return $price;


    	// $data = ProductAttributeValue::where(['product_attributes_id'=>$attr_id,'attribute_value_id'=>$value_id])->first();
    	// return $data->price;
    }
}
