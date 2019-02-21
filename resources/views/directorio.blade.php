@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>                
                <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>                
                <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>     
@section('content')
 <!-- PAGE TITLE -->
 <div class="page-title">
                <h2 class="naranja"><span class="fa fa-building"></span> Directorio Sucursales </h2>
            </div>
            <!-- END PAGE TITLE -->
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-default">
                            <div class="panel-body">

                            <form class="form-horizontal" action="/directorio" method="GET" role="search">
                            {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <div class="input-group">      
                                            
                                            <span class="input-group-btn">
                                            <button type="submit" class="btn btn-default" style=" display: inline-block;
    padding: 9px 15px;"><i class="fa fa-search"></i></button>
                                            </span>
                                            <input type="text" style=" display: inline-block;
    padding: 10px 15px;" name="busqsucursal" id="busqsucursal" class="form-control" placeholder="Buscar por nombre" />                                                  
                                            </form>                                                             
                                        </div>
                                             
 
  

                                               

                                            </div>
                                        </div>                                
                                    </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="panel panel-default">
                            <div class="panel-body">
                            @include('buscador')
                <div class="row"> 
                @if($sucursales->isEmpty())
                <div class="center-block"><p>No hay resultados</p></div>
                @else
                @foreach ($sucursales as $sucursal)
                                <!--REGISTRO CONTACTO-->
                <div class="col-md-3">
                       
                       <div class="panel panel-default">
                           <div class="panel-body profile">

                               <div class="profile-data">
                               <div class="profile-data-name">{{$sucursal->Nombre}}</div>
                               </div>
                                </div>
                                <div class="panel-body">
                                <div class="contact-info">                                                               
                                    <p><small>Num. de Sucursal</small><br />{{$sucursal->Sucursal}}</p>
                                    <p><small>Estado</small><br />{{$sucursal->Estado}}</p>
                                    <p><small>Ciudad</small><br />{{$sucursal->Ciudad}}</p>
                                    <p><small>Dirección</small><br />{{$sucursal->Direccion}}</p>  
                                    <p><small>Mapa</small><br /></p>  
                                    <div align="center">
                                    <iframe src="http://maps.google.com/maps?q={{$sucursal->Latitud}},{{$sucursal->Longitud}}&z=15&output=embed" width="160" height="170" frameborder="0" style="border:0"></iframe>                                    
                                    </div>
                                </div>
                            </div>
                            </div>
                            </div> 
<!-- FIN REGISTRO CONTACTO-->                                
                @endforeach
                @endif
                    </div>
                   
                    </div>

                </div>
<!--PAGINACION               <div class="row">
                    <div class="col-md-12">
                        <ul class="pagination pagination-sm pull-right push-down-10 push-up-10">
                            <li class="disabled"><a href="#">«</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                    </div>
                    FIN DE PAGINACION-->
                </div>
            </div>
            </div>
            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->
    @endsection