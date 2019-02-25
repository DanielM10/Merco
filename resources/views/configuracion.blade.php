@extends('layouts.master')                                       
                <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>                    
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
<div>
            <!-- PAGE TITLE -->
            <div class="page-title">
                <h2><span class="fa fa-cogs"></span> Configuración de parametros del sistema{{$permisoeditar.$permisoGuardar.$permisoeliminar}}</h2>
            </div>
            <!-- END PAGE TITLE -->
                    <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">           

                    <div class="col-md-12">
                        <!-- START DEFAULT WIZARD -->
                        <!-- LOGIN WIDGET -->
                        
                        <div class="panel panel-default">
                            <div class="panel-body">
                  
                                <!-- PAGE CONTENT WRAPPER -->
                                <div class="page-content-wrap">
                                @if(Session::has('errox'))                                 
                     <script>                    
    $(window).on('load',function(){
        $('#myModal2').modal('show');
    });
                     </script>
                     <div id="myModal2" class="modal fade bd-example-modal-sm" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-warning" >
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 style="color:#FFFFFF">¡Advertencia!</h2>
      </div>
      <div class="modal-body">
      <div>
      <img src='img/Advertencia.png' height="32" width="32"/> 
      <div style="font-size: 10px;" class='col-xs-9 col-sm-9 col-md-9 col-lg-9'>
      <strong>{{ Session::get('errox') }}</strong>
      </div>  
      </div>
</div>

<br>
<br>
<br>
      <div class="modal-footer bg-warning">
        <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
    </div>
  </div>
</div> 
                                @elseif(Session::has('msg'))     
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
      <strong>{{ Session::get('msg') }}</strong>
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
                                    <div class="row">
                                        <div class="col-md-12">
<!--aqui creo el campo para consultar-->

                                            <form class="form-horizontal" action="{{route('configuracionupdate')}}" method="post">
                                            <!--IMPORTANTE DECLARAR LA COOKIE PARA EVITAR FUGA DE DATOS Y EL ERROR DE REFRESH A LA PAGINA-->
                                            {{ csrf_field() }}
                                            <!--------------------------------------------------------------------->
                                                <div class="panel panel-default tabs">
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Correo</a></li>
                                                        <li><a href="#tab-second" role="tab" data-toggle="tab">Seguridad</a></li>
                                                        <!--<li><a href="#tab-third" role="tab" data-toggle="tab">nose,venia,mal,eltab</a></li>-->
                                                        <li><a href="#tab-four" role="tab" data-toggle="tab">Portal</a></li>
                                                    </ul>
                                                    <form method="POST">
                                                    <div class="panel-body tab-content">
                                                        <div class="tab-pane active" id="tab-first">

                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Servidor</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                    <input required type="text" @if($Configuracion1!=null) value="{{$Configuracion1->Valor}}" @else value=""@endif class="form-control" name="servidor" />             
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Puerto</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                <input required type="number" @if($Configuracion2!=null) value="{{$Configuracion2->Valor}}" @else value=""@endif class="form-control" name="puerto" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Usuario</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                <input required type="text" @if($Configuracion3!=null) value="{{$Configuracion3->Valor}}" @else value=""@endif class="form-control" name="usuario" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Contraseña</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                <input required type="password" @if($Configuracion4!=null) value="{{$Configuracion4->Valor}}" @else value=""@endif class="form-control" name="password" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Remitente</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                <input required type="text" @if($Configuracion5!=null) value="{{$Configuracion5->Valor}}" @else value=""@endif class="form-control" name="remitente" />
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">SSL</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                    <label class="switch switch-small">                                                                           
                                                                    
                                                                   

                                                                        <input  type="checkbox" @if($valuedelcheck=false) value="{{$Configuracion6->Valor}}" @else checked value="{{$Configuracion6->Valor}}"@endif/>
                                                                        <span></span>
                                                                    </label>

                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="tab-pane" id="tab-second">

                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Intentos
                                                                    de bloqueo</label>
                                                                <div class="col-md-3 col-xs-12">
                                                                <input required type="number" @if($Configuracion7!=null) value="{{$Configuracion7->Valor}}" @else value=""@endif class="form-control" name="intentos" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Vigencia</label>
                                                                <div class="col-md-3 col-xs-12">
                                                                <input required type="number" @if($Configuracion8!=null) value="{{$Configuracion8->Valor}}" @else value=""@endif class="form-control" name="vigencia"/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Caracteres
                                                                    minimos</label>
                                                                <div class="col-md-3 col-xs-12">
                                                                <input required type="number" @if($Configuracion9!=null) value="{{$Configuracion9->Valor}}" @else value=""@endif class="form-control" name="caracteres" />
                                                                </div>
                                                            </div>

                                                        </div>                                                       
                                                        <div class="tab-pane" id="tab-four">

                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Días
                                                                    para consulta</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                <input required type="number" @if($Configuracion10!=null) value="{{$Configuracion10->Valor}}" @else value=""@endif class="form-control" name="dias"/>    
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 col-xs-12 control-label">Correo
                                                                    aclaraciones</label>
                                                                <div class="col-md-6 col-xs-12">
                                                                <input required type="email" @if($Configuracion11!=null) value="{{$Configuracion11->Valor}}" @else value=""@endif class="form-control" name="correo" />
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                   </form>
                                                    <div class="panel-footer">
                                                        <button class="btn btn-success pull-right">Guardar<span class="fa fa-floppy-o fa-right"></span></button>
                                                    </div>
                                                </div>
                                                <BR>

                                            </form>

                                        </div>
                                    </div>
@endsection