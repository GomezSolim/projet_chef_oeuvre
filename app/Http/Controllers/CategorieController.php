<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

session_start();

class CategorieController extends Controller
{
    public function index()
    {
        $this->AdminAuthCheck();
        return view('admin.ajout-categorie');
    }

    public function all_categorie()
    {
            $this->AdminAuthCheck();
            $all_categorie_info = DB::table('tbl_categorie')->get();
            $manage_categorie = view('admin.all_categorie')
                    ->with('all_categorie_info', $all_categorie_info);
            return view('admin_layout')
                    ->with('admin.all_categorie', $manage_categorie);
            //return view('admin.all_categorie');
    }

    public function save_categorie(Request $request)
    {
        $data = array();
        $data['categorie_id']=$request->categorie_id;
        $data['categorie_nom']=$request->categorie_nom;
        $data['categorie_description']=$request->categorie_description;
        $data['statut_publication']=$request->statut_publication;
        DB::table('tbl_categorie')->insert($data);
        Session::put('message', 'Catégorie ajoutée avec success !!!');
        return Redirect::to('/ajout-categorie');
    }

    public function desactive_categorie($categorie_id)
    {
        DB::table('tbl_categorie')
            ->where('categorie_id', $categorie_id)
            ->update(['statut_publication' =>  0]);
            Session::put('message', 'Catégorie désactivée avec success !!!');
            return Redirect::to('/all-categorie');
    }

    public function active_categorie($categorie_id)
    {
        DB::table('tbl_categorie')
            ->where('categorie_id', $categorie_id)
            ->update(['statut_publication' =>  1]);
            Session::put('message', 'Catégorie activée avec success !!!');
            return Redirect::to('/all-categorie');
    }

    public function edit_categorie($categorie_id)
    {
        $this->AdminAuthCheck();
        $categorie_info = DB::table('tbl_categorie')
                        ->where('categorie_id', $categorie_id)
                        ->first();
        $categorie_info = view('admin.edit_categorie')
                ->with('categorie_info', $categorie_info);
        return view('admin_layout')
                ->with('admin.edit_categorie', $categorie_info);
        //return view('admin.edit_categorie');
    }

    public function update_categorie(Request $request, $categorie_id)
    {
        $data = array();
        $data['categorie_nom'] = $request->categorie_nom;
        $data['categorie_description'] = $request->categorie_description;
        DB::table('tbl_categorie')
                ->where('categorie_id', $categorie_id)
                ->update($data);

                Session::get('message', 'Catégorie mise à jour avec success !!!');
                return Redirect::to('/all-categorie');
    }

    public function delete_categorie($categorie_id)
    {
        DB::table('tbl_categorie')
                ->where('categorie_id', $categorie_id)
                ->delete();
        Session::get('messagee', 'Catégorie Supprimée avec success');
        return Redirect::to('/all-categorie');
    }

    public function AdminAuthCheck()
    {
            $admin_id = Session::get('admin_id');
            if($admin_id){
                    return;
            }else{
                    return Redirect::to('/admin')->send();
            }
    }

}
