@extends('layouts.master')
<script type="text/javascript" src="js/jquery-3.3.1.js"></script>                
<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>                
                
@section('content')
<script>
   $(document).on('click', '#Activo', function (e) {
    if ($('#Activo').prop('checked')) { $('#Activo').val(true);
        $('#Activo2').val(true);
    }
    else {
        $('#Activo').val(false);
        $('#Activo2').val(false);
    }
})
$(document).on('click', '#Bloqueado', function (e) {
    if ($('#Bloqueado').prop('checked')) { $('#Bloqueado').val(true);
        $('#Bloqueado2').val(true);
    }
    else {
        $('#Bloqueado').val(false);
        $('#Bloqueado2').val(false);
    }
})

     $(document).on('click', '#Activoz', function (e) {
    if ($('#Activoz').prop('checked')) { $('#Activoz').val(true);
        $('#Activo1').val(true);
    }
    else {
        $('#Activo1').val(false);
        $('#Activoz').val(false);
    }
})
$(document).on('click', '#Bloqueadoz', function (e) {
    if ($('#Bloqueadoz').prop('checked')) { $('#Bloqueadoz').val(true);
        $('#Bloqueado1').val(true);
    }
    else {
        $('#Bloqueado1').val(false);
        $('#Bloqueadoz').val(false);
    }
})
                </script> 
           
                <script>
                    function mostrarinternos(){
                        debugger;
                document.getElementById("muestrainternos").removeAttribute("style");
            }
                    function mostrarproveedores(){
                        debugger;
                document.getElementById("muestraproveedores").removeAttribute("style");
            }
                </script>   
                <script>
                    ///PAGINADO DE TABLAS EN 25 ROWS
                    $( document ).ready(function() {
                        $("#tablenosort").dataTable().fnDestroy();
                        $('#tablenosort').dataTable( {
    "pageLength": 25
});
    });
                    
                </script>         
                <!--SCRIPT PARA -->     
  <!-- PAGE TITLE -->
  <div class="page-title">
                <h2><span class="fa fa-user"></span> Usuarios</h2>
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
                                    <button onclick="randompass()" class="btn btn-success pull-right" data-toggle="modal" data-target="#modal_large">Nuevo</button><br /><br />
                                </div>

                                <div class="modal" id="modal_large" tabindex="-1" role="dialog" aria-labelledby="largeModalHead"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span
                                                        aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="largeModalHead">Nuevo Usuario</h4>
                                            </div>
                                                   <!--AQUI SE INCLUYEN LOS ARCHIVOS DE SESION Y EL FORM CON LA RUTA-->
                                            <form class="form-horizontal" action="{{route('usuarioadd')}}" method="post" name="adding" id="adding">
                                            {{csrf_field()}}
                                            <div class="modal-body">
                                               <!--inicia-->
                                                <div class="row">
                                                    <div class="col-md-12">

                                                        

                                                            <!--<div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Tipo de
                                                                    rol</label>
                                                                <div class="col-md-3 col-xs-12">
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="tiporolx" id="tiporolx1" value="interno">
                                                                            Interno
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label>
                                                                            <input type="radio" name="tiporolx" id="tiporolx2" value="proveedor">
                                                                            Proveedor
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>-->
                                                            <div class="form-group">
                                                            <label class="col-md-3 col-xs-12 control-label">Roles de usuario</label>
                                                            <div class="col-md-6">
                                                            <select class="form-control" name="tiporol" id="tiporol" required>
                                                                        <option selected="selected">--Seleccione--</option>
                                                                        <option onselect="myFunction1()" value="Proveedor">Proveedor</option>
                                                                        <option onselect="myFunction2()" value="Interno">Interno</option>
                                                                    </select>
                                                            </div>
                                                            </div>
                                                            <div class="form-group" >
                                                                <label class="col-md-3 col-xs-12 control-label">Rol</label>
                                                                <div class="col-md-6">
                                                                    <select class="form-control" id="Rol" name="Rol" required>
                                                                        <option selected="selected" value="">--Seleccione--</option>                                                                                                                                                
                                                                    </select>
                                                                </div>
                                                            </div>    
                                                            <div class="form-group content" name="View1" id="View1">
                                                                <label class="col-md-3 col-xs-12 control-label">Proveedor</label>
                                                                <div class="col-md-6">
                                                                    <select class="form-control" id="Proveedor" name="Proveedor">
                                                                        <option selected="selected" value="">--Seleccione--</option>  
                                                                        @foreach($proveedorescombo as $proveedorcombo)  
                                                                        <option value="{{$proveedorcombo->Proveedor}}">{{$proveedorcombo->Nombre}}</option>  
                                                                        @endforeach                                                                                                                                            
                                                                    </select>
                                                                </div>
                                                            </div>                                                                
                                                            <div hidden class="col-md-2"><span id="loader"><i class="fa fa-spinner fa-3x fa-spin"></i></span></div>

                                                                                                                    </div>                                                                                
                                                            <input type="hidden" name="IdUCreo" id="IdUCreo" value="{{Auth::id()}}">
                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Nombre</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                    <input type="text" name="name" id="name" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Apellido
                                                                    paterno</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                    <input type="text" name="ApPaterno" id="ApePaterno" class="form-control" required />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Apellido
                                                                    materno</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                    <input type="text" name="ApMaterno" id="ApMaterno" class="form-control" required/>
                                                                </div>
                                                            </div>                                                                                                                                                                          
                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Correo
                                                                    electrónico</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                    <input type="email" class="form-control" id="email" name="email" required/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group" hidden>
                                                                <label class="col-md-3 col-xs-12 control-label">Contraseña</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                    <input type="text" class="form-control" name="password" id="password" required/>
                                                                </div>
                                                            </div>         
                                                                                                               
                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Activo</label>
                                                                <div class="col-md-3 col-xs-12">
                                                                    <input type="checkbox" value="false" name="Activo" id="Activo">
                                                                </div>
                                                                <input type="hidden" name="Activo2" id="Activo2">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Bloqueado</label>
                                                                <div class="col-md-3 col-xs-12">
                                                                    <input type="checkbox" value="false" name="Bloqueado" id="Bloqueado">                                                                
                                                                </div>
                                                                <input type="hidden" name="Bloqueado2" value="false" id="Bloqueado2">
                                                                <input type="hidden" name="Fechacreous" value="{{$ldate = date('Y-m-d')}}" id="Fechacreous">
                                                            </div>                                                                                                                       
                                                       

                                                    </div>
                                                </div>
                                                <!--termina-->
                                         
                                            <div class="modal-footer">
     <button type="submit" class="btn btn-success" >Guardar<span class="fa fa-floppy-o fa-right"></span></button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar<span
                                                        class="fa fa-sign-out fa-right"></span></button>
                                            </div>
                                            </form>
                                            <!---AQUI TERMINA EL FORM DEL METODO-->
                                        </div>
                                    </div>
                                </div>



                                </div>
                                </div>
                            </div>
