<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class CheckoutController extends Controller
{
    public function checkoutLogin(){
        return view('pages.login');
    }
    public function customarSave( Request $req){
        $data = array();
        $data['customar_name'] = $req->customar_name;
        $data['customar_email'] = $req->customar_email;
        $data['customar_pass'] = $req->customar_pass;
        $data['customar_mobail_num'] = $req->customar_mobail_num;
        

       $customar_id = DB::table('tbl_customar')->insertGetId($data);
      //  Session::flash('message','Data saved');
        Session::put('customar_id',$customar_id);
        Session::put('customar_name', $req->customar_name);
       // return $customar_id;
    //    exit;
        return Redirect::to('checkout');
                  

       // dd($data);
        // /return $req;
       // return view('pages.login');
    }
       public function checkOut(){
           return view('pages.checkout');
       }
       public function shipingSave(Request $req){
        $data = array();
        $data['shiping_first_name'] = $req->shiping_first_name;
        $data['shiping_last_name'] = $req->shiping_last_name;
        $data['shiping_email'] = $req->shiping_email;
        $data['shiping_phone'] = $req->shiping_phone;
        $data['shiping_address'] = $req->shiping_address;
        $data['shiping_city'] = $req->shiping_city;
        
        $shiping_id = DB::table('tbl_shiping')->insertGetId($data);
        Session::put('shiping_id',$shiping_id);
        Session::put('shiping_name',$req->shiping_name);
       // return $shiping_id;
       // exit;
        return Redirect::to('payment');
    }
    public function Payment(){
        return view('pages.payment');
    }
      public function logPayment(Request $req){
       // return $req;
        $cus_email = $req->email;
        $cus_pass = $req->password;

        $result = DB::table('tbl_customar') 
                           ->where('customar_email',$cus_email)
                           ->where('customar_pass',$cus_pass)
                           ->first();

        if($result){
            Session::put('cus_id',$result->customar_id);
            Session::put('cus_name',$result->customar_name);
            return Redirect::to('/payment');
        }else{
            Session::flash('message','Email && Password Worng');
            return Redirect::to('/checkout-login');

        }
    }
}
