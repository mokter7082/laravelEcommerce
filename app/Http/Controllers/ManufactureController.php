<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class ManufactureController extends Controller
{
               
    public function addManufacture(){
        return view('admin.add-manufacture');
      }
      public function saveManufacture( Request $request ){
        //  $category->caterory_name = $request->category_name;
         $request->validate([
        'manufacture_name' =>['required'],
        'manufacture_description' =>['required'],
      ]);
        $data = array();
        $data['manufacture_name'] = $request->manufacture_name;
        $data['manufacture_description'] = $request->manufacture_description;
        $data['manufacture_status'] = $request->manufacture_status ?? 0;
      //  print_r($data);
      //  echo "pre";
        //print_r($data);
        DB::table('tbl_manufacture')->insert($data);
        Session::flash('message','Manufacture Saved');
        return redirect::to('add-manufacture');
        }
        //all manufactuer
        public function allManufacture(){
           $all_manufacture = DB::table('tbl_manufacture')->get();
            return view('admin.all-manufacture',compact('all_manufacture'));
           //return $all_manufacture;
          }

        public function manufactureInactive($manufacture_id){
           
          DB::table('tbl_manufacture')
                    ->where('manufacture_id',$manufacture_id)
                    ->update(['manufacture_status'=> 0]);
                    Session::flash('message','Manufacture Is Inactive Now');
                    return redirect::to('/all-manufacture');

        }
        public function manufactureActive($manufacture_id){
           
          DB::table('tbl_manufacture')
                    ->where('manufacture_id',$manufacture_id)
                    ->update(['manufacture_status'=> 1]);
                    Session::flash('message','Manufacture Is Active Now');
                    return redirect::to('/all-manufacture');

        }

}
