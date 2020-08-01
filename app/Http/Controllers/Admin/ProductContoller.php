<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\ProductImage;
use App\ProductAttribute;
use App\ProductAttributeValue;
use App\Attribute;
use App\ProductContent;

class ProductContoller extends Controller
{
    public function AllProduct(Request $request){
    	$Data = Product::all();
    	return view('admin.product.listing',compact('Data'));
    }

    public function AddNew(Request $request){
    	$cat = ProductCategory::where('status',1)->where('parent_id','0')->get();
      	return view('admin.product.add', compact('cat'));
    }

    public function EditProduct(Request $request,$id){
        $cat = ProductCategory::where('status',1)->where('parent_id','0')->get();
       // $select_cat = ProductCategory::where('status',1)->where('id',$request->id)->first();
        $data = Product::find($id);
        return view('admin.product.add', compact('cat','data'));
    }

    public function SaveProduct(Request $request){

        if (!$request->target) {
            $request->validate([
                'name' => 'required',
                'desc' => 'required',
                'status' => 'required'
            ]);

            if ($request->id) {
                $data = Product::find($request->id);
            }else{
                $data = new Product;
            }
            
            $data->name = $request->name;
            // $data->slug = $this->createSlug($request->name);
            $data->descrption = $request->desc;
            $data->status = $request->status;
              
            if ($data->save()) {
                return redirect()->route('admin.product.create','target=price&id='.$data->id)->with(['message'=>'Insert data successfully','type'=>'success']);
            }
        }
        if ($request->target == 'price') {
            $request->validate([
                'mrp' => 'required|numeric',
                'special_price' => 'required|numeric',
                'msp' => 'required|numeric'
            ]);

            $data = Product::find($request->id);

            $data->mrp = $request->mrp;
            $data->msp = $request->msp;
            $data->save();
            return redirect()->route('admin.product.create','target=meta&id='.$data->id)->with(['message'=>'Price Saved','type'=>'success']);
        }

        if ($request->target === 'meta') {

            $request->validate([
                'meta_title' => 'required',
                'meta_keyword' => 'required',
                'meta_descrption' => 'required'
            ]);

            $data = Product::find($request->id);

            $data->meta_title = $request->meta_title;
            $data->meta_key = $request->meta_keyword;
            $data->meta_descrption = $request->meta_descrption;
            $data->save();
            return redirect()->route('admin.product.create','target=image&id='.$data->id)->with(['message'=>'Price Saved','type'=>'success']);
        }

        if ($request->target == 'custom') {
            $imagePath = Storage::put('product', $request->file);

            $image = new ProductImage;
            $image->product_id = $request->id;
            $image->image = $imagePath;
            $image->save();
            return response()->json(['message'=>'Success','path'=>$imagePath]);
        }
    	if ($request->target == 'finish') {

            $inputs = $request->attribute;

            // return ProductAttribute::where(['product_id'=>$request->id,'attribute_id'=>6])->delete();

            // return $request;

            if (!$inputs) {
                ProductAttribute::where('product_id',$request->id)->delete();
                return redirect()->route('admin.product.index')->with(['message'=>'Price Saved','type'=>'success']);
            }


            foreach ($inputs as $key => $value) {  

                $att = ProductAttribute::firstOrNew(['product_id'=>$request->id,'attribute_id'=>$value]);
                $att->status = '1';
                $att->type = $request->type[$key];
                $att->save();

                $attribute = Attribute::find($value);
                $valueVarible = strtolower(str_replace(' ', '_', $attribute->name)).'_value';

                $priceVarible = strtolower(str_replace(' ', '_', $attribute->name)).'price';

                $weightVariable = strtolower(str_replace(' ', '_', $attribute->name)).'weight';
                

                ProductAttributeValue::where('product_attributes_id',$att->id)->delete();
                
                foreach ($request->$valueVarible as $key => $valueAtt) {

                    $price = $request->$priceVarible[$key];
                    $weight = $request->$weightVariable[$key];
                    $pavi = ProductAttributeValue::firstOrNew(['product_attributes_id'=>$att->id,'attribute_value_id'=>$valueAtt]);
                    $pavi->price = $price;
                    $pavi->weight = $weight;

                    $pavi->save();
                }
            }

            return redirect()->route('admin.product.index')->with(['message'=>'Price Saved','type'=>'success']);
        }
                  
    }

