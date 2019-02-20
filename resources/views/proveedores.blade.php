@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>                
                <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>                
                <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script> 
                
                <script>
     $(document).on('click', '#activoxz', function (e) {
    if ($('#activoxz').prop('checked')) { $('#activoxz').val(true);
        $('#activox1').val(true);
    }
    else {
        $('#activox1').val(false);
        $('#activoxz').val(false);
    }
})
</script>
@section('content')
<!-- PAGE TITLE -->
<div class="page-title">
                <h2><span class="fa fa-building-o"></span> Proveedores</h2>
                <div class="btn-group pull-right">

                    <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i>
                        Exportar</button>
                    <ul class="dropdown-menu">

                        <li><a href="{{route('exportproveedores')}}"><img src='img/icons/xls.png'
                                    width="24" /> XLS</a></li>
                        <li><a href="{{route('exportpdfproveedores')}}"> <img src='img/icons/Trayse101-Basic-Filetypes-2-Pdf.ico'
                                    width="24" /> PDF</a></li>

                    </ul>
                </div>
            </div>
            <!-- END PAGE TITLE -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <div class="row">
                    <div class="col-md-12">
                        <!-- START DEFAULT DATATABLE -->
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            <table class="table table-striped datatable text">
                                <thead>
                                    <tr>
                                        <th>No proveedor</th>
                                        <th>Nombre</th>                                       
                                        <th>Contacto</th>
                                        <th>Correo Electronico</th>                                        
                                        <th>Telefono</th>
                                        <th>Activo</th>
                                        <th>Categoria</th>
                                        <th>Estatus</th>                                       
                                        <th>Visualizar</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($proveedores as $proveedor)
                                    <tr>
                                        <td>{{$proveedor->Proveedor}}</td>
                                        <td>{{$proveedor->Nombre}}</td>
                                        <td>{{$proveedor->Contacto1}}</td>
                                        <td>{{$proveedor->eMail1}}</td>
                                        <td>{{$proveedor->Telefonos}}</td>                                    
                                        <td>{{$proveedor->Activo}}</td>
                                        <td>{{$proveedor->Categoria}}</td>
                                        <td>{{$proveedor->Estatus}}</td>
                                        <td><button class="btn btn-default" data-Przoveedorid="{{$proveedor->Proveedor}}" data-Proveedornombre="{{$proveedor->Nombre}}" data-Proveedorcontacto="{{$proveedor->Contacto1}}" data-Proveedoremail="{{$proveedor->eMail1}}" data-Proveedortelefonos="{{$proveedor->Telefonos}}" data-Proveedoractivo="{{$proveedor->Activo}}" data-Proveedorcategoria="{{$proveedor->Categoria}}" data-Proveedorestatus="{{$proveedor->Estatus}}" data-toggle="modal" data-target="#modal_largeprov"><span
                                                    class="fa fa-eye"></span></button></td>


                                    </tr>
                                    @endforeach                                
                                </tbody>
                            </table>
                        </div>
                        <div class="modal" id="modal_largeprov" tabindex="-1" role="dialog" aria-labelledby="largeModalHead"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                                class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="largeModalHead">Proveedor</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!--inicia-->
                                        <div class="row">

                                            <div class="col-md-12">
                                                <!-- START ACCORDION -->
                                                <div class="panel-group accordion accordion-dc">
                                                    <div class="panel ">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a href="#accTwoColOne">
                                                                    Datos generales
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div class="panel-body panel-body-open" id="accTwoColOne">
                                                            <div class="row">
                                                                <div class="col-md-12">

                                                                    <form class="form-horizontal">
                                                                    
                                                                                {{csrf_field()}}
                                                                        <div class="form-group" hidden>
                                                                            <label class="col-md-3 col-xs-12 control-label">Número
                                                                                Proveedor</label>
                                                                            <div class="col-md-3 col-xs-12">
                                                                                <label name="noproveedorx" id="noproveedorx" class="form-control"> </label>
                                                                            </div>
                                                                           
                                                                        </div>

                                                                      <!---  <div class="form-group">
                                                                            <label class="col-md-3 col-xs-12 control-label">R.F.C./TAX
                                                                                ID*</label>
                                                                            <div class="col-md-6 col-xs-12">
                                                                                <input type="text" class="form-control" />
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label class="col-md-3 col-xs-12 control-label">Dirección</label>
                                                                            <div class="col-md-6">
                                                                                <input type="text" class="form-control" />
                                                                            </div>
                                                                        </div>
-->
                                                                    
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 col-xs-12 control-label">Nombre:</label>
                                                                            <div class="col-md-6">
                                                                            <label class="control-label" name="nombrex" id="nombrex"> </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 col-xs-12 control-label">Telefono:</label>
                                                                            <div class="col-md-6">
                                                                            <label class="control-label" name="telefonox" id="telefnox"> </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 col-xs-12 control-label">Contacto:</label>
                                                                            <div class="col-md-6 col-xs-12">
                                                                            <label class="control-label" name="contactox" id="contactox"> </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 col-xs-12 control-label">Correo:</label>
                                                                            <div class="col-md-6 col-xs-12">
                                                                            <label class="control-label" name="correox" id="correox"> </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 col-xs-12 control-label">Categoria:</label>
                                                                            <div class="col-md-6">
                                                                            <label class="control-label" name="categoriax" id="categoriax"> </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 col-xs-12 control-label">Estatus:</label>
                                                                            <div class="col-md-6">
                                                                            <label class="control-label" name="estatusx" id="estatusx" class="form-control"> </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 col-xs-12 control-label">Activo</label>
                                                                            <div class="col-md-6 col-xs-12">
                                                                                <label class="switch switch-small">
                                                                                    <input disabled type="checkbox" name="activoxz" id="activoxz" checked
                                                                                        value="0" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                            <input type="hidden" name="activox1" id="activox1">
                                                                        </div>
                                                                        

                                                                   

                                                                </div>
                                                            </div>



                                                        </div>
                                                    </div>

                                                    <!-- END ACCORDION -->
                                                </div>
                                            </div>
                                            <!--termina-->
                                        </div>
                                        <div class="modal-footer">
                                            <button  type="button" data-dismiss="modal" class="btn btn-success">Cerrar<span
                                                    class="fa fa-window-close"></span></button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                        </div>
                        
                <!-- PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        @if(Session::has('modificaprov'))     
                     <script>                    
    $(window).on('load',function(){
        $('#myModal4').modal('show');
    });
                     </script>
<div id="myModal4" class="modal fade bd-example-modal-sm" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color:5BBF21;color:white;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">¡Exito!</h2>
      </div>
      <div class="modal-body">       
      <div style="font-size: 10px;" class='col-xs-9 col-sm-9 col-md-9 col-lg-9'>
      <img src='img/exito.png' height="32" width="32"/>
      <strong>{{ Session::get('modificaprov') }}</strong>
     
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
        <!-- END PAGE CONTAINER -->
        @endsection