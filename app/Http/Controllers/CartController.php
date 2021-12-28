<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Session;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{


  public function addtoCart(Request $req){
     //dd($req->all());
     $qty = $req->product_qty;
     $p_id = $req->product_id;
     //dd($data;
      $product_info = DB::table('tbl_products')
                     ->where('product_id',$p_id)
                     ->first();
                  //   dd($product_info);
                    // / exit();


    //dd($product_info);

    Cart::add([
        'id'=> $req->input('product_id'),
        'name'=>$product_info->product_name,
        'qty'=> $req->input('product_qty'),
        'price'=> $product_info->product_price,
        'weight' => 0,
        'options'=> [
            'image'=> $product_info->product_image
          ]
       ]);
       //dd(Cart::content());
      // exit();
     return Redirect::to('show-cart');
                    
  }
  public function showCart(){
    //echo 'Show Cart';
   // $cart_content = Cart::content();
  //  dd($cart_content);
   // return view('pages.add-to-cart',['category_info'=>$cart_content]);
     $category_info = DB::table('tbl_category')
                             ->where('public_status',1)
                              ->get();
                             
   return view('pages.add-to-cart',compact('category_info'));               
    }


     public function orderCancel($rowId){
       //return $rowId;
       Cart::update($rowId,0);
       return Redirect::to('show-cart');
     }
     public function qtyUpdate(Request $req){
     //  return $req;
     // exit();
      //return $rowId;
      $qty = $req->qty;
      $rowid = $req->rowid;
      Cart::update($rowid,$qty );
      return Redirect::to('show-cart');
    }
  
}
