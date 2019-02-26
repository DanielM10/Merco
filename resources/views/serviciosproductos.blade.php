@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>                
                <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>                
                <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>     
@section('content')
<script>
                    ///PAGINADO DE TABLAS EN 25 ROWS
                    $( document ).ready(function() {
                        $("#tableproductos").dataTable().fnDestroy();
                        $('#tableproductos').dataTable( {
    "pageLength": 25
});
    });
                    
                </script>  
  <!-- PAGE TITLE -->
  <div class="page-title">
                <h2 class="naranja"><span class="fa fa-wrench"></span> Productos</h2>
            </div>
            <!-- END PAGE TITLE -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <div class="row">
                    <div class="col-md-12">
                        <!-- START DEFAULT DATATABLE -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div>
                                    <button class="btn btn-success pull-right" data-toggle="modal" data-target="#modal_large">Nuevo</button><br /><br />
                                </div>
                                <div class="modal" id="modal_large" tabindex="-1" role="dialog" aria-labelledby="largeModalHead"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span
                                                        aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="largeModalHead">Servicios/Productos</h4>
                                            </div>
                                            <div class="modal-body">
                                                <!--inicia-->
                                                <div class="row">
                                                    <div class="col-md-12">

                                                                                               
                                         <form class="form-horizontal" action="{{route('serviciosproductosadd')}}" method="POST">
                                            {{csrf_field()}} 

                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Proveedor</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                    <input disabled type="text" id="Proveedor" name="Proveedor" class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Descripción*</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                    <input type="text" id="Descripcion" name="Descripcion" class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">SKU</label>
                                                                <div class="col-md-3 col-xs-12">
                                                                    <input type="text" id="SKU" name="SKU" class="form-control" />
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Activo</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                    <label class="switch switch-small">
                                                                        <input type="checkbox" id="Activo" name="Activo" checked value="1" />
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Protegido</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                    <label class="switch switch-small">
                                                                        <input type="checkbox" id="Protegido" name="Protegido" checked value="0" />
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <!-- START ACCORDION -->

                                                            <!-- END ACCORDION -->
                                                       
                                                    </div>
                                                </div>
                                                <!--termina-->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success">Guardar<span
                                                        class="fa fa-floppy-o fa-right"></span></button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="panel-body">

                                <table id="tableproductos" name="tableproductos" class="table table-striped datatable text">
                                    <thead>
                                        <tr>
                                            <th>Proveedor</th>
                                            <th>SKU </th>
                                            <th>Descripción</th>
                                            <th>Estatus</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($productos as $product)
                                       <tr>
                                        <td>{{$product->Proveedor}}</td>
                                        <td>{{$product->Articulo}}</td>
                                        <td>{{$product->Descripcion1}}</td>
                                        <td>@If($product->Activo==1)Activo @else Inactivo @endif</td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <!-- END DEFAULT DATATABLE -->
                        @if(Session::has('addproducto'))     
                     <script>                    
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
                     </script>
<div id="myModal" class="modal fade bd-example-modal-sm" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color:5BBF21;color:white;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">¡Exito!</h2>
      </div>
      <div class="modal-body">       
      <div style="font-size: 15px;" class='col-xs-9 col-sm-9 col-md-9 col-lg-9'>
      <img src='img/exito.png' height="42" width="42"/>
      <strong>Producto agregado correctamente</strong>
     
      </div>
</div>

<br>
<br>
<br>
      <div class="modal-footer"  style="background-color:5BBF21;color:white;">
        <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
    </div>
  </div>
</div> 
                             
                                     
            @endif
            @if(Session::has('errorproducto'))     
                     <script>                    
    $(window).on('load',function(){
        $('#myModal3').modal('show');
    });
                     </script>
<div id="myModal3" class="modal fade bd-example-modal-sm" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color:red;color:white;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">¡Error!</h2>
      </div>
      <div class="modal-body">       
      <div style="font-size: 15px;" class='col-xs-9 col-sm-9 col-md-9 col-lg-9'>
      <img src='img/advertencia.png' height="42" width="42"/> 
      <strong>{{ Session::get('errorproducto') }}</strong>
     
      </div>
</div>

<br>
<br>
<br>
      <div class="modal-footer"  style="background-color:red;color:white;">
        <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
    </div>
  </div>
</div> 

            @endif
                    </div>
                </div>
            </div>
            <!-- PAGE CONTENT WRAPPER -->

        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->
    @endsection