@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-3.3.1.js"></script>                
<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>                                  
@section('content')
<script type="text/javascript">
    $(window).on('load',function(){
        $('#modal_contrasena1').modal('show');
    });
</script>
<div class="modal" id="modal_contrasena1" tabindex="-1" role="dialog" aria-labelledby="defModalHead"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" id="guardar" class="close" data-dismiss="modal"><span
                                                        aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="defModalHead">Contraseña </h4>
                                            </div>
                                            <!--AQUI SE INCLUYEN LOS ARCHIVOS DE SESION Y EL FORM CON LA RUTA-->
                                            <form class="form-horizontal" action="{{route('usuarioedit2')}}" method="post">
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                            <input type="hidden" id="idusrx" name="idusrx" value="{{Auth::id()}}">                                            
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
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit"  class="btn btn-success">Guardar<span
                                                        class="fa fa-floppy-o fa-right"></span></button>
                                            </div>
                                            </form>
                                            <!---AQUI TERMINA EL FORM DEL METODO-->
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <script type="text/javascript">
    document.getElementById("guardar").onclick = function () {
        location.href = "/home";
    };
</script>
                        <!-- END DEFAULT DATATABLE -->
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
@endsection