<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class AddCategoryController extends Controller
{
    public function addCategory(){
      return view('admin.add-category');
    }
    public function saveCategory( Request $request ){
    //  $category->caterory_name = $request->category_name;
      $request->validate([
        'category_name' =>['required'],
        'category_discription' =>['required'],
      ]);
    $data = array();
    $data['category_name'] = $request->category_name;
    $data['category_discription'] = $request->category_discription;
    $data['public_status'] = $request->public_status ?? 0;
  //  print_r($data);
  //  echo "pre";
    //print_r($data);
    DB::table('tbl_category')->insert($data);
     Session::flash('message','Category has been added !');
    return redirect::to('add-category');
    }

  //ALL CATEGORY CONTROL HERE
  public function allCategory(){
     $all_category = DB::table('tbl_category')->get();
     return view('admin.all-category',compact('all_category'));
    // return $all_category;
  }
  public function categoryUnactive($category_id){
    DB::table('tbl_category')
              ->where('category_id',$category_id)
              ->update(['public_status'=>0]);
              return redirect::to('all-category');
 }
 public function categoryActive($category_id){
  DB::table('tbl_category')
            ->where('category_id',$category_id)
            ->update(['public_status'=>1]);
            return redirect::to('all-category');
}
//edite category
public function editeCategory($category_id){
 $edite_data = DB::table('tbl_category')
                  ->where('category_id', '=', $category_id)
                  ->first();
 //return $edite_data;
      return view('admin.edite-category',compact('edite_data'));

   }
   //Update category
public function UpdateCategory(Request $request,$category_id){
  $data = array();

  $data['category_name'] = $request->category_name;
  $data['category_discription'] = $request->category_discription;
      DB::table('tbl_category')
               ->where('category_id',$category_id)
               ->update($data);

        Session::flash('message','Category Update Succcessful');
       return redirect::to('/all-category');
    }
       //Update category
    public function deleteCategory($category_id){
      DB::table('tbl_category')
              ->where('category_id', $category_id)
              ->delete();
              Session::flash('message','Category Delete Succcessful');
   
              return redirect::to('/all-category');
        }






}
