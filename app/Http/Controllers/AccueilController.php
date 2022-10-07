<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Database\Query\Builder\product\image;

class AccueilController extends Controller
{
    public function index()
    {
        $all_published_produits = DB::table('tbl_produits')
                                ->join('tbl_categorie', 'tbl_produits.categorie_id', '=','tbl_categorie.categorie_id')
                                ->join('tbl_marques', 'tbl_produits.marques_id', '=','tbl_marques.marques_id')
                                ->select('tbl_produits.*', 'tbl_categorie.categorie_nom', 'tbl_marques.marques_nom')
                                ->where('tbl_produits.statut_publication', 1)
                                ->limit(9)
                                ->get();
        $manage_published_produit  = view('pages.acceuil_content')
                ->with('$all_published_produits', $all_published_produits);
        return view('layout')
                ->with('pages.acceuil_content', $manage_published_produit );
        //return view('pages.accueil_content');
    }

    public function show_produits_by_categorie($categorie_id)
    {
        $produit_by_categorie = DB::table('tbl_produits')
                                    ->join('tbl_categorie', 'tbl_produits.categorie_id', '=','tbl_categorie.categorie_id')
                                    ->select('tbl_produits.*', 'tbl_categorie.categorie_nom')
                                    ->where('tbl_categorie.categorie_id', $categorie_id)
                                    ->where('tbl_produits.statut_publication', 1)
                                    ->limit(18)
                                    ->get();
        $manage_produit_by_categorie  = view('pages.categorie_by_produit')
        ->with('$produit_by_categorie', $produit_by_categorie);
        return view('layout')
        ->with('pages.categorie_by_produit', $manage_produit_by_categorie );
    }

    public function show_produits_by_marques($marques_id)
    {
        $produit_by_marques = DB::table('tbl_produits')
                                ->join('tbl_categorie', 'tbl_produits.categorie_id', '=','tbl_categorie.categorie_id')
                                ->join('tbl_marques', 'tbl_produits.marques_id', '=','tbl_marques.marques_id')
                                ->select('tbl_produits.*', 'tbl_categorie.categorie_nom', 'tbl_marques.marques_nom')
                                ->where('tbl_marques.marques_id', $marques_id)
                                ->where('tbl_produits.statut_publication', 1)
                                ->limit(18)
                                ->get();
        $manage_produit_by_marques  = view('pages.marque_by_produit')
                ->with('$all_published_produits', $produit_by_marques);
        return view('layout')
                ->with('pages.marque_by_produit', $manage_produit_by_marques );
    }

    public function produit_details_by_id($produits_id)
    {
        $produit_by_details = DB::table('tbl_produits')
                                ->join('tbl_categorie', 'tbl_produits.categorie_id', '=','tbl_categorie.categorie_id')
                                ->join('tbl_marques', 'tbl_produits.marques_id', '=','tbl_marques.marques_id')
                                ->select('tbl_produits.*', 'tbl_categorie.categorie_nom', 'tbl_marques.marques_nom')
                                ->where('tbl_produits.produits_id', $produits_id)
                                ->where('tbl_produits.statut_publication', 1)
                                ->limit(18)
                                ->first();
                               // dd($produit_by_details);
       return view('pages.produit_details', compact('produit_by_details'));
    }
}
