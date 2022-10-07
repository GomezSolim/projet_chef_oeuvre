<?php

namespace App\Http\Controllers;

use Illuminate\Support\str;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
//use Symfony\Component\HttpFoundation\Session\Session;
//use Illuminate\Support\put;

session_start();

class ProduitsController extends Controller
{

    public function AdminAuthCheck()
    {
            $admin_id = Session::get('admin_id');
            if($admin_id){
                    return;
            }else{
                    return Redirect::to('/admin')->send();
            }
    }
    public function index()
    {
        $this->AdminAuthCheck(); 
        return view('admin.ajout_produit');
    }

    public function all_produits()
    {
        $this->AdminAuthCheck(); 
        $all_produits_info = DB::table('tbl_produits')
                                ->join('tbl_categorie', 'tbl_produits.categorie_id', '=','tbl_categorie.categorie_id')
                                ->join('tbl_marques', 'tbl_produits.marques_id', '=','tbl_marques.marques_id')
                                ->select('tbl_produits.*', 'tbl_categorie.categorie_nom', 'tbl_marques.marques_nom')
                                ->get();

                                //echo "<pre>";
                                 //   print_r($all_produits_info);
                                //echo "</pre>";
                                //exit();

        $manage_produits = view('admin.all_produit')
                ->with('all_produits_info', $all_produits_info);
        return view('admin_layout')
                ->with('admin.all_produit', $manage_produits);
    }

    public function save_produits(Request $request){
        $data=array();
        $data['produits_nom']=$request->produits_nom;
        $data['categorie_id']=$request->categorie_id;
        $data['marques_id']=$request->marques_id;
        $data['produits_details']=$request->produits_details;
        $data['produits_description']=$request->produits_description;
        $data['produits_prix']=$request->produits_prix;
        $data['produits_taille']=$request->produits_taille;
        $data['produits_couleur']=$request->produits_couleur;
        $data['statut_publication']=$request->statut_publication;

        $image = $request->file('produits_image');
        if($image){
            $random = str::random(40);
            $image_name = $random;
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path = 'image/';
            $image_url=$upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if($success){
                $data['produits_image']=$image_url;

                DB::table('tbl_produits')->insert($data);
                Session::put('message', 'Produit Ajouté avec success !!!');
                return Redirect::to('/ajout-produits');
            }
        }
        $data['produits_image'] = '';
        DB::table('tbl_produits')->insert($data);
        Session::put('message', 'Produit Ajouté avec success avec image !!!');
        return Redirect::to('/ajout-produits');

    }

    public function desactive_produits($produits_id)
    {
        DB::table('tbl_produits')
            ->where('produits_id', $produits_id)
            ->update(['statut_publication' =>  0]);
        Session::put('message', 'Produit désactivée avec success !!!');
        return Redirect::to('/all-produits');
    }

    public function active_produits($produits_id)
    {
        DB::table('tbl_produits')
            ->where('produits_id', $produits_id)
            ->update(['statut_publication' =>  1]);
        Session::put('message', 'Produit activée avec success !!!');
        return Redirect::to('/all-produits');
    }

    public function delete_produits($produits_id)
    {
        $this->AdminAuthCheck(); 
        DB::table('tbl_produits')
            ->where('produits_id', $produits_id)
            ->delete();
        Session::get('messagee', 'Produit Supprimée avec success');
        return Redirect::to('/all-produits');
    }

    public function edit_produits($produits_id)
    {
        $produits_info = DB::table('tbl_produits')
                        ->where('produits_id', $produits_id)
                        ->first();
        $produits_info = view('admin.edit_produits')
                ->with('produits_info', $produits_info);
        return view('admin_layout')
                ->with('admin.edit_produits', $produits_info);
    }

    public function update_produits(Request $request, $produits_id)
    {
        $data = array();
        $data['produits_nom'] = $request->produits_nom;
        $data['categorie_id']=$request->categorie_id;
        $data['marques_id']=$request->marques_id;
        $data['produits_details']=$request->produits_details;
        $data['produits_description']=$request->produits_description;
        $data['produits_prix']=$request->produits_prix;
        $data['produits_taille']=$request->produits_taille;
        $data['produits_couleur']=$request->produits_couleur;
        $data['statut_publication']=$request->statut_publication;

        $image = $request->file('produits_image');
        if($image){
            $random = str::random(40);
            $image_name = $random;
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path = 'image/';
            $image_url=$upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if($success){
                $data['produits_image']=$image_url;

                DB::table('tbl_produits')->insert($data);
                Session::put('message', 'Produit Ajouté avec success !!!');
                return Redirect::to('/ajout-produits');
            }
        }
        $data['produits_image'] = '';
        DB::table('tbl_produits')->insert($data);
        Session::put('message', 'Produit Ajouté avec success avec image !!!');
        return Redirect::to('/ajout-produits');
        DB::table('tbl_produits')
                ->where('produits_id', $produits_id)
                ->update($data);

        Session::get('message', 'Produit mise à jour avec success !!!');
                return Redirect::to('/all-produits');
    }
}
