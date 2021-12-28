<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index(){
     $all_features  = DB::table('tbl_products')
                      ->join('tbl_category','tbl_products.category_id','=','tbl_category.category_id')
                      ->join('tbl_manufacture','tbl_products.manufacture_id','=','tbl_manufacture.manufacture_id')
                      ->where('publication_status',1)
                      ->get();
     return view('pages.home-content',compact('all_features'));

    }
}
