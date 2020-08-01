<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
use Illuminate\Support\Facades\Storage;
use Session;
use App\AttributeValue;
use App\StoreAddress;
use App\ProductAttributeValue;

class CartController extends Controller
{

    public function index() {
        if (Cart::isEmpty()) {
            return redirect('/');
        }
        return view('cart');
    }

    public function addCart(Request $request, $id) {
        // return $request;
        $request->validate([
            // 'size' => 'required',
            'paper_stock' => 'required',
            // 'format' => 'required',
            // 'finish' => 'required',
            'quantity' => 'required',
            'turnaround_time' => 'required',
        ]);
        
        $price = 0;
        foreach ($request->all() as $key => $value) {

            if (substr($key,-6) != '_value') {
                $parm = $key.'_value';
                $price += ProductAttributeValue::where(['product_attributes_id'=>$request->$parm,'attribute_value_id'=>$value])->first()->price;
            }            
            
        }
        
        $pro = Product::where('id',$id)->with('images')->first();
        


        Cart::add(array(
            'id' => $pro->id, 
            'name' => $pro->name,
            'price' => $pro->msp+$price,
            'quantity' => 1,
            'attributes' => array(
                'image'=>$pro->images->first()->image??'',
                'size' => AttributeValue::find($request->size)->value?? 'N/A',
                'paper_stock' => AttributeValue::find($request->paper_stock)->value??'N/A',
                'formate' => AttributeValue::find($request->format)->value??'N/A',
                'finish' => AttributeValue::find($request->finish)->value??'N/A',
                'quentity' => AttributeValue::find($request->quantity)->value??'N/A',
                'tourn_around_time' => AttributeValue::find($request->turnaround_time)->value??'N/A',
            )
        ));

        return back()->with(['type'=>'success','message'=>'Product Added In Cart!']);

    }

    public function updateCart(Request $request) {
        Cart::update($request->id, array(
          'quantity' => array(
                'relative' => false,
                'value' => $request->quantity
            ), 
        ));

        return back()->with(['type'=>'success','message'=>'Cart updated!']);
    }

    public function removeCart($id) {

        Cart::remove($id);

        return back()->with(['success'=>'success','message'=>'Item Removed!']);

    }

    public function destroyCart() {
        Cart::clear();

        return back()->with(['type'=>'success','message'=>'Cart is clear now!']);
    }

    public function uploDesign(Request $request,$id) {
        $imagePath = Storage::put('uploaded-design', $request->file);

        return response()->json($imagePath);
    }

    
}
