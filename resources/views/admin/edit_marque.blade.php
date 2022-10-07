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
            <a href="#">Modifier la Marque</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Modifier Marque </h2>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="{{ url('/update-marques', $marques_info->marques_id)}}" method="post" >
                    {{ csrf_field() }}
                    <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="marques_nom">Nom Marque</label>
                        <div class="controls">
                        <input type="text" class="input-xlarge" name="marques_nom" value="{{$marques_info->marques_nom}}" >
                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Description Marque</label>
                        <div class="controls">
                        <textarea class="cleditor" name="marques_description" rows="3">
                        {{$marques_info->marques_description}}
                        </textarea>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                    </fieldset>
                </form>   

            </div>
        </div><!--/span-->

    </div><!--/row-->

@endsection