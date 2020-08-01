<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    public function index(Request $request) {
    	$data = Product::where('name','like','%'.$request->q.'%')->get();
    	return view('search_result',compact('data'));
    }
}
