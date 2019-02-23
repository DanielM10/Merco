
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

 $('#modal_contrasena').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var id_user = button.data('usuarioidcontrasena');
  var modal = $(this); 
  modal.find('.modal-body #idusr').val(id_user);      
});


