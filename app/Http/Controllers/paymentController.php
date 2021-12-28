<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Session;
use Illuminate\Support\Facades\Redirect;

class paymentController extends Controller
{
    public function paymentMethod(Request $req){
         $payment_get = $req->payement_get_away;

         $pdata = array();

         $pdata['payment_method'] = $payment_get;
         $pdata['payment_status'] = 0;

         $payment_id = DB::table('tbl_payment')
                  ->insertGetId($pdata);


     $odata = array();

      $odata['customar_id'] = Session::get('customar_id');
      $odata['shiping_id'] = Session::get('shiping_id');
      $odata['payment_id'] = $payment_id;
      $odata['order_total'] = Cart::subtotal();
      $odata['order_status'] = 0;

     $order_id = DB::table('tbl_order')
                ->insertGetId($odata);
              

               $content = Cart::content();


         foreach ($content as $v_content) {
         	$pddata = array();
         	$pddata['order_id'] = $order_id;
         	$pddata['product_id'] = $v_content->id;
         	$pddata['product_name'] = $v_content->name;
         	$pddata['product_price'] = $v_content->price;
         	$pddata['product_sales_qty'] = $v_content->qty;

         	DB::table('tbl_order_details_details')
         	         ->insert($pddata);
         }


      if($payment_get == 'bkash'){
      	return 'bkash';
      }elseif ($payment_get == 'nogot') {
      	return 'nogot';
      }elseif ($payment_get == 'dabit_card') {
      	return 'dabit card';
      }else{
      	return 'please select payement method';
      }
       // $shiping_id = Session::get('shiping_id');
        // return $shiping_id;
    }
}
