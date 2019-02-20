<!DOCTYPE html>
<html lang="es">

<head>
    <title>Merco Portal Proveedores</title>
    <!-- META SECTION -->

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--<link rel="icon" href="favicon.ico" type="image/x-icon" />
    END META SECTION -->
    
                <!-- START SCRIPTS -->
                <!-- START PLUGINS -->
                <script type="text/javascript" src="js/jquery-3.3.1.js"></script>                
                <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>                
                <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>            
                <script type="text/javascript" src="js/plugins/moment.min.js"></script>
                <script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
                <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
                   
                <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>                
                <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
                <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
                <script type="text/javascript" src="js/plugins/bootstrap/daterangepicker.js"></script>
                
                
                <!-- END PLUGINS -->
                <!-- START THIS PAGE PLUGINS-->
                <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
                <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>


                <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
                <!-- END PAGE PLUGINS -->

               <script type="text/javascript" src="js/plugins/jquery-validation/jquery.validate.js"></script>
                <script type="text/javascript" src="js/plugins/knob/jquery.knob.min.js"></script>
                <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>
                <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
                <script type="text/javascript" src="scripts/Mensajes.js"></script>
                <script type="text/javascript" src="scripts/FuncionesGenerales.js"></script>
                
                <!-- END THIS PAGE PLUGINS-->


                <!-- START TEMPLATE -->
                <script type="text/javascript" src="js/picker.min.js"></script>
                <script type="text/javascript" src="js/plugins.js"></script>
                <script type="text/javascript" src="js/actions.js"></script>
                <!-- END TEMPLATE -->
                <!-- END SCRIPTS -->
    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-light.css" />
    <link rel="stylesheet" type="text/css" id="tema-secundario" href="css/colores.css" />
    <link rel="stylesheet" type="text/css" id="tema-secundario" href="css/picker.min.css" />
   
    <link rel="stylesheet" type="text/css" id="tema-secundario" href="css/jquery/jquery-ui.min.css" />
    <!-- EOF CSS INCLUDE -->

</head>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">

        <!-- START PAGE SIDEBAR -->
        <div class="page-sidebar">
            <!-- START X-NAVIGATION -->
            <ul class="x-navigation">
          
                @foreach ($menus as $key => $item)
                    @if ($item['IdMenuPadre'] != 0)
                        @break
                    @endif
                    @include('menu-item', ['item' => $item])
                @endforeach         
</ul>
            <!-- END X-NAVIGATION -->
        </div>
        <!-- END PAGE SIDEBAR -->
        <!-- PAGE CONTENT -->
    	<div class="page-content">
        
    		  <!-- START X-NAVIGATION VERTICAL -->
            <ul class="x-navigation x-navigation-horizontal x-navigation-panel pull-left">
             <!-- TOGGLE NAVIGATION -->
             <li class="xn-logo pull-left">
                    <a href="/home">Merco</a>
                    <a href="#" class="x-navigation-control"></a>
                </li>
                <li STYLE="font-weight: bold;
  font-family:ChronicaPro-Regular" class="mensaje pull-left">
                    <a class="mb-control mensaje crece">
                        Portal Proveedores:
                    </a>
                </li>
                <!-- TOGGLE NAVIGATION -->
                <!--<li class="xn-icon-button">
                    <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                </li>
-->
                <!-- END TOGGLE NAVIGATION -->
                <!-- SIGN OUT -->
                <li class="xn-icon-button pull-right" style="margin-right: 20px;">
                    <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
                </li>
                <li class="xn-icon-user pull-right">
                    <a class="mb-control">
                       <i class="fa fa-user"></i> {{Auth::user()->email}}
                    </a>
                </li>
                <!-- END SIGN OUT -->
                
                <!-- MESSAGES -->
                <li class="xn-icon-button pull-right">
                    <a href="#" class="xn-principal"><span class="fa fa-file-text-o"></span></a>

                    <div class="informer informer-danger" id="LblCantidadActNo">0</div>
                    <div class="panel panel animated zoomIn xn-drop-left xn-panel-dragging">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span class="fa fa-file-text-o"></span> Requerimientos</h3>

                            <div class="pull-right" id="titlealerts">
                                <span style="background-color:#FF812E" class="label"><span id="LblCantidadAct"></span> por atender: <label id="totalalerts"></label></span>
                            </div>

                            <div id="divNotificacion" class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                            </div>
                            <div class="panel-footer text-center" id="totalactividadesdiv">
                                <a href="ordenescompra">Ver todas las actividades</a>
                            </div>
                        </div>

                    </div>
                </li>
                <!-- END MESSAGES -->
                <!-- TASKS -->
                
                <li class="xn-icon-button pull-right">                
                    <a href="serviciosproductos"><span class="fa fa-pencil-square-o"></span></a>
                </li>
                <li class="xn-icon-button pull-right"> 

                <a title="Cambiar contraseña" href="cambiopass"><span
                                                     class="fa fa-exchange"></span></a>
                                                        
                </li>
                
                <!-- END TASKS -->
            </ul>
<!--MODAL CAMBIO DE CONTRASENA PER USER-->


            <!-- END X-NAVIGATION VERTICAL -->
            @yield('content') 
          
                          <!-- MESSAGE BOX-->
            <div class="message-box animated" data-sound="alert" id="mb-signout">
                <div class="mb-container">
                    <div class="mb-middle">
                            <div class="mb-title"><span class="fa fa-sign-out"></span>¿Deseas <strong>Salir</strong> ?</div>
                                <div class="mb-footer">
                                    <div class="pull-right">
                                    <form method="POST" action="{{ route('logout') }}">
                                    {{ csrf_field()}}
                                    <button class="btn btn-success btn-lg">Si</a></button>
                                    </form>
                                    <br>                                    
                                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                                    </div>
                                </div>
                            </div>
                            
                    </div>
            
                    </div>
                 
                    </div>
                <!-- END MESSAGE BOX-->

              <!-- START BREADCRUMB -->
         <div class="franja">
         </div>

            <!-- END BREADCRUMB -->    	
       <!-- END PAGE CONTAINER -->

          
          <script>
  
  $('#editar').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      //aqui se jalan los valores desde la tabla del boton
      var rol_id = button.data('rolidx');
      var Nombre = button.data('nombrerolx');
      var tipoderol = button.data('tiporolx');
      var activo = button.data('activox');
      var protegido = button.data('protegido'); ;      

//-----------AQUI ASIGNA EL VALOR AL VAR MODAL
      var modal = $(this); 
      //-------------------------------------------
      var activofinal = (activo==1?true:false);      
      //------------------------------------------
      var protegidofinal = (protegido==1?true:false);
      debugger;
      $('input:radio[value=' + tipoderol + ']').prop('checked', true);
      //-------------------------------------------
      if (activofinal == true) {
            $('#Activox1').prop('checked', true);
            $('#Activo1').val(true);
        }
        else{
            $('#Activox1').prop('checked', false);
            $('#Activo1').val(false);
        }
        //--------------------------------------------
        if (protegidofinal == true) {
            $('#Protegidox1').prop('checked', true);
            $('#Protegido1').val(true);
        }
        else{
            $('#Protegidox1').prop('checked', false);
            $('#Protegido1').val(false);
        }

      //--------------------------------------
      var d = new Date();
    var month = d.getMonth()+1;
    var day = d.getDate();
    var output = d.getFullYear() + '-' +
        ((''+month).length<2 ? '0' : '') + month + '-' +
        ((''+day).length<2 ? '0' : '') + day;
        modal.find('.modal-body #IdUModifico').val(output);         

      //aqui se signan al id del body del modal
      modal.find('.modal-body #rol_idedit').val(rol_id);      
      modal.find('.modal-body #Nombre').val(Nombre);
  });
//-------------------------------SEGUNDA FUNCION----------------------------
  $('#borrar').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var rol_id = button.data('rolid') 
      var modal = $(this)
      modal.find('.modal-body #rol_id').val(rol_id);
});
</script>
<!--SCRIPT PARA PANTALLA DE PROFESIONES-->
<script>
 $('#modal_editarprofesion').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
    var prof_id = button.data('profidx');
    var titulo = button.data('titulox');
    var modal = $(this); 
    modal.find('.modal-body #id_editar').val(prof_id);      
    modal.find('.modal-body #titulo').val(titulo);      
    var d = new Date();
    var month = d.getMonth()+1;
    var day = d.getDate();
    var output = d.getFullYear() + '-' +
        ((''+month).length<2 ? '0' : '') + month + '-' +
        ((''+day).length<2 ? '0' : '') + day;
        modal.find('.modal-body #updated_at').val(output);     
    });

  $('#borrarprofesion').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var rol_id = button.data('profid') 
      var modal = $(this)
      modal.find('.modal-body #profesion_id').val(rol_id);
});
</script>
<!----><script>
 $('#modal_contrasena').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
    var ususariocontra = button.data('usuarioidcontrasena');
    var modal = $(this); 
    modal.find('.modal-body #idusrx').val(ususariocontra);            
    var d = new Date();
    var month = d.getMonth()+1;
    var day = d.getDate();
    var output = d.getFullYear() + '-' +
        ((''+month).length<2 ? '0' : '') + month + '-' +
        ((''+day).length<2 ? '0' : '') + day;
        modal.find('.modal-body #updated_at').val(output);     
    });

  $('#borrarprofesion').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var rol_id = button.data('profid') 
      var modal = $(this)
      modal.find('.modal-body #profesion_id').val(rol_id);
});
</script>
<script>
 $('#modal_largeprov').on('show.bs.modal', function (event) {
     debugger;
    var button = $(event.relatedTarget) 
    var Proveedoridx = button.data('przoveedorid');
    var Proveedornombrex = button.data('proveedornombre');
    var Proveedorcontactox = button.data('proveedorcontacto');
    var Proveedoremailx = button.data('proveedoremail');
    var Proveedortelefonosx = button.data('proveedortelefonos');
    var Proveedoractivox = button.data('proveedoractivo');
    var Proveedorcategoriax = button.data('proveedorcategoria');
    var Proveedorestatusx = button.data('proveedorestatus');
    //validacion de boton de activo
    var activofinal = (Proveedoractivox==1?true:false);  
    if (activofinal == true) {
            $('#activoxz').prop('checked', true);
            $('#activoxz').val(true);     
            $('#activox1').val(true);     
        }
        else{
            $('#activoxz').prop('checked', false);
            $('#activoxz').val(false);
            $('#activox1').val(false); 
        }        
    
    var modal = $(this); 
    modal.find('.modal-body #noproveedorx').text(Proveedoridx); 
          
    modal.find('.modal-body #nombrex').text(Proveedornombrex);      
    modal.find('.modal-body #contactox').text(Proveedorcontactox);      
    modal.find('.modal-body #correox').text(Proveedoremailx);  
    modal.find('.modal-body #telefnox').text(Proveedortelefonosx);          
    modal.find('.modal-body #categoriax').text(Proveedorcategoriax);      
    modal.find('.modal-body #estatusx').text(Proveedorestatusx);          
    });

</script>
<script>
 $('#modal_editar').on('show.bs.modal', function (event) {
     debugger;
    var button = $(event.relatedTarget) 
    var idrolxe = button.data('rolusersx');
    var proveedorx1 = button.data('proveedorx');
    var tiporolex = button.data('prueba');
    var id_user = button.data('usuarioid');    
    var name = button.data('usernombre');
    var ApPaterno = button.data('userapep');
    var ApMaterno = button.data('userapm');
    var NumEmpleado = button.data('usernumepleado');
    var email = button.data('useremail');
    var Activo = button.data('useractivo');
    var Bloqueado = button.data('userbloqueado');   

      //-------------------------------------------
      var activofinal = (Activo==1?true:false);      
      //------------------------------------------
      var bloqueadofinal = (Bloqueado==1?true:false);

    //asignacion de valores
    var modal = $(this); 
debugger;
    if (activofinal == true) {
            $('#Activoz').prop('checked', true);
            $('#Activoz').val(true);
            $('#Activo1').val(true);
        }
        else{
            $('#Activoz').prop('checked', false);
            $('#Activoz').val(false);
            $('#Activo1').val(false);
        }
        //--------------------------------------------
        if (bloqueadofinal == true) {
            $('#Bloqueadoz').prop('checked', true);
            $('#Bloqueadoz').val(true);
            $('#Bloqueado1').val(true);
        }
        else{
            $('#Bloqueadoz').prop('checked', false);
            $('#Bloqueadoz').val(false);
            $('#Bloqueado1').val(false);
        }
    //modal.find('.modal-body #tiporol1').val(tiporolex);  
   //$('#tiporol1 option[value='tiporolex']').attr('selected',true) ;
   debugger;
   $("#tiporol1").val(tiporolex).change();

    modal.find('.modal-body #iduser').val(id_user);      
    modal.find('.modal-body #name').val(name);    
    modal.find('.modal-body #ApePaterno').val(ApPaterno);      
    modal.find('.modal-body #ApMaterno').val(ApMaterno);    
    modal.find('.modal-body #NumEmpleado').val(NumEmpleado);      
    modal.find('.modal-body #email').val(email);       
   $("#Proveedor1").val(proveedorx1).change();
   

    //aqui es para algo que no recuerdo  
    var d = new Date();
    var month = d.getMonth()+1;
    var day = d.getDate();
    var output = d.getFullYear() + '-' +
        ((''+month).length<2 ? '0' : '') + month + '-' +
        ((''+day).length<2 ? '0' : '') + day;
        modal.find('.modal-body #updated_at').val(output);     
    });
    
//aqui tamb
</script>
  <script>
   $('#modal_contrasena').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
    var id_user = button.data('usuarioidcontrasena');
    var modal = $(this); 
    modal.find('.modal-body #idusr').val(id_user);      
});
  </script>


 
</body>
</html>