    public function saveProductExtra(Request $request) {

        if ($request->image1) {
            $img1path = Storage::put('product-content', $request->image1);

            $img1 = ProductContent::firstOrNew(['product_id'=>$request->id,'key'=>'size1']);
            $img1->title = $request->image1title;
            $img1->body = $request->image1body;
            $img1->image = $img1path;

            $img1->save();
        }

        if ($request->image2) {
            $img1path = Storage::put('product-content', $request->image2);

            $img1 = ProductContent::firstOrNew(['product_id'=>$request->id,'key'=>'size2']);
            $img1->image = $img1path;
            $img1->title = $request->image2title;
            $img1->body = $request->image2body;
            $img1->save();
        }

        if ($request->image3) {
            $img1path = Storage::put('product-content', $request->image3);

            $img1 = ProductContent::firstOrNew(['product_id'=>$request->id,'key'=>'size3']);
            $img1->image = $img1path;
            $img1->title = $request->image3title;
            $img1->body = $request->image3body;
            $img1->save();
        }

        if ($request->ptimage1) {
            $img1path = Storage::put('product-content', $request->ptimage1);

            $img1 = ProductContent::firstOrNew(['product_id'=>$request->id,'key'=>'ptimage1']);
            $img1->image = $img1path;
            $img1->title = $request->ptimage1title;
            $img1->body = $request->ptimage1body;
            $img1->save();
        }

        if ($request->ptimage2) {
            $img1path = Storage::put('product-content', $request->ptimage2);

            $img1 = ProductContent::firstOrNew(['product_id'=>$request->id,'key'=>'ptimage2']);
            $img1->image = $img1path;
            $img1->title = $request->ptimage2title;
            $img1->body = $request->ptimage2body;
            $img1->save();
        }

        if ($request->ptimage3) {
            $img1path = Storage::put('product-content', $request->ptimage3);

            $img1 = ProductContent::firstOrNew(['product_id'=>$request->id,'key'=>'ptimage3']);
            $img1->image = $img1path;
            $img1->title = $request->ptimage3title;
            $img1->body = $request->ptimage3body;
            $img1->save();
        }
        if ($request->ptimage4) {
            $img1path = Storage::put('product-content', $request->ptimage4);

            $img1 = ProductContent::firstOrNew(['product_id'=>$request->id,'key'=>'ptimage4']);
            $img1->image = $img1path;
            $img1->title = $request->ptimage4title;
            $img1->body = $request->ptimage4body;
            $img1->save();
        }
        
        if ($request->quality) {

            $img1 = ProductContent::firstOrNew(['product_id'=>$request->id,'key'=>'quality']);
            $img1->body = $request->quality;
            $img1->save();
        }

        if ($request->reliable) {

            $img1 = ProductContent::firstOrNew(['product_id'=>$request->id,'key'=>'reliable']);
            $img1->body = $request->reliable;
            $img1->save();
        }

        if ($request->speed) {

            $img1 = ProductContent::firstOrNew(['product_id'=>$request->id,'key'=>'speed']);
            $img1->body = $request->speed;
            $img1->save();
        }
        
        if ($request->pst) {

            $img1 = ProductContent::firstOrNew(['product_id'=>$request->id,'key'=>'pst']);
            $img1->body = $request->pst;
            $img1->save();
        }

        return back();
        
    }


    public function DeleteProduct(Request $request){
    	if(Product::find($request->id)){
            $product = Product::find($request->id);
            $product->delete();
            return redirect()->back()->with(['message'=>'Successfully Deleted','type'=>'success']);
        }	
    }

    public function DestroyImage(Request $request, $id) {
        $data = ProductImage::find($id);

        if ($data) {
            $data->delete();
        }
        return back()->with(['type'=>'success','message'=>'Image Deleted!']);
    }

    protected function getRelatedSlugs($slug, $id = 0) {
        return Product::select('slug')->where('slug', 'like', $slug.'%')->where('id', '<>', $id)->get();
    }

    public function createSlug($title, $id = 0) {
        // Normalize the title
        $slug = Str::slug($title, '-');

        // Get any that could possibly be related.
        // This cuts the queries down by doing it once.
        $allSlugs = $this->getRelatedSlugs($slug, $id);

        // If we haven't used it before then we are all good.
        if (! $allSlugs->contains('slug', $slug)){
            return $slug;
        }

        // Just append numbers like a savage until we find not used.
        for ($i = 1; $i <= 10; $i++) {
            $newSlug = $slug.'-'.$i;
            if (! $allSlugs->contains('slug', $newSlug)) {
                return $newSlug;
            }
        }

        throw new \Exception('Can not create a unique slug');
    }

}
