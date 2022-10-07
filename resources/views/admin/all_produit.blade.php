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
        <li><a href="#">Tables</a></li>
    </ul>

    <p class="alert-success">

<?php
    $message = Session::get('message');
    if($message) 
        { 
           echo $message;
            Session::put('message', null);
        } 
?>

</p>

    <div class="row-fluid sortable">		
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Liste Catégories</h2>

            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                        <tr>
                            <th>Produit ID</th>
                            <th>Produit Nom</th>
                            <th>Produit Image</th>
                            <th>Produit Prix</th>
                            <th>Catégorie Nom</th>
                            <th>Marque Nom</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>  
                    @foreach($all_produits_info as $v_produits)
                        <tbody>
                            <tr>
                                <td>{{$v_produits->produits_id}}</td>
                                <td class="center">{{$v_produits->produits_nom}}</td>
                                <td class="center"><img src="{{URL::to($v_produits->produits_image)}}" alt="" style="height: 80px; width: 80px;"></td>
                                <td class="center">{{$v_produits->produits_prix}}  F CFA</td>
                                <td class="center">{{$v_produits->categorie_nom}}</td>
                                <td class="center">{{$v_produits->marques_nom}}</td> 
                                <td class="center">
                                    @if($v_produits->statut_publication==1)
                                        <span class="label label-success"> Active </span>
                                    @else
                                        <span class="label label-danger">Desactive</span>
                                    @endif
                                </td>
                                
                                <td class="center">

                                @if($v_produits->statut_publication==1)
                                    <a class="btn btn-danger" href="{{URL::to('/desactive_produits/'.$v_produits->produits_id)}}">
                                        <i class="halflings-icon white thumbs-down"></i>  
                                    </a>
                                @else
                                    <a class="btn btn-success" href="{{URL::to('/active_produits/'.$v_produits->produits_id)}}">
                                        <i class="halflings-icon white thumbs-up"></i>  
                                    </a>
                                @endif

                                    <a class="btn btn-info" href="{{URL::to('/edit-produits/'.$v_produits->produits_id)}}">
                                        <i class="halflings-icon white edit"></i>  
                                    </a>

                                    <a class="btn btn-info" href="{{URL::to('/delete-produits/'.$v_produits->produits_id)}}" id="delete">
                                        <i class="halflings-icon white trash"></i>  
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach 
                </table>            
            </div>
        </div><!--/span-->

    </div><!--/row-->



@endsection