<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

session_start();




class AdminController extends Controller
{    //ADMIN KOGIN CONTROL HERE
    public function adminLogin(){
      return view('admin-login');
    }
    //ADMIN DASHBOARD CONTROL HERE
    public function adminDashboard(){
      return view('admin.dashboard');
    }
    public function First(){
      return view('admin.asd');
    }
    public function dashboard(Request $request){
      $admin_email = $request->admin_email;
      $admin_pass = md5($request->admin_password);
      $result = DB::table('tbl_admin')
                 ->where('admin_email',$admin_email)
                 ->where('admin_password',$admin_pass)
                 ->first();

            if($result){
                 Session::put('admin_name',$result->admin_name);
                 Session::put('admin_id',$result->admin_id);
                 return redirect::to('/dashboard');
            }else {
                 Session::put('message','email and pass invalid');
                 return redirect::to('/admin');
            }

            

    }
}
