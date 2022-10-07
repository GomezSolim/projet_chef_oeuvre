@extends('layout')
@section('content')
<h2 class="title text-center">Futures Aritcles</h2>
<?php 
$all_published_produits = DB::table('tbl_produits')
                        ->join('tbl_categorie', 'tbl_produits.categorie_id', '=','tbl_categorie.categorie_id')
                        ->join('tbl_marques', 'tbl_produits.marques_id', '=','tbl_marques.marques_id')
                        ->select('tbl_produits.*', 'tbl_categorie.categorie_nom', 'tbl_marques.marques_nom')
                        ->get();
    foreach($all_published_produits as $v_published_produit) {?> 

        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to($v_published_produit->produits_image)}}" style=" height: 300px;" alt="" />
                            <h2>{{$v_published_produit->produits_prix}} F CFA</h2>
                            <p>{{$v_published_produit->produits_nom}}</p>
                            <a href="{{URL::to('/view_produits/'.$v_published_produit->produits_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                        </div>
                        <div class="product-overlay">
                            <div class="overlay-content">
                                <h2>{{$v_published_produit->produits_prix}} F CFA</h2>
                                <a href="{{URL::to('/view_produits/'.$v_published_produit->produits_id)}}"><p>{{$v_published_produit->produits_nom}}</p></a> 
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                            </div>
                        </div>
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>{{$v_published_produit->marques_nom}}</a></li>
                        <li><a href="{{URL::to('/view_produits/'.$v_published_produit->produits_id)}}"><i class="fa fa-plus-square"></i>Voir le produit</a></li>
                    </ul>
                </div>
            </div>
        </div>
    <?php } 
?>
</div><!--features_items-->

<div class="category-tab"><!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>
            <li><a href="#blazers" data-toggle="tab">Blazers</a></li>
            <li><a href="#sunglass" data-toggle="tab">Lunettes de soleil</a></li>
            <li><a href="#kids" data-toggle="tab">Enfants</a></li>
            <li><a href="#poloshirt" data-toggle="tab">Aklaa shirt</a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="tshirt" >
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to('frontend/images/home/gallery1.jpg')}}" alt="" />
                            <h2>5000 F CFA</h2>
                            <p>ROMUA Edition noir</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to('frontend/images/home/gallery2.jpg')}}" alt="" />
                            <h2>5000 F CFA</h2>
                            <p>ROMUA Edition noir</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to('frontend/images/home/gallery3.jpg')}}" alt="" />
                            <h2>5000 F CFA</h2>
                            <p>ROMUA Edition noir</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to('frontend/images/home/gallery4.jpg')}}" alt="" />
                            <h2>5000 F CFA</h2>
                            <p>ROMUA Edition noir</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="tab-pane fade" id="blazers" >
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to('frontend/images/home/gallery4.jpg')}}" alt="" />
                            <h2>5000 F CFA</h2>
                            <p>ROMUA Edition noir</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to('frontend/images/home/gallery3.jpg')}}" alt="" />
                            <h2>5000 F CFA</h2>
                            <p>ROMUA Edition noir</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to('frontend/images/home/gallery2.jpg')}}" alt="" />
                            <h2>5000 F CFA</h2>
                            <p>ROMUA Edition noir</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to('frontend/images/home/gallery1.jpg')}}" alt="" />
                            <h2>5000 F CFA</h2>
                            <p>ROMUA Edition noir</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="tab-pane fade" id="sunglass" >
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to('frontend/images/home/gallery3.jpg')}}" alt="" />
                            <h2>5000 F CFA</h2>
                            <p>ROMUA Edition noir</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to('frontend/images/home/gallery4.jpg')}}" alt="" />
                            <h2>5000 F CFA</h2>
                            <p>ROMUA Edition noir</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to('frontend/images/home/gallery1.jpg')}}" alt="" />
                            <h2>5000 F CFA</h2>
                            <p>ROMUA Edition noir</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to('frontend/images/home/gallery2.jpg')}}" alt="" />
                            <h2>5000 F CFA</h2>
                            <p>ROMUA Edition noir</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="tab-pane fade" id="kids" >
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to('frontend/images/home/gallery1.jpg')}}" alt="" />
                            <h2>5000 F CFA</h2>
                            <p>ROMUA Edition noir</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to('frontend/images/home/gallery2.jpg')}}" alt="" />
                            <h2>5000 F CFA</h2>
                            <p>ROMUA Edition noir</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to('frontend/images/home/gallery3.jpg')}}" alt="" />
                            <h2>5000 F CFA</h2>
                            <p>ROMUA Edition noir</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to('frontend/images/home/gallery4.jpg')}}" alt="" />
                            <h2>5000 F CFA</h2>
                            <p>ROMUA Edition noir</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="tab-pane fade" id="poloshirt" >
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to('frontend/images/home/gallery2.jpg')}}" alt="" />
                            <h2>5000 F CFA</h2>
                            <p>ROMUA Edition noir</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to('frontend/images/home/gallery4.jpg')}}" alt="" />
                            <h2>5000 F CFA</h2>
                            <p>ROMUA Edition noir</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to('frontend/images/home/gallery3.jpg')}}" alt="" />
                            <h2>5000 F CFA</h2>
                            <p>ROMUA Edition noir</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to('frontend/images/home/gallery1.jpg')}}" alt="" />
                            <h2>5000 F CFA</h2>
                            <p>ROMUA Edition noir</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/category-tab-->

<div class="recommended_items"><!--recommended_items-->
    <h2 class="title text-center">Articles Recommandés</h2>
    
    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">	
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/recommend1.jpg')}}" alt="" />
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
                                <img src="{{URL::to('frontend/images/home/recommend2.jpg')}}" alt="" />
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
                                <img src="{{URL::to('frontend/images/home/recommend3.jpg')}}" alt="" />
                                <h2>20000 F CFA</h2>
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
                                <img src="{{URL::to('frontend/images/home/recommend1.jpg')}}" alt="" />
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
                                <img src="{{URL::to('frontend/images/home/recommend2.jpg')}}" alt="" />
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
                                <img src="{{URL::to('frontend/images/home/recommend3.jpg')}}" alt="" />
                                <h2>20000 F CFA</h2>
                                <p>Aklaa Edition noir</p>
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