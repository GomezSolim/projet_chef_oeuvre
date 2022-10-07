<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

session_start();

class MarquesController extends Controller
{
    public function index()
    {
        return view('admin.ajout-marque');
    }

    public function save_marques(Request $request)
    {
        $data = array();
        $data['marques_id']=$request->marques_id;
        $data['marques_nom']=$request->marques_nom;
        $data['marques_description']=$request->marques_description;
        $data['statut_publication']=$request->statut_publication;
        DB::table('tbl_marques')->insert($data);
        Session::put('message', 'Marque ajoutée avec success !!!');
        return Redirect::to('/ajout-marques');
    }

    public function all_marques()
    {
            $all_marques_info = DB::table('tbl_marques')->get();
            $manage_marques = view('admin.all_marque')
                    ->with('all_marques_info', $all_marques_info);
            return view('admin_layout')
                    ->with('admin.all_marque', $manage_marques);
            //return view('admin.all_marques');
    }

    
    public function delete_marques($marques_id)
    {
        DB::table('tbl_marques')
                ->where('marques_id', $marques_id)
                ->delete();
        Session::get('messagee', 'Marque Supprimée avec success');
        return Redirect::to('/all-marques');
    }

    public function desactive_marques($marques_id)
    {
        DB::table('tbl_marques')
            ->where('marques_id', $marques_id)
            ->update(['statut_publication' =>  0]);
            Session::put('message', 'Marque désactivée avec success !!!');
            return Redirect::to('/all-marques');
    }

    public function active_marques($marques_id)
    {
        DB::table('tbl_marques')
            ->where('marques_id', $marques_id)
            ->update(['statut_publication' =>  1]);
            Session::put('message', 'Marque activée avec success !!!');
            return Redirect::to('/all-marques');
    }

    //fonction d'edition de la marque
    public function edit_marques($marques_id)
    {
        $marques_info = DB::table('tbl_marques')
                        ->where('marques_id', $marques_id)
                        ->first();
        $marques_info = view('admin.edit_marque')
                ->with('marques_info', $marques_info);
        return view('admin_layout')
                ->with('admin.edit_marque', $marques_info);
        //return view('admin.edit_marques');
    }

    public function update_marques(Request $request, $marques_id)
    {
        $data = array();
        $data['marques_nom'] = $request->marques_nom;
        $data['marques_description'] = $request->marques_description;
        DB::table('tbl_marques')
                ->where('marques_id', $marques_id)
                ->update($data);

                Session::get('message', 'Marque mise à jour avec success !!!');
                return Redirect::to('/all-marques');
    }
}
