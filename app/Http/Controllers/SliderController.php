<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    public function addSlider(){
        return view('admin.add-slider');
    }
    public function saveSlider(Request $request){
       // return $request;
        
        $data = array();
        $data['publication_status'] = isset($request->publication_status) ? $request->publication_status:0;
        $image= $request->file('slider_image');
        if($image){
            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_fullname = $image_name.'.'.$ext;
            $upload_path ='slider';
            $image_url = $upload_path.$image_fullname;
            $success = $image->move($upload_path,$image_fullname);
            if($success){
                $data['slider_image']=$image_fullname;
                DB::table('tbl_slider')->insert($data);
                Session::flash('message','Slider Saved');
                return redirect::to('add-slider');
            }
        }
    }

    public function allSlider(){
        $all_slider = DB::table('tbl_slider')
                          ->get();
                  //  return $all_slider;
         return view('admin.all-slider',compact('all_slider'));
      }
      public function sliderInactive($slider_id){
        DB::table('tbl_slider')
                  ->where('slider_id',$slider_id)
                  ->update(['publication_status'=>0]);
                  Session::flash('message','Slider Inactive Succcessful');
                  return redirect::to('all-slider');
     }
     public function sliderActive($slider_id){
        DB::table('tbl_slider')
                  ->where('slider_id',$slider_id)
                  ->update(['publication_status'=>1]);
                  Session::flash('message','Slider Active Succcessful');
                  return redirect::to('all-slider');
     }
}