<!--INICIO DEL FORM PARA EDITAR-->
<div class="row">
                    <div class="col-md-12">
                        <!-- START DEFAULT DATATABLE -->                        

                                <div class="modal" id="modal_editar" tabindex="-1" role="dialog" aria-labelledby="largeModalHead"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span
                                                        aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="largeModalHead">Editar Usuario</h4>
                                            </div>
                                                   <!--AQUI SE INCLUYEN LOS ARCHIVOS DE SESION Y EL FORM CON LA RUTA-->
                                            <form class="form-horizontal" action="{{route('usuarioedit')}}" method="post" name="editing" id="editing">
                                            {{csrf_field()}}
                                            <div class="modal-body">
                                               <!--inicia-->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                    <div class="form-group">
                                                           
                                                            <label class="col-md-3 col-xs-12 control-label">Roles de usuario</label>
                                                            <div class="col-md-6">
                                                            <select class="form-control" name="tiporol1" id="tiporol1" required>
                                                                        <option selected="selected">--Seleccione--</option>
                                                                        <option onselect="myFunction1()" value="Proveedor">Proveedor</option>
                                                                        <option onselect="myFunction2()" value="Interno">Interno</option>
                                                                    </select>
                                                            </div>
                                                            </div>                     
                                                                                                
                                                            <div class="form-group" >
                                                                <label class="col-md-3 col-xs-12 control-label">Rol</label>
                                                                <div class="col-md-6">
                                                                    <select class="form-control" id="Rol1" name="Rol1" required>
                                                                        <option selected="selected" value="">--Seleccione--</option>                                                                                                                                                                                                                                                                                      
                                                                    </select>
                                                                </div>
                                                            </div>    
                                                            <div class="form-group content" name="View1" id="View1">
                                                                <label class="col-md-3 col-xs-12 control-label">Proveedor</label>
                                                                <div class="col-md-6">
                                                                    <select class="form-control" id="Proveedor1" name="Proveedor1">
                                                                        <option selected="selected" value="">--Seleccione--</option>  
                                                                        @foreach($proveedorescombo as $proveedorcombo)  
                                                                        <option value="{{$proveedorcombo->Proveedor}}">{{$proveedorcombo->Nombre}}</option>  
                                                                        @endforeach                                                                                                                                            
                                                                    </select>
                                                                </div>
                                                            </div>                 
                                                    <input type="hidden" name="iduser" id="iduser">
                                                            
                                                            <input type="hidden" id="Activo1" name="Activo1" value="False">
                                                             <input type="hidden" id="Bloqueado1" name="Bloqueado1" value="False">
                                                            <input type="hidden" name="IdUModifico" id="IdUModifico" value="{{Auth::id()}}">
                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Nombre</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                    <input type="text" name="name" id="name" class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Apellido
                                                                    paterno</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                    <input type="text" name="ApPaterno" id="ApePaterno" class="form-control" required/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Apellido
                                                                    materno</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                    <input type="text" name="ApMaterno" id="ApMaterno" class="form-control" required/>
                                                                </div>
                                                            </div>                                                                                                                                                                    
                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Correo
                                                                    electrónico</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                    <input type="email" class="form-control" id="email" name="email" required/>
                                                                </div>
                                                            </div>                                                                                                                   
                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Activo</label>
                                                                <div class="col-md-3 col-xs-12">
                                                                    <input type="checkbox" value="true" name="Activoz" id="Activoz">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Bloqueado</label>
                                                                <div class="col-md-3 col-xs-12">
                                                                    <input type="checkbox" value="true" name="Bloqueadoz" id="Bloqueadoz">
                                                                </div>
                                                            </div>                                                                                                                       
                                                       

                                                    </div>
                                                </div>
                                                <!--termina-->
                                            </div>
                                            <div class="modal-footer">
     <button type="submit" class="btn btn-success" >Guardar<span class="fa fa-floppy-o fa-right"></span></button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar<span
                                                        class="fa fa-sign-out fa-right"></span></button>
                                            </div>
                                            </form>
                                            <!---AQUI TERMINA EL FORM DEL METODO-->
                                        </div>
                                    </div>
                                </div>



                                </div>
                                </div>
                            </div>
