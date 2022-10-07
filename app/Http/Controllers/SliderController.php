<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\str;
use Illuminate\Support\Facades\DB;

session_start();

class SliderController extends Controller
{
    public function index()
    {
        return view('admin.ajout_slider');
    }

    public function save_slider(Request $request)
    {
        $data = array();
        $data['statut_publication']=$request->statut_publication;
        
        $image = $request->file('slider_image');
        if($image){
            $random = str::random(40);
            $image_name = $random;
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path = 'slider/';
            $image_url=$upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if($success){
                $data['slider_image']=$image_url;

                DB::table('tbl_slider')->insert($data);
                Session::put('message', 'Slider Ajouté avec success !!!');
                return Redirect::to('/ajout-slider');
            }
        }
        $data['slider_image'] = '';
        DB::table('tbl_slider')->insert($data);
        Session::put('message', 'Slider Ajouté avec success avec image !!!');
        return Redirect::to('/ajout-slider');
    }

    public function all_slider()
    {
        $all_slider = DB::table('tbl_slider')->get();
        $manage_slider = view('admin.all_slider')
                ->with('all_slider', $all_slider);
        return view('admin_layout')
                ->with('admin.all_slider', $manage_slider);
    }

    //désactivation des sliders-------------------------------------
    public function desactive_slider($slider_id)
    {
        DB::table('tbl_slider')
        ->where('slider_id', $slider_id)
        ->update(['statut_publication' =>  0]);
        Session::put('message', 'Slider désactivée avec success !!!');
        return Redirect::to('/all-slider');
    }

    //activation des sliders-------------------------------------
    public function active_slider($slider_id)
    {
        DB::table('tbl_slider')
        ->where('slider_id', $slider_id)
        ->update(['statut_publication' =>  1]);
        Session::put('message', 'Slider désactivée avec success !!!');
        return Redirect::to('/all-slider');
    }

    public function edit_slider($slider_id)
    {
        $slider_info = DB::table('tbl_slider')
                        ->where('slider_id', $slider_id)
                        ->first();
        $slider_info = view('admin.edit_slider')
                ->with('slider_info', $slider_info);
        return view('admin_layout')
                ->with('admin.edit_slider', $slider_info);
    }

    //suppression des sliders-------------------------------------
    public function delete_slider($slider_id)
    {
        DB::table('tbl_slider')
                ->where('slider_id', $slider_id)
                ->delete();
        Session::get('messagee', 'Slider Supprimée avec success');
        return Redirect::to('/all-slider');
    }
}
