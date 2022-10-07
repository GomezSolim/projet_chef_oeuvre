<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CartController extends Controller
{
    public function  add_to_cart(Request $request){
        $qty = $request->qty;
        $produits_id = $request->produits_id;
        $produit_info = DB::table('tbl_produits')
                            ->where('produits_id', $produits_id)
                            ->first();
    }
}