<!--FIN DEL FORM PARA EDITAR-->
                            <div class="panel-body">

                                <table id="tablenosort" class="table table-striped datatable text" data-page-length='25'>
                                    <thead>
                                        <tr>
                                        <th hidden></th> 
                                            <th class="col-md-3 col-xs-12">Nombre</th>
                                            <th>Correo electrónico</th>
                                            <th>Rol de usuario</th>                                           
                                            <th>Activo</th>
                                            <th>Editar</th>
                                           <th>Permisos</th>
                                            <th>Contraseña</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($usuarios as $usuario)
                                        <tr>
                                        <td hidden>{{$usuario->id}}</td>
                                         <td> {{$usuario->name}} {{$usuario->ApPaterno}} {{$usuario->ApMaterno}}  </td>                                            
                                            <td>{{$usuario->email}}</td>
                                            <td>{{$usuario->TipoRol}}</td>                                            
                                            <td>@if($usuario->Activo)<label>Si</label>@else<label>No</label> @endif</td>
                                            <td><button class="btn btn-default" data-toggle="modal" data-proveedorx="{{$usuario->Proveedor}}" data-prueba="{{$usuario->TipoRol}}" data-usuarioid="{{$usuario->id}}" data-rolusersx="{{$usuario->IdRol}}" data-usernombre="{{$usuario->name}}" data-userapep="{{$usuario->ApPaterno}}" data-userapm="{{$usuario->ApMaterno}}" data-usernumepleado="{{$usuario->NumEmpleado}}" data-useremail="{{$usuario->email}}" data-useractivo="{{$usuario->Activo}}" data-userbloqueado="{{$usuario->Bloqueado}}" data-target="#modal_editar"><span
                                                        class="fa fa-pencil-square-o"></span></button></td>

                                           <td><button class="btn btn-default" data-toggle="modal" data-usuarioidpermisos="{{$usuario->id}}" data-target="#modal_permisos"><span
                                                        class="fa fa-key"></span></button></td>
                                            <td><button class="btn btn-default" data-toggle="modal" data-usuarioidcontrasena="{{$usuario->id}}" data-usuarioidcontrasena1="{{$usuario->password}}" data-target="#modal_contrasena"><span
                                                        class="fa fa-lock"></span></button></td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="modal" id="modal_permisos" tabindex="-1" role="dialog" aria-labelledby="largeModalHead2"
                                    aria-hidden="hidden">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span
                                                        aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="largeModalHead2">Permisos por usuario</h4>
                                            </div>
                                                   <!--AQUI SE INCLUYEN LOS ARCHIVOS DE SESION Y EL FORM CON LA RUTA-->
                                            <form class="form-horizontal" action="{{route('configuracionupdate')}}" method="post">
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                              @include('userpermisos')
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Guardar</button>
                                            </div>
                                            </form>
                                            <!---AQUI TERMINA EL FORM DEL METODO-->
                                        </div>
                                    </div>
                                </div>
                                <div class="modal" id="modal_contrasena" tabindex="-1" role="dialog" aria-labelledby="defModalHead"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span
                                                        aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="defModalHead">Contraseña </h4>
                                            </div>
                                            <!--AQUI SE INCLUYEN LOS ARCHIVOS DE SESION Y EL FORM CON LA RUTA-->
                                            <form class="form-horizontal" action="{{route('passupdate')}}" method="post">
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                            <input type="hidden" id="idusrx" name="idusrx" value="">
                                            <div class="row">
                                                    <div class="form-group">

                                                        <div class="col-md-4 col-xs-12"><label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;Contraseña
                                                                anterior</label></div>
                                                        <div class="col-md-7 col-xs-12"><input type="password" id="oldpass" name="oldpass" class="form-control" />
                                                        </div><br /><br />
                                                    </div>
                                                    <div class="form-group">

                                                        <div class="col-md-4 col-xs-12"><label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;Nueva
                                                                contraseña</label></div>
                                                        <div class="col-md-7 col-xs-12"><input type="password" name="pass" id="pass" class="form-control" />
                                                        </div><br /><br />
                                                    </div>
                                                    <div class="form-group">

                                                        <div class="col-md-4 col-xs-12"><label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;Confirmar
                                                                contraseña</label></div>
                                                        <div class="col-md-7 col-xs-12"><input type="password" name="passconf" id="passconf" class="form-control" />
                                                        </div>
                                                    </div>     
                                                    <input type="hidden" name="contraupdate" value="{{$ldate = date('Y-m-d')}}" id="contraupdate">                                     
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success">Guardar<span
                                                        class="fa fa-floppy-o fa-right"></span></button>
                                            </div>
                                            </form>
                                            <!---AQUI TERMINA EL FORM DEL METODO-->
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- END DEFAULT DATATABLE -->
                        @if(Session::has('modificaruser'))     
                     <script>                    
    $(window).on('load',function(){
        $('#myModal2').modal('show');
    });
                     </script>
