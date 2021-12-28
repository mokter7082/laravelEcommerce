<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class CategoryAndProduct extends Controller
{
    public function categoryWiseProduct($id){
        $all_features  = DB::table('tbl_products')
        ->join('tbl_category','tbl_products.category_id','=','tbl_category.category_id')
        ->select('tbl_products.*','tbl_category.category_name')
        ->where('tbl_products.category_id',$id)
        ->get();
      //  return $all_features;
     //   exit();
        return view('pages.categorywiseproduct',compact('all_features'));
    }
    public function productDetail($product_id){
       // return $product_id;
       $all_details = DB::table('tbl_products')
                               ->join('tbl_category','tbl_products.category_id','=','tbl_category.category_id')
                               ->join('tbl_manufacture','tbl_products.manufacture_id','=','tbl_manufacture.manufacture_id')
                               ->select('tbl_products.*','tbl_category.category_name')
                               ->where('tbl_products.product_id',$product_id)
                               ->first();
                               
                              // return $all_details;
        return view('pages.product-details',compact('all_details'));
    }
}
