<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use DB;

session_start();
class SuperAdminController extends Controller
{
    public function logout(){
      Session::put('admin_name',null);
      Session::put('admin_id',null);
      return redirect::to('/admin');
    }
    public function customarLogout(){
      Session::put('customar_name',null);
      Session::put('customar_id',null);
      return redirect::to('/');
    }
}
