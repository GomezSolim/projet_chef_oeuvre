<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Accueil | Ma-Boutique</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::to('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +228 93 44 27 03</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> energygomez@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">france</a></li>
									<li><a href="#">F CFA</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									F CFA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">franc candien</a></li>
									<li><a href="#">Livre</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Compte</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Liste de souhaits</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> V??rifier</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Panier</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Connexion</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html" class="active">Accueil</a></li>
								<li class="dropdown"><a href="#">Boutique<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Produits</a></li>
										<li><a href="product-details.html">D??tails Produits</a></li> 
										<li><a href="checkout.html">V??rifier</a></li> 
										<li><a href="cart.html">Panier</a></li> 
										<li><a href="login.html">Connexion</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog Liste</a></li>
										<li><a href="blog-single.html">Blog Unique</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	




	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">

							<?php 
							$all_published_slider=DB::table('tbl_slider')
													->where('statut_publication', 1)
													->get();
											$i=1;
								foreach($all_published_slider as $v_slider){ 
												if($i==1){

											
									?>
							<div class="item active">
										<?php 	}else{?>
											<div class="item">
										<?php 	} ?>	
								<div class="col-sm-5">
									<h1><span>Ma</span>-BOUTIQUE</h1>
									<h2>Shopping au centre d'affaire Solim</h2>
									<p> Centre d'affaire  Solim est le grand march?? en ligne au Togo, vous y trouverez toute vari??t?? de produits en vente.
										Vous pouvez vendre vos produits et services en ligne partout sur Ma-Boutique. </p>
									<button type="button" class="btn btn-default get">Achetez maintenant</button>
								</div>
								<div class="col-sm-7">
									<img src="{{URL::to($v_slider->slider_image)}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							<?php $i++; } ?>
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Cat??gorie</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
						<?php
						$all_published_categorie = DB::table('tbl_categorie')
														->where('statut_publication',1)
														->get();
						foreach($all_published_categorie as $v_categorie){?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{URL::to('/produit_by_categorie/'.$v_categorie->categorie_id)}}">{{$v_categorie->categorie_nom}}</a></h4>
								</div>
							</div>
						<?php } ?>

						</div><!--/category-products-->
						</div>
						<div class="brands_products"><!--brands_products-->
							<h2>Marques</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									
									<?php
										$all_published_marques = DB::table('tbl_marques')
																		->where('statut_publication',1)
																		->get();
										foreach($all_published_marques as $v_marques){?>

													<li><a href="{{URL::to('/produit_by_marques/'.$v_marques->marques_id)}}"> <span class="pull-right">(50)</span>{{$v_marques->marques_nom}}</a></li>
									<?php } ?>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Prix vente</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">0 F</b> <b class="pull-right">300000 F CFA</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="{{('frontend/images/home/shipping.jpg')}}" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
                    	@yield('content')
				    </div>
			    </div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>C</span>-lient</h2>
							<p>Liste des partenaires ayant fais appels ?? vos Services</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{URL::to('frontend/images/home/iframe1.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>ROMAU</p>
								<h2>24 SEPTEMBRE 2022</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{URL::to('frontend/images/home/iframe2.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>AKLAA</p>
								<h2>24 SEPTEMBRE 2022</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{URL::to('frontend/images/home/iframe3.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>BIC</p>
								<h2>24 SEPTEMBRE 2021</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{URL::to('frontend/images/home/iframe4.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Brasserie BB</p>
								<h2>12 DECEMBRE 2020</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="{{URL::to('frontend/images/home/map.png')}}" alt="" />
							<p>nous sommes en afrique de l'ouest au Togo</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">aide en ligne</a></li>
								<li><a href="#">Contactez-nous</a></li>
								<li><a href="#">Status commande</a></li>
								<li><a href="#">Changer Lieu</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Boutique en ligne</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Hommes</a></li>
								<li><a href="#">Femmes</a></li>
								<li><a href="#">Cartes-cadeaux</a></li>
								<li><a href="#">Chaussures</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Politiques</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Condition utilisation</a></li>
								<li><a href="#">Politique de confidentialit??</a></li>
								<li><a href="#">Politique de remboursement</a></li>
								<li><a href="#">syst??me de facturation</a></li>
								<li><a href="#">Syst??me de Tickets </a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Apropos du client</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Information sur la soci??t??</a></li>
								<li><a href="#">Carri??res</a></li>
								<li><a href="#">Notre emplacement</a></li>
								<li><a href="#">programme d'affiliation</a></li>
								<li><a href="#">Droit d'auteur</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Apropos du client</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Obtenez les mises ?? jour les plus recentes de  <br />notre site et mettez_vous  ?? jour vous m??me...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright ?? 2022 MaBoutique. Tous les droits r??serv??s.</p>
					<p class="pull-right">D??velopper par <span><a target="_blank" href="">Esso-solam Gnonike</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>