<div id="myModal2" class="modal fade bd-example-modal-sm" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color:5BBF21;color:white;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">¡Exito!</h2>
      </div>
      <div class="modal-body">
      <div>
      <img src='img/exito.png' height="32" width="32"/> 
      <div style="font-size: 10px;" class='col-xs-9 col-sm-9 col-md-9 col-lg-9'>
      <strong>{{ Session::get('modificaruser') }}</strong>
      </div>  
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
            @if(Session::has('adduser'))     
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
      <div>
      <img src='img/exito.png' height="32" width="32"/> 
      <div style="font-size: 10px;" class='col-xs-9 col-sm-9 col-md-9 col-lg-9'>
      <strong>{{ Session::get('adduser') }}</strong>
      </div>  
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
                   <!-- FIN DE MODAL PARA BORRAR-->
                   @if(Session::has('erroruser'))     
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
      <strong>{{ Session::get('erroruser') }}</strong>
     
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
            @if(Session::has('passupdate'))     
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
      <strong>{{ Session::get('passupdate') }}</strong>
     
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
            @if(Session::has('passnotupdate'))     
                     <script>                    
    $(window).on('load',function(){
        $('#myModal5').modal('show');
    });
                     </script>
<div id="myModal5" class="modal fade bd-example-modal-sm" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color:red;color:white;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">¡Error!</h2>
      </div>
      <div class="modal-body">       
      <div style="font-size: 10px;" class='col-xs-9 col-sm-9 col-md-9 col-lg-9'>
      <img src='img/advertencia.png' height="32" width="32"/> 
      <strong>{{ Session::get('passnotupdate') }}</strong>
     
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
                  
