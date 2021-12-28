<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function addProduct(){
        return view('admin.add-product');
    }
    public function savepPoduct(Request $request){
    //  dd($request);
     // exit;
    
       // return $request;
       $data = array();
       $data['product_name'] = $request->product_name;
       $data['category_id'] = $request->category_id;
       $data['manufacture_id'] = $request->manufacture_id;
       $data['product_short_description'] = $request->product_short_description;
       $data['product_long_description'] = $request->product_long_description;
       $data['product_price'] = $request->product_price;
       $data['product_size'] = $request->product_size;
       $data['product_color'] = $request->product_color;
       $data['publication_status'] = isset($request->publication_status)?$request->publication_status:0;
       $image= $request->file('product_image');
       if($image){
           $image_name = Str::random(20);
           $ext = strtolower($image->getClientOriginalExtension());
           $image_fullname = $image_name.'.'.$ext;
           $upload_path ='images';
           $image_url = $upload_path.$image_fullname;
           $success = $image->move($upload_path,$image_fullname);
           //dd($data);
           if($success){
               $data['product_image']=$image_fullname;
               DB::table('tbl_products')->insert($data);
               Session::flash('message','Product Saved');
               return redirect::to('add-product');
           }
       }
    }  
//ALL PRODUCT
    public function allProduct(){
      $all_product = DB::table('tbl_products')
                        ->join('tbl_category','tbl_products.category_id', '=', 'tbl_category.category_id')
                        ->join('tbl_manufacture','tbl_products.manufacture_id','=','tbl_manufacture.manufacture_id')
                        ->get();
                 // return $all_product;
       return view('admin.all-product',compact('all_product'));
    }
    //INACTIVE PRODUCT
    public function productInactive($product_id){
       // return $product_id;
       DB::table('tbl_products')
                ->where('product_id',$product_id)
                ->update(['publication_status' => 0]);
               // ->update(['publication_status'=> 1]);
               return redirect::to('all-product');

    }
    public function productActive($product_id){
        // return $product_id;
        DB::table('tbl_products')
                 ->where('product_id',$product_id)
                 ->update(['publication_status' => 1]);
                // ->update(['publication_status'=> 1]);
                return redirect::to('all-product');
 
     }
    
}
