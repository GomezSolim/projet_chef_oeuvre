@extends('admin_layout')
@section('admin_content')

			
    <!-- start: Content -->
    <div id="content" class="span10">

    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Accueil</a>
            <i class="icon-angle-right"></i> 
        </li>
        <li>
            <i class="icon-edit"></i>
            <a href="#">Ajouter Produit</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Ajouter Produit</h2>
            </div>
            
            <p class="alert-success">
                <?php
                    $message= Session::get('message');
                    if($message){
                        echo $message;
                        Session::put('message', null);
                    }
                ?>
            </p>

            <div class="box-content">
                <form class="form-horizontal" action="{{ url('/save-produits')}}" method="post" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="produits_nom">Nom Produit</label>
                        <div class="controls">
                        <input type="text" class="input-xlarge" name="produits_nom" value="" required="">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Catégorie Produit</label>
                        <div class="controls">
                            <select id="selectError3" name="categorie_id">
                                <option>Selectionnez la Catégorie</option>
						<?php
						$all_published_categorie = DB::table('tbl_categorie')
                                                    ->where('statut_publication',1)
                                                    ->get();
						foreach($all_published_categorie as $v_categorie){?>
                                <option value="{{$v_categorie->categorie_id}}">{{$v_categorie->categorie_nom}}</option>
                        <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Nom Marque</label>
                        <div class="controls">
                            <select id="selectError3" name="marques_id">
                                <option>Selectionnez la Marque</option>
						<?php
						$all_published_marques = DB::table('tbl_marques')
                                                    ->where('statut_publication',1)
                                                    ->get();
						foreach($all_published_marques as $v_marques){?>
                                <option value="{{$v_marques->marques_id}}">{{$v_marques->marques_nom}}</option>
                        <?php } ?>
                            </select>
                        </div> 
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Détails Produit</label>
                        <div class="controls">
                        <textarea class="cleditor" name="produits_details" rows="3" required=""></textarea>
                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Description Produit</label>
                        <div class="controls">
                        <textarea class="cleditor" name="produits_description" rows="3" required=""></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="date01">Prix Produit</label>
                        <div class="controls">
                        <input type="text" class="input-xlarge" name="produits_prix" value="" required="">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="fileInput">Image Produit</label>
                        <div class="controls">
                        <input class="input-file uniform_on" name="produits_image" id="fileInput" type="file">
                        </div>
					</div> 

                    <div class="control-group">
                        <label class="control-label" for="date01">Taille Produit</label>
                        <div class="controls">
                        <input type="text" class="input-xlarge" name="produits_taille" value="" required="">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="date01">Couleur Produit</label>
                        <div class="controls">
                        <input type="text" class="input-xlarge" name="produits_couleur" value="" required="">
                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Statut Publication</label>
                        <div class="controls">
                        <input type="checkbox" name="statut_publication" value="1">
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Ajouter Produit</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                    </fieldset>
                </form>   

            </div>
        </div><!--/span-->

    </div><!--/row-->

@endsection