<script>
$(document).ready(function() {
 debugger;
$('select[name="tiporol"]').on('change', function(){
 debugger;
    var countryId = $(this).val();
    if(countryId=="Proveedor"){
        
        $('.content').show();
        $.ajax({
            url: '/usuario/get/'+countryId,
            type:"GET",
            dataType:"json",
            beforeSend: function(){
                $('#loader').css("visibility", "visible");
            },

            success:function(data) {
debugger;
                $('select[name="Rol"]').empty();

                $.each(data, function(key, value){

                    $('select[name="Rol"]').append('<option value="'+ value +'">' + key + '</option>');

                });
            },
            complete: function(){
                $('#loader').css("visibility", "hidden");
            }
        });
    }
        else if(countryId=="Interno"){
            $('.content').hide();
            $.ajax({
            url: '/usuario/get/'+countryId,
            type:"GET",
            dataType:"json",
            beforeSend: function(){
                $('#loader').css("visibility", "visible");
            },

            success:function(data) {
debugger;
                $('select[name="Rol"]').empty();

                $.each(data, function(key, value){

                    $('select[name="Rol"]').append('<option value="'+ value +'">' + key + '</option>');

                });
            },
            complete: function(){
                $('#loader').css("visibility", "hidden");
            }
        });
        }
    else {
        $('select[name="Rol"]').empty();
    }

});

});
</script> 

<script>
 $(document).ready(function() {
  debugger;
$('select[name="tiporol1"]').on('change', function(){
    debugger;
    var countryId = $(this).val();
    if(countryId=="Proveedor"){
        
        $('.content').show();
        $.ajax({
            url: '/usuario/get/'+countryId,
            type:"GET",
            dataType:"json",
            beforeSend: function(){
                $('#loader').css("visibility", "visible");
            },

            success:function(data) {
debugger;
                $('select[name="Rol1"]').empty();

                $.each(data, function(key, value){

                    $('select[name="Rol1"]').append('<option value="'+ value +'">' + key + '</option>');

                });
            },
            complete: function(){
                $('#loader').css("visibility", "hidden");
            }
        });
    }
        else if(countryId=="Interno"){
            $('.content').hide();
            $.ajax({
            url: '/usuario/get/'+countryId,
            type:"GET",
            dataType:"json",
            beforeSend: function(){
                $('#loader').css("visibility", "visible");
            },

            success:function(data) {
debugger;

                $('select[name="Rol1"]').empty();

                $.each(data, function(key, value){

                    $('select[name="Rol1"]').append('<option value="'+ value +'">' + key + '</option>');

                });
            },
            complete: function(){
                $("#Rol1").val(idrolxe).change();   
                $('#loader').css("visibility", "hidden");
            }
        });
        }
    else {
        $('select[name="Rol1"]').empty();
    }

});

});
                </script> 

<!--SCRIPT PARA RANDOM PASSWORD-->
               <script>
                  function randompass() {
                   
                   $pass=Math.floor(100000 + Math.random() * 900000)
                   $('#password').val($pass);
}
               
               </script>
    <!-- END PAGE CONTAINER -->
    @endsection