@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>                
                <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>                
                <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>     
              
                <script>
                $(document).on('click', '#Activox', function (e) {
    if ($('#Activox').prop('checked')) { $('#Activox').val(true);
        $('#Activo').val(true);
    }
    else {
        $('#Activox').val(false);
        $('#Activo').val(false);
    }
})
$(document).on('click', '#Protegidox', function (e) {
    if ($('#Protegidox').prop('checked')) { $('#Protegidox').val(true);
        $('#Protegido').val(true);
    }
    else {
        $('#Protegidox').val(false);
        $('#Protegido').val(false);
    }
})
                </script>  
                <!--SCRIPT PARA -->
<script>
$(document).on('click', '#Activox1', function (e) {
    if ($('#Activox1').prop('checked')) { $('#Activox1').val(true);
        $('#Activo1').val(true);
    }
    else {
        $('#Activox1').val(false);
        $('#Activo1').val(false);
    }
})
$(document).on('click', '#Protegidox1', function (e) {
    if ($('#Protegidox1').prop('checked')) { $('#Protegidox1').val(true);
        $('#Protegido1').val(true);
    }
    else {
        $('#Protegidox1').val(false);
        $('#Protegido1').val(false);
    }
})
                </script>          
                     
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<script>
                    ///PAGINADO DE TABLAS EN 25 ROWS
                    $( document ).ready(function() {
                        $("#tableroles").dataTable().fnDestroy();
                        $('#tableroles').dataTable( {
    "pageLength": 25
});
    });
                    
                </script>   
<div>
 <!-- PAGE TITLE -->
 <div class="page-title">
                <h2><span class="fa fa-user"></span> Roles de Usuarios</h2>
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
                                <!--INICIA MODAL PARA NUEVOS ROLES-->
                                <div class="modal" id="modal_large" tabindex="-1" role="dialog" aria-labelledby="largeModalHead"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span
                                                        aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="largeModalHead">Nuevo Rol de Usuario</h4>
                                            </div>
                                            <!--INICIO DE FORM PARA GUARDAR-->
                                            <form action="{{route('rolesadd')}}" method="POST">
                                            {{csrf_field()}}
                                            <div class="modal-body" text-align="center">
                                                <!--inicia-->
                                                <div class="row">
                                                    <div class="col-md-10">

                                                        <form class="form-horizontal">

                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Tipo de
                                                                    rol</label>
                                                                <div class="col-md-3 col-xs-12">
                                                                    <div class="form-check">
                                                                    
                                                                    <input type="hidden" name="IdUCreo" id="IdUCreo" value="{{Auth::id()}}">
                                                                        <label>Interno
                                                                        </label>
                                                                            <input type="radio" name="TipoRol" id="TipoRol" value="Interno">
                                                                            <label>  Proveedor
                                                                        </label>
                                                                            <input type="radio" name="TipoRol" id="TipoRol" value="Proveedor">
                                                                    </div>                                                                 
                                                                </div>
                                                            </div>
                                                       
                                                            <br>
                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Nombre rol</label>
                                                                <div class="col-md-5 col-xs-12">
                                                                    <input type="text" maxlength="100" name="Nombre" id="Nombre" class="form-control" required/>
                                                                </div>
                                                           </div>

                                                        <!---->
                                                        <br>
                                                        <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label"></label>
                                                                <div class="col-md-3 col-xs-12">
                                                                    <div class="form-check">
                                                                    
                                                                    <input type="hidden" name="IdUCreo" id="IdUCreo" value="{{Auth::id()}}">
                                                                        <label>Activo
                                                                        </label>
                                                                        <input name="Activox" id="Activox" value="False" type="checkbox">
                                                                            <label>  Protegido
                                                                        </label>
                                                                        <input id="Protegidox" name="Protegidox" value="False" type="checkbox">
                                                                    </div>                                                                 
                                                                </div>
                                                            </div>
                                                            <!---->

                                                          
                                                            
                                                             <input type="hidden" id="Activo" name="Activo" value="False">
                                                             <input type="hidden" id="Protegido" name="Protegido" value="False">
                                                    
                                                    </div>
                                                </div>
                                                <!--termina-->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success">Guardar<span
                                                        class="fa fa-floppy-o fa-right"></span></button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar<span
                                                        class="fa fa-sign-out fa-right"></span></button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                                            <!--FINAL DE MODAL PARA NUEVOS ROLES-->

 
                            </div>
                            </div>
                            
                            <div class="panel-body">

                                <table id="tableroles" name="tableroles" class="table datatable text">
                                    <thead>
                                        <tr>
                                            <th hidden></th>              
                                            <th class="col-md-3 col-xs-12">Rol</th>
                                            <th CLASS="col-md-2 col-xs-12">Tipo de rol</th>
                                            <th class="col-md-1 col-xs-12">Activo</th>
                                            <th class="col-md-1 col-xs-12">Protegido</th>
                                            <th class="col-md-1 col-xs-12">Editar</th>                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <div>
                                    <!--INICIO DE CICLO PARA PINTAR USUARIOS-->
                                @foreach ($users as $user)
                                <tr>
                                <td hidden>{{$user->IdRol}}</td>
                                <td> {{$user->Nombre}} </td>
                                <td> {{$user->TipoRol}} </td>
                                <td>@if($user->Activo)<input type="checkbox" checked disabled>@else<input type="checkbox" disabled>  @endif</td>
                                <td>@if($user->Protegido)<input type="checkbox" checked disabled>@else<input type="checkbox" disabled>  @endif</td>
                                <td style="text-align:left"><button style="text-align:left" class="btn btn-default" data-toggle="modal" data-rolidx="{{$user->IdRol}}" data-TipoRolx="{{$user->TipoRol}}" data-NombreRolx="{{$user->Nombre}}" data-Activox="{{$user->Activo}}" data-Protegido="{{$user->Protegido}}" data-target="#editar"><span class="fa fa-pencil-square-o"></span></button></td>
                              <!--  <td><button class="btn btn-default" data-toggle="modal" data-target="#modal_large2">
                                <span class="fa fa-key"></span></button></td>-->
                               
                                </tr>
                                @endforeach
                                </div>                                      
                                <!--FIN DE CICLO PARA PINTAR USUARIOS-->
                                    </tbody>
                                </table>
                              

                                <div class="modal" id="modal_large2" tabindex="-1" role="dialog" aria-labelledby="largeModalHead2"
                                    aria-hidden="hidden">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span
                                                        aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="largeModalHead2">Permisos por usuario</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">

                                                        <form class="form-horizontal">
                                                            <table class="table table-condensed">
                                                                <thead>
                                                                    <tr>
                                                                        <th class=" col-md-4 col-xs-12">
                                                                            Pantalla
                                                                        </th>
                                                                        <th>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>Acceder
                                                                        </th>
                                                                        <th>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>Guardar
                                                                        </th>
                                                                        <th>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>Editar
                                                                        </th>
                                                                        <th>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>Imprimir
                                                                        </th>
                                                                        <th>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>Eliminar
                                                                        </th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <tr>
                                                                        <td>Parametros</td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tipo de usuario</td>

                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Usuarios</td>

                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Guardar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal" id="modal_basic" tabindex="-1" role="dialog" aria-labelledby="defModalHead"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span
                                                        aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="defModalHead">Contraseña </h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="form-group">

                                                        <div class="col-md-3 col-xs-12 text-center"><label class="control-label">Contraseña
                                                                anterior</label></div>
                                                        <div class="col-md-9 col-xs-12"><input type="text" class="form-control" />
                                                        </div><br /><br />

                                                    </div>
                                                    <div class="form-group">

                                                        <div class="col-md-3 col-xs-12 text-center"><label class="control-label">Nueva
                                                                contraseña</label></div>
                                                        <div class="col-md-9 col-xs-12"><input type="text" class="form-control" />
                                                        </div><br /><br />

                                                    </div>
                                                    <div class="form-group">

                                                        <div class="col-md-3 col-xs-12 text-center"><label class="control-label">Confirmar
                                                                contraseña</label></div>
                                                        <div class="col-md-9 col-xs-12"><input type="text" class="form-control" />
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Guardar<span
                                                        class="fa fa-floppy-o fa-right"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- END DEFAULT DATATABLE -->

                    </div>
                </div>

            </div>
            <!-- PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT -->

    </div>
    <!-- END PAGE CONTAINER -->
                 <!--INICIO DE MENSAJE PARA MODIFICACION-->
   @if(Session::has('modifik'))     
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
      <strong>{{ Session::get('modifik') }}</strong>
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
                 <!--MODAL PARA BORRAR-->
    <div class="modal" id="borrar" tabindex="-1"  class="modal fade bd-example-modal-sm" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:red;color:white;">
                    <h2 class="modal-title">Confirmar</h2>                
                </div>
      <form action="{{route('rolborrar')}}" method="post">
      <!--cosas para que deje borrar los registros, el token y el csrf-->
      {{method_field('delete')}}
      {{csrf_field()}}
                        <div class="modal-body">
                        <input type="hidden" name="roles_id" id="rol_id" value="{{$user->IdRol}}">
                        <img src='img/advertencia.png' height="42" width="42"/> 
                            Deseas borrar el registro?
                        </div>
        <div class="modal-footer" style="background-color:red;color:white;">
        <button type="submit" class="btn btn-success">Aceptar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>
                                <!-- FIN DE MODAL PARA BORRAR-->
                                @if(Session::has('deletek'))     
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
      <strong>{{ Session::get('deletek') }}</strong>
     
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
                                @if(Session::has('addk'))     
                     <script>                    
    $(window).on('load',function(){
        $('#myModal7').modal('show');
    });
                     </script>
<div id="myModal7" class="modal fade bd-example-modal-sm" role="dialog">
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
      <strong>{{ Session::get('addk') }}</strong>
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
            @if(Session::has('errorrol'))     
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
      <strong>{{ Session::get('errorrol') }}</strong>
     
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

   <!-- FIN DE MODAL PARA BORRAR-->


             <!--INICIA MODAL PARA EDITAR ROLES-->
             <div class="modal" id="editar" tabindex="-1" role="dialog" aria-labelledby="largeModalHead"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span
                                                        aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="largeModalHead">Editar Rol de Usuario</h4>
                                            </div>
                      <!--INICIO DE FORM PARA EDITAR-->
                      <form action="{{route('rolesedit')}}" method="POST">
                                            {{csrf_field()}}
                                            <div class="modal-body" text-align="center">
                                                <!--inicia-->
                                                <div class="row">
                                                    <div class="col-md-10">

                                                        <form class="form-horizontal">

                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Tipo de
                                                                    rol</label>
                                                                <div class="col-md-3 col-xs-12">
                                                                    <div class="form-check">
                                                                    <input type="hidden" name="rol_idedit" id="rol_idedit" value="{{$user->IdRol}}">                                                                    
                                                                    <input type="hidden" name="IdUModifico" id="IdUModifico" value="">
                                                                        <label>Interno
                                                                        </label>
                                                                            <input type="radio" name="TipoRol" id="TipoRol" value="Interno">
                                                                            <label>  Proveedor
                                                                        </label>
                                                                            <input type="radio" name="TipoRol" id="TipoRol" value="Proveedor">
                                                                    </div>                                                                 
                                                                </div>
                                                            </div>
                                                       
                                                            <br>
                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Nombre rol</label>
                                                                <div class="col-md-5 col-xs-12">
                                                                    <input type="text" maxlength="100" name="Nombre" id="Nombre" class="form-control" required/>
                                                                </div>
                                                           </div>

                                                        <!---->
                                                        <br>
                                                        <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label"></label>
                                                                <div class="col-md-3 col-xs-12">
                                                                    <div class="form-check">
                                                                    
                                                                    <input type="hidden" name="IdUModifico" id="IdUModifico" value="{{Auth::id()}}">
                                                                        <label>Activo
                                                                        </label>
                                                                        <input name="Activox1" id="Activox1" value="False" type="checkbox">
                                                                            <label>  Protegido
                                                                        </label>
                                                                        <input id="Protegidox1" name="Protegidox1" value="False" type="checkbox">
                                                                    </div>                                                                 
                                                                </div>
                                                            </div>
                                                            <!---->

                                                          
                                                            
                                                             <input type="hidden" id="Activo1" name="Activo1" value="False">
                                                             <input type="hidden" id="Protegido1" name="Protegido1" value="False">
                                                </form>

                                                    </div>
                                                </div>
                                                <!--termina-->
 
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success">Guardar<span
                                                        class="fa fa-floppy-o fa-right"></span></button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar<span
                                                        class="fa fa-sign-out fa-right"></span></button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                            <!--FINAL DE MODAL PARA EDITAR ROLES-->   
                                  

@endsection