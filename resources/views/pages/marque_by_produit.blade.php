@extends('layout')
@section('content')
<h2 class="title text-center">Features Items</h2>
<?php 
        $produit_by_marques = DB::table('tbl_produits')
                                ->join('tbl_categorie', 'tbl_produits.categorie_id', '=','tbl_categorie.categorie_id')
                                ->join('tbl_marques', 'tbl_produits.marques_id', '=','tbl_marques.marques_id')
                                ->select('tbl_produits.*', 'tbl_marques.marques_nom')
                                ->limit(18)
                                ->get();
    foreach($produit_by_marques as $v_marques_by_produit) {?> 

        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to($v_marques_by_produit->produits_image)}}" style=" height: 300px;" alt="" />
                            <h2>{{$v_marques_by_produit->produits_prix}} F CFA</h2>
                            <p>{{$v_marques_by_produit->produits_nom}}</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="product-overlay">
                            <div class="overlay-content">
                                <h2>{{$v_marques_by_produit->produits_prix}} F CFA</h2>
                                <p>{{$v_marques_by_produit->produits_nom}}</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                        </div>
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>{{$v_marques_by_produit->marques_nom}}</a></li>
                        <li><a href="#"><i class="fa fa-plus-square"></i>Voir le produit</a></li>
                    </ul>
                </div>
            </div>
        </div>
    <?php } 
?>
</div><!--features_items-->


<div class="recommended_items"><!--recommended_items-->
    <h2 class="title text-center">Articles Recommandés</h2>
    
    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">	
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/recommend1.jpg')}}" alt="" style="width: 150px; height:150px; "/>
                                <h2>20000 F CFA</h2>
                                <p>Aklaa Edition noir</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/recommend2.jpg')}}" alt="" style="width: 150px; height:150px;" />
                                <h2>30000 F CFA</h2>
                                <p>Aklaa Edition noir</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/recommend3.jpg')}}" alt="" style="width: 150px; height:150px;" />
                                <h2>25000 F CFA</h2>
                                <p>Aklaa Edition noir</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">	
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/recommend4.jpg')}}" alt="" style="width: 150px; height:150px; "/>
                                <h2>30000 F CFA</h2>
                                <p>ROMUA Edition noir</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/recommend5.jpg')}}" alt="" style="width: 150px; height:150px; "/>
                                <h2>25000 F CFA</h2>
                                <p>ROMUA Edition noir</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/recommend6.jpg')}}" alt="" style="width: 150px; height:150px; "/>
                                <h2>15000 F CFA</h2>
                                <p>ROMUA Edition noir</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>			
    </div>
</div><!--/recommended_items-->

@endsection