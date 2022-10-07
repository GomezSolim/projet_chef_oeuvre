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
                            <th>Catégorie ID</th>
                            <th>Catégorie Nom</th>
                            <th>Catégorie Description</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>  
                    @foreach($all_categorie_info as $v_categorie)
                    <tbody>
                    <tr>
                        <td>{{$v_categorie->categorie_id}}</td>
                        <td class="center">{{$v_categorie->categorie_nom}}</td>
                        <td class="center">{{$v_categorie->categorie_description}}</td>
                        <td class="center">
                            @if($v_categorie->statut_publication==1)
                            <span class="label label-success"><!-- {{$v_categorie->statut_publication}} --> Active </span>

                            @else
                            <span class="label label-danger"><!-- {{$v_categorie->statut_publication}} -->Desactive</span>

                            @endif
                        </td>
                        
                        <td class="center">

                        @if($v_categorie->statut_publication==1)
                            <a class="btn btn-danger" href="{{URL::to('/desactive_categorie/'.$v_categorie->categorie_id)}}">
                                <i class="halflings-icon white thumbs-down"></i>  
                            </a>
                        @else
                            <a class="btn btn-success" href="{{URL::to('/active_categorie/'.$v_categorie->categorie_id)}}">
                                <i class="halflings-icon white thumbs-up"></i>  
                            </a>
                        @endif

                            <a class="btn btn-info" href="{{URL::to('/edit-categorie/'.$v_categorie->categorie_id)}}">
                                <i class="halflings-icon white edit"></i>  
                            </a>

                            <a class="btn btn-info" href="{{URL::to('/delete-categorie/'.$v_categorie->categorie_id)}}" id="delete">
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