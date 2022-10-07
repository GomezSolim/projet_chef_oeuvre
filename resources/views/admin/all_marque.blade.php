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
                <h2><i class="halflings-icon user"></i><span class="break"></span>Liste Marques</h2>

            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                        <tr>
                            <th>Marques ID</th>
                            <th>Marques Nom</th>
                            <th>Marques Description</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>  
                    @foreach($all_marques_info as $v_marques)
                    <tbody>
                    <tr>
                        <td>{{$v_marques->marques_id}}</td>
                        <td class="center">{{$v_marques->marques_nom}}</td>
                        <td class="center">{{$v_marques->marques_description}}</td>
                        <td class="center">
                            @if($v_marques->statut_publication==1)
                            <span class="label label-success"><!-- {{$v_marques->statut_publication}} --> Active </span>

                            @else
                            <span class="label label-danger"><!-- {{$v_marques->statut_publication}} -->Desactive</span>

                            @endif
                        </td>
                        
                        <td class="center">

                        @if($v_marques->statut_publication==1)
                            <a class="btn btn-danger" href="{{URL::to('/desactive_marques/'.$v_marques->marques_id)}}">
                                <i class="halflings-icon white thumbs-down"></i>  
                            </a>
                        @else
                            <a class="btn btn-success" href="{{URL::to('/active_marques/'.$v_marques->marques_id)}}">
                                <i class="halflings-icon white thumbs-up"></i>  
                            </a>
                        @endif

                            <a class="btn btn-info" href="{{URL::to('/edit-marques/'.$v_marques->marques_id)}}">
                                <i class="halflings-icon white edit"></i>  
                            </a>

                            <a class="btn btn-info" href="{{URL::to('/delete-marques/'.$v_marques->marques_id)}}" id="delete">
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