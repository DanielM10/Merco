
function MensajeError(mensaje) {

    var mensajeError = "" +
        "<div class='modal fade bs-example-modal-sm' id='MyModalEError' style='z-index:99999' tabindex='-1' role='dialog' aria-labelledby='mySmallModalLabel'> <div class='modal-dialog modal-sm ModalMensajes'  > " +
        "<div class='modal-content modalError'>      " +
        "<div class='modal-header TituloMensajeError'>     " +
        "<h2 class='modal-title modaltitle' id='myModalLabel'>" +
        "¡Error!" +
        "</h2>    " +
        "</div>    " +
        "<div class='modal-body modalbody'>" +
        "<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>" +
        "<img class='TamanoImagen' src='" + $('#urlImagenMensajes').val() + "Error.png' />" +
        "</div>  " +
        "<div class='col-xs-9 col-sm-9 col-md-9 col-lg-9'>" +
        mensaje +
        "</br>" + "</br>" + "</br>" +
        "</div>  " +
        "</div>" +
        "<div class='modal-footer modalpie'>" +
        "<button type='button' id='BtnAceptar' class='btn-Error' data-dismiss='modal'>" +
        "Aceptar" +
        "</button>" +
        "</div>" +
        "</div>" +
        "</div>" +
        "</div>";

    $('div.mensajes').html(mensajeError);



    $("#MyModalEError").modal("show");

    $('#MyModalEError').on('hide.bs.modal', function (e) {
        ////debugger;

        $('#ModalProveedores,#ModalRequisicones,#ModalProductosServicios,#ModalEditarUsuario,#ModalPermisosTipoUsuario').css('overflow-y', 'auto');
        $('#ModalProveedores,#ModalRequisicones,#ModalProductosServicios,#ModalEditarUsuario,#ModalPermisosTipoUsuario').css('overflow-x', 'hidden');

        $('body').addClass('modal-open');

    })

}

function MensajeExito(mensaje) {

    var mensajeExito = "" +
        "<div class='modal fade bs-example-modal-sm' id='MyModalExito' tabindex='-1' style='z-index:99999'  role='dialog' aria-labelledby='mySmallModalLabel'>" +
        "<div class='modal-dialog modal-sm ModalMensajes' >" +
        "<div class='modal-content modalExito'>" +
        "<div class='modal-header TituloMensajeExito'>" +
        "<h2 class='modal-title modaltitle' id='myModalLabel'>" +
        "¡Éxito!" +
        "</h2>" +
        "</div>" +
        "<div class='modal-body modalbody'>" +
        "<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>" +
        "<img class='TamanoImagen' src='" + $('#urlImagenMensajes').val() + "exito.png'' />" +
        "</div>  " +
        "<div class='col-xs-9 col-sm-9 col-md-9 col-lg-9'>" +
        mensaje +
        "</br>" + "</br>" + "</br>" +
        "</div>  " +
        "</div>" +
        "<div class='modal-footer modalpie'>" +
        "<button type='button' id='BtnAceptar' class='btn-Exito' data-dismiss='modal'>" +
        "Aceptar" +
        "</button>" +
        "</div>" +
        "</div>" +
        "</div>" +
        "</div>";

    $('div.mensajes').html(mensajeExito);


    $("#MyModalExito").modal("show");

    $('#MyModalExito').on('hide.bs.modal', function (e) {
        ////debugger;

        $('#ModalProveedores,#ModalRequisicones,#ModalProductosServicios,#ModalEditarUsuario,#ModalPermisosTipoUsuario').css('overflow-y', 'auto');
        $('#ModalProveedores,#ModalRequisicones,#ModalProductosServicios,#ModalEditarUsuario,#ModalPermisosTipoUsuario').css('overflow-x', 'hidden');

        $('body').addClass('modal-open');

    })
}

function MensajeAdvertencia(mensaje) {

    var mensajeAdvertencia = "" +
        "<div class='modal' id='myModalAdvertencia' tabindex='-1' role='dialog'  style='z-index:99999'  aria-labelledby='mySmallModalLabel'>" +
        "<div class='modal-dialog modal-sm ModalMensajes'  >" +
        "<div class='modal-content modalAdvertencia'>" +
        "<div class='modal-header TituloMensajeAdvertencia'>" +
        "<h2 class='modal-title modaltitle' id='myModalLabel'> ¡Advertencia! </h2>" +
        "</div>" +
        "<div class='modal-body modalbody'>" +
        "<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>" +
        "<img class='TamanoImagen' src='" + $('#urlImagenMensajes').val() + "Advertencia.png'/>" +
        "</div>  " +
        "<div class='col-xs-9 col-sm-9 col-md-9 col-lg-9'>" +
        mensaje +
        "</br>" + "</br>" + "</br>" +
        "</div>  " +
        "</div>" +
        "<div class='modal-footer modalpie'>" +
        "<button type='button' id='BtnAceptar' class='btn-Advertencia btnAceptarAdvertenciamo' data-dismiss='modal'>" +
        "Aceptar" +
        "</button>" +
        "</div>" +
        "</div>" +
        "</div>" +
        "</div>";

    $('div.mensajes').html(mensajeAdvertencia);


    //$('#myModalAdvertencia').on('shown.bs.modal', function () {
    //    $('#BtnAceptar').focus();
    //})

    $("#myModalAdvertencia").modal("show");

    $('#myModalAdvertencia').on('hide.bs.modal', function (e) {
        ////debugger;
        $('#ModalContrasenia,#ModalRequisicones,#ModalProductosServicios,#ModalEditarUsuario,#ModalPermisosTipoUsuario').css('overflow-y', 'auto');
        $('#ModalContrasenia,#ModalRequisicones,#ModalProductosServicios,#ModalEditarUsuario,#ModalPermisosTipoUsuario').css('overflow-x', 'hidden');

        $('body').addClass('modal-open');

    })

}

function MensajeTerminoSession() {

    var mensajeAdvertencia = "" +
        "<div class='modal' id='myModalAdvertencia' tabindex='-1' role='dialog'  style='z-index:99999'  aria-labelledby='mySmallModalLabel'>" +
        "<div class='modal-dialog modal-sm ModalMensajes'  >" +
        "<div class='modal-content modalAdvertencia'>" +
        "<div class='modal-header TituloMensajeAdvertencia'>" +
        "<h2 class='modal-title modaltitle' id='myModalLabel'> ¡Advertencia! </h2>" +
        "</div>" +
        "<div class='modal-body modalbody'>" +
        "<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>" +
        "<img class='TamanoImagen' src='" + $('#urlImagenMensajes').val() + "Advertencia.png'/>" +
        "</div>  " +
        "<div class='col-xs-9 col-sm-9 col-md-9 col-lg-9'>" +
        " La sesión termino" +
        "</br>" + "</br>" + "</br>" +
        "</div>  " +
        "</div>" +
        "<div class='modal-footer modalpie'>" +
        "<button type='button'   onclick='RedirecionaLogin()' class='btn-Advertencia btnAceptarAdvertenciamo' data-dismiss='modal'>" +
        "Aceptar" +
        "</button>" +
        "</div>" +
        "</div>" +
        "</div>" +
        "</div>";

    $('div.mensajes').html(mensajeAdvertencia);


    //$('#myModalAdvertencia').on('shown.bs.modal', function () {
    //    $('#BtnAceptar').focus();
    //})

    $("#myModalAdvertencia").modal("show");

    $('#myModalAdvertencia').on('hide.bs.modal', function (e) {
        ////debugger;
        $('#ModalContrasenia,#ModalRequisicones,#ModalProductosServicios,#ModalEditarUsuario,#ModalPermisosTipoUsuario').css('overflow-y', 'auto');
        $('#ModalContrasenia,#ModalRequisicones,#ModalProductosServicios,#ModalEditarUsuario,#ModalPermisosTipoUsuario').css('overflow-x', 'hidden');

        $('body').addClass('modal-open');

    })

}

function MensajeAdvertenciaOK(mensaje) {

    var mensajeAdvertencia = "" +
        "<div class='modal fade bs-example-modal-sm' id='myModal' tabindex='-1' style='z-index:99999'  role='dialog' aria-labelledby='mySmallModalLabel'>" +
        "<div class='modal-dialog modal-sm ModalMensajes'  >" +
        "<div class='modal-content modalAdvertencia'>" +
        "<div class='modal-header TituloMensajeAdvertencia'>" +
        "<h2 class='modal-title modaltitle' id='myModalLabel'>" +
        "¡Advertencia!" +
        "</h2>" +
        "</div>" +
        "<div class='modal-body modalbody'>" +
        "<div class='imagenMsj col-md-3'>" +
        "<img class='TamanoImagen' src='" + $('#urlImagenMensajes').val() + "Advertencia.png'' />" +
        "</div>" +
        "<div class='col-md-9'> " +
        mensaje +
        "</div>" +
        "</div>" +
        "<div class='modal-footer modalpie'>" +
        "<button type='button' id='BtnAceptar' class='btn-Advertencia' data-dismiss='modal'>" +
        "Aceptar" +
        "</button>" +
        "</div>" +
        "</div>" +
        "</div>" +
        "</div>";

    $('div.mensajes').html(mensajeAdvertencia);


    $("#myModal").modal("show");

}


function MensajeConfirmarSOlo(mensaje) {
    //debugger;
    var mensajeConfirmar = "" +
        "<div class='modal fade bs-example-modal-sm' id='modalConfirmar' style='z-index:99999'  tabindex='-1' role='dialog' aria-labelledby='mySmallModalLabel'> <div class='modal-dialog modal-sm ModalMensajes'  > " +
        "<div class='modal-content modalConfirmar'>      " +
        "<div class='modal-header TituloMensajeConfirmar'>     " +
        "<h2 class='modal-title modaltitle' id='myModalLabel'>" +
        "¡Confirmar!" +
        "</h2>    " +
        "</div>    " +
        "<div class='modal-body modalbody mensajeConfirmar'>" +
        mensaje +
        "</div>" +
        "<div class='modal-footer modalpie'>" +
        '<button type="button" id="BtnConfirmar" class="btn-Confirmar" data-dismiss="modal">' +
        "Aceptar" +
        "</button>" +
        "<button type='button' class='btn-Cancelar' data-dismiss='modal'>" +
        "Cerrar" +
        "</button>" +
        "</div>" +
        "</div>" +
        "</div>" +
        "</div>";

    $('div.mensajesConfirmacion').html(mensajeConfirmar);
    $('#modalConfirmar').on('hide.bs.modal', function (e) {
        ////debugger;

        $('#ModalProveedores,#ModalRequisicones,#ModalProductosServicios,#ModalEditarUsuario,#ModalPermisosTipoUsuario').css('overflow-y', 'auto');
        $('#ModalProveedores,#ModalRequisicones,#ModalProductosServicios,#ModalEditarUsuario,#ModalPermisosTipoUsuario').css('overflow-x', 'hidden');


        $('body').addClass('modal-open');

    })

    $("#modalConfirmar").modal("show");
    return false;
}

function MensajeConfirmar(mensaje, callback) {
    //debugger;
    var mensajeConfirmar = "" +
        "<div class='modal fade bs-example-modal-sm' id='modalConfirmar' tabindex='-1' role='dialog' aria-labelledby='mySmallModalLabel'> <div class='modal-dialog modal-sm ModalMensajes'  > " +
        "<div class='modal-content modalConfirmar'>      " +
        "<div class='modal-header TituloMensajeConfirmar'>     " +
        "<h2 class='modal-title modaltitle' id='myModalLabel'>" +
        "¡Confirmar!" +
        "</h2>    " +
        "</div>    " +
        "<div class='modal-body modalbody mensajeConfirmar'>" +
        mensaje +
        "</div>" +
        "<div class='modal-footer modalpie'>" +
        '<button type="button" id="BtnConfirmar" onclick="' + callback + '" class="btn-Confirmar" data-dismiss="modal">' +
        "Aceptar" +
        "</button>" +
        "<button type='button' class='btn-Cancelar' data-dismiss='modal'>" +
        "Cerrar" +
        "</button>" +
        "</div>" +
        "</div>" +
        "</div>" +
        "</div>";

    $('div.mensajesConfirmacion').html(mensajeConfirmar);
    $('#modalConfirmar').on('hide.bs.modal', function (e) {
        ////debugger;

        $('#ModalProveedores,#ModalRequisicones,#ModalProductosServicios,#ModalEditarUsuario,#ModalPermisosTipoUsuario').css('overflow-y', 'auto');
        $('#ModalProveedores,#ModalRequisicones,#ModalProductosServicios,#ModalEditarUsuario,#ModalPermisosTipoUsuario').css('overflow-x', 'hidden');


        $('body').addClass('modal-open');

    })

    $("#modalConfirmar").modal("show");
    return false;
}
function MensajeConfirmar2(mensaje, callback) {
    debugger;
    var mensajeConfirmar = "" +
        "<div class='modal fade bs-example-modal-sm' id='modalConfirmar' tabindex='-1' role='dialog' aria-labelledby='mySmallModalLabel'> <div class='modal-dialog modal-sm ModalMensajes'  > " +
        "<div class='modal-content modalConfirmar'>      " +
        "<div class='modal-header TituloMensajeConfirmar'>     " +
        "<h2 class='modal-title modaltitle' id='myModalLabel'>" +
        "¡Confirmar!" +
        "</h2>    " +
        "</div>    " +
        "<div class='modal-body modalbody mensajeConfirmar'>" +
        mensaje +
        "</div>" +
        "<div class='modal-footer modalpie'>" +
        '<button type="button" id="BtnConfirmar" onclick="' + callback + '" class="btn-Confirmar" data-dismiss="modal">' +
        "Aceptar" +
        "</button>" +
        "<button type='button' class='btn-Cancelar' data-dismiss='modal'>" +
        "Cerrar" +
        "</button>" +
        "</div>" +
        "</div>" +
        "</div>" +
        "</div>";

    $('div.mensajesConfirmacion').html(mensajeConfirmar);
    $('#modalConfirmar').on('hide.bs.modal', function (e) {
        //debugger;

        $('#ModalProveedores,#ModalRequisicones,#ModalProductosServicios,#ModalEditarUsuario,#ModalPermisosTipoUsuario').css('overflow-y', 'auto');
        $('#ModalProveedores,#ModalRequisicones,#ModalProductosServicios,#ModalEditarUsuario,#ModalPermisosTipoUsuario').css('overflow-x', 'hidden');


        $('body').addClass('modal-open');

    })

    $("#modalConfirmar").modal("show");
    return false;
}
function MensajeAdvertenciaSesion(mensaje) {

    var mensajeAdvertenciaSesion = "" +
        "<div class='modal fade bs-example-modal-sm' id='myModaAdvertenciaSesion' style='z-index:99999'  tabindex='-1' role='dialog' aria-labelledby='mySmallModalLabel'>" +
        "<div class='modal-dialog modal-sm ModalMensajes'  >" +
        "<div class='modal-content modalAdvertencia'>" +
        "<div class='modal-header TituloMensajeAdvertencia'>" +
        "<h2 class='modal-title modaltitle' id='myModalLabel'> ¡Advertencia! </h2>" +
        "</div>" +
        "<div class='modal-body modalbody'>" +
        "<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>" +
        "<img class='TamanoImagen' src='" + $('#urlImagenMensajes').val() + "Advertencia.png'/>" +
        "</div>  " +
        "<div class='col-xs-9 col-sm-9 col-md-9 col-lg-9'>" +
        mensaje +
        "</br>" + "</br>" + "</br>" +
        "</div>  " +
        "</div>" +
        "<div class='modal-footer modalpie'>" +
        "<button type='button' id='BtnAceptarSalir' class='btn-Advertencia btnAceptarSalir' data-dismiss='modal'>" +
        "Aceptar" +
        "</button>" +
        "</div>" +
        "</div>" +
        "</div>" +
        "</div>";

    $('div.mensajes').html(mensajeAdvertenciaSesion);


    $('#myModaAdvertenciaSesion').on('shown.bs.modal', function () {
        $('#BtnAceptarSalir').focus();
    })

    $("#myModaAdvertenciaSesion").modal("show");

    $('#myModaAdvertenciaSesion').on('hide.bs.modal', function (e) {
        ////debugger;
        $('#ModalProveedores,#ModalRequisicones,#ModalProductosServicios,#ModalEditarUsuario,#ModalPermisosTipoUsuario').css('overflow-y', 'auto');
        $('#ModalProveedores,#ModalRequisicones,#ModalProductosServicios,#ModalEditarUsuario,#ModalPermisosTipoUsuario').css('overflow-x', 'hidden');

        $('body').addClass('modal-open');

    })

}


