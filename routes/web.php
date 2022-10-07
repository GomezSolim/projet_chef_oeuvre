<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Frontend site--------------------------------------------------------
Route::get('/','App\Http\Controllers\AccueilController@index');


//show categories des produits routes
Route::get('/produit_by_categorie/{categorie_id}','App\Http\Controllers\AccueilController@show_produits_by_categorie');
Route::get('/produit_by_marques/{marques_id}','App\Http\Controllers\AccueilController@show_produits_by_marques');
Route::get('/view_produits/{produits_id}','App\Http\Controllers\AccueilController@produit_details_by_id');
Route::post('/add-to-cart', 'App\Http\Controllers\CartController@add_to_cart');





//Backend routes------------------------------------------------------
Route::get('/logout', 'App\Http\Controllers\SuperAdminController@logout');
Route::get('/admin','App\Http\Controllers\AdminController@index');
Route::get('/dashboard','App\Http\Controllers\SuperAdminController@index');
Route::post('/admin-dashboard','App\Http\Controllers\AdminController@dashboard');


//categories routes------------------------------------------------------
Route::get('/ajout-categorie', 'App\Http\Controllers\CategorieController@index');
Route::get('/all-categorie', 'App\Http\Controllers\CategorieController@all_categorie');
Route::post('/save-categorie', 'App\Http\Controllers\CategorieController@save_categorie');
Route::get('/edit-categorie/{categorie_id}', 'App\Http\Controllers\CategorieController@edit_categorie');
Route::post('/update-categorie/{categorie_id}', 'App\Http\Controllers\CategorieController@update_categorie');
Route::get('/delete-categorie/{categorie_id}', 'App\Http\Controllers\CategorieController@delete_categorie');
Route::get('/desactive_categorie/{categorie_id}', 'App\Http\Controllers\CategorieController@desactive_categorie');
Route::get('/active_categorie/{categorie_id}', 'App\Http\Controllers\CategorieController@active_categorie');



//marques ou fabriquant routes------------------------------------------------------
Route::get('/ajout-marques', 'App\Http\Controllers\MarquesController@index');
Route::post('/save-marques', 'App\Http\Controllers\MarquesController@save_marques');
Route::get('/all-marques', 'App\Http\Controllers\MarquesController@all_marques');
Route::get('/delete-marques/{marques_id}', 'App\Http\Controllers\MarquesController@delete_marques');
Route::get('/edit-marques/{marques_id}', 'App\Http\Controllers\MarquesController@edit_marques');
Route::post('/update-marques/{marques_id}', 'App\Http\Controllers\MarquesController@update_marques');
Route::get('/desactive_marques/{marques_id}', 'App\Http\Controllers\MarquesController@desactive_marques');
Route::get('/active_marques/{marques_id}', 'App\Http\Controllers\MarquesController@active_marques');


//produits routes------------------------------------------------------
Route::get('/ajout-produits', 'App\Http\Controllers\ProduitsController@index');
Route::post('/save-produits', 'App\Http\Controllers\ProduitsController@save_produits');
Route::get('/all-produits', 'App\Http\Controllers\ProduitsController@all_produits');
Route::get('/desactive_produits/{produits_id}', 'App\Http\Controllers\ProduitsController@desactive_produits');
Route::get('/active_produits/{produits_id}', 'App\Http\Controllers\ProduitsController@active_produits');
Route::get('/delete-produits/{produits_id}', 'App\Http\Controllers\ProduitsController@delete_produits');
Route::get('/edit-produits/{produits_id}', 'App\Http\Controllers\ProduitsController@edit_produits');
Route::post('/update-produits/{produits_id}', 'App\Http\Controllers\ProduitsController@update_produits');



//sliders routes------------------------------------------------------

Route::get('/ajout-slider', 'App\Http\Controllers\SliderController@index');
Route::post('/save-slider', 'App\Http\Controllers\SliderController@save_slider');
Route::get('/all-slider', 'App\Http\Controllers\SliderController@all_slider');
Route::get('/desactive_slider/{slider_id}', 'App\Http\Controllers\SliderController@desactive_slider');
Route::get('/active_slider/{slider_id}', 'App\Http\Controllers\SliderController@active_slider');
Route::get('/delete-slider/{slider_id}', 'App\Http\Controllers\SliderController@delete_slider');

Route::get('/edit-slider/{slider_id}', 'App\Http\Controllers\SliderController@edit_slider');