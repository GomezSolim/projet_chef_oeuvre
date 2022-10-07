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
            <a href="#">Ajouter Catégorie</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Ajouter Catégorie</h2>
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
                <form class="form-horizontal" action="{{ url('/save-categorie')}}" method="post" >
                    {{ csrf_field() }}
                    <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="categorie_nom">Nom Catégorie</label>
                        <div class="controls">
                        <input type="text" class="input-xlarge" name="categorie_nom" value="" required="">
                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Description Catégorie</label>
                        <div class="controls">
                        <textarea class="cleditor" name="categorie_description" rows="3" required=""></textarea>
                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Statut Publication</label>
                        <div class="controls">
                        <input type="checkbox" name="statut_publication" value="1">
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Ajouter Catégorie</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                    </fieldset>
                </form>   

            </div>
        </div><!--/span-->

    </div><!--/row-->

@endsection