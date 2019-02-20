@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>                
                <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>                
                <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>    
@section('content')
<!-- PAGE TITLE -->
<div class="page-title">
                <h2><span class="fa fa-graduation-cap"></span> Profesiones</h2>
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
                                    <button class="btn btn-success pull-right" data-toggle="modal" data-target="#modal_nuevo">Nuevo</button><br /><br />
                                </div>
                                <div class="modal" id="modal_nuevo" tabindex="-1" role="dialog" aria-labelledby="largeModalHead"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span
                                                        aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="largeModalHead">Nueva Profesion</h4>
                                            </div>
                                                   <!--AQUI SE INCLUYEN LOS ARCHIVOS DE SESION Y EL FORM CON LA RUTA-->
                                            <form class="form-horizontal" action="{{route('profesionadd')}}" method="post">
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Profesion</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                    <input type="text" class="form-control" name="Profesionnuevo" id="Profesionnuevo" />
                                                                </div>
                                                            </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success">Guardar<span
                                                        class="fa fa-floppy-o fa-right"></span></button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar<span
                                                        class="fa fa-sign-out fa-right"></span></button>
                                            </div>
                                            </form>
                                            <!---AQUI TERMINA EL FORM DEL METODO-->
                                        </div>
                                    </div>
                                </div>

                                <div class="modal" id="modal_editarprofesion" tabindex="-1" role="dialog" aria-labelledby="largeModalHead"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span
                                                        aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="largeModalHead">Editar Profesion</h4>
                                            </div>
                                            <!--AQUI SE INCLUYEN LOS ARCHIVOS DE SESION Y EL FORM CON LA RUTA-->
                                            <form class="form-horizontal" action="{{route('profesionedit')}}" method="post">
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Profesion</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                    <input type="text" name="titulo" id="titulo" class="form-control" />                                                                    
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="id_editar" id="id_editar" class="form-control" />
                                                            <input type="hidden" name="updated_at" id="updated_at" class="form-control" />
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success">Guardar<span
                                                        class="fa fa-floppy-o fa-right"></span></button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar<span
                                                        class="fa fa-sign-out fa-right"></span></button>
                                            </div>
                                            </form>
                                            <!---AQUI TERMINA EL FORM DEL METODO-->
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="panel-body">

                                <table class="table table-striped datatable text">
                                    <thead>
                                        <tr>
                                            <th class="col-md-1 col-xs-12">Id</th>
                                            <th>Profesion</th>                                           
                                            <th hidden>Fecha Creacion</th>
                                            <th class="col-md-1 col-xs-12">Editar</th>
                                            <th class="col-md-1 col-xs-12">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <!---Inicio de ciclo para pintar usuarios--->                                                                  
                                @foreach ($profesiones as $profesion)
                                <tr>
                                <td>{{$profesion->IdProfesion}}</td>
                                <td> {{$profesion->titulo}} </td>                                
                                <td hidden>{{$profesion->created_at}}</td>                                
                                <td><button class="btn btn-default" data-toggle="modal" data-profidx="{{$profesion->IdProfesion}}" data-Titulox="{{$profesion->titulo}}" data-target="#modal_editarprofesion"><span class="fa fa-pencil-square-o"></span></button></td>                              
                                <td><button class="btn btn-danger" data-toggle="modal" data-profid="{{$profesion->IdProfesion}}" data-target="#borrarprofesion"><span class="fa fa-trash-o"></span></button></td>
                                </tr>
                                @endforeach                                                                                                                                                                        
                                        <!--FIN DE CICLO PARA PINTAR USUARIOS      -->
                                    </tbody>
                                </table>                                                              
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
   @if(Session::has('modprofesion'))     
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
      <div style="font-size: 15px;" class='col-xs-9 col-sm-9 col-md-9 col-lg-9'>
      <img src='img/exito.png' height="32" width="32"/>
      <strong>{{ Session::get('modprofesion') }}</strong>
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
    <div class="modal" id="borrarprofesion" tabindex="-1"  class="modal fade bd-example-modal-sm" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:red;color:white;">
                    <h2 class="modal-title">Confirmar</h2>                
                </div>
      <form action="{{route('profesionborrar')}}" method="post">
      <!--cosas para que deje borrar los registros, el token y el csrf-->
      {{method_field('delete')}}
      {{csrf_field()}}
                        <div class="modal-body">
                        <input type="hidden" name="profesionid_id" id="profesion_id" value="">
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
                                @if(Session::has('borrarprofesion'))     
                     <script>                    
    $(window).on('load',function(){
        $('#myModalborrarprofesion').modal('show');
    });
                     </script>
<div id="myModalborrarprofesion" class="modal fade bd-example-modal-sm" role="dialog">
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
      <strong>{{ Session::get('borrarprofesion') }}</strong>
     
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
                                @if(Session::has('nuevaprofesion'))     
                     <script>                    
    $(window).on('load',function(){
        $('#myModalnuevaprofesion').modal('show');
    });
                     </script>
<div id="myModalnuevaprofesion" class="modal fade bd-example-modal-sm" role="dialog">
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
      <strong>{{ Session::get('nuevaprofesion') }}</strong>
     
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
@endsection