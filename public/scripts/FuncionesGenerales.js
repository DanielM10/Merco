

var lacalesDTRP = {
    autoApply: true,
    applyLabel: 'Aplicar',
    cancelLabel: 'Cancelar',
    fromLabel: 'De:',
    toLabel: 'A:',
    customRangeLabel: 'Custom Range',
    daysOfWeek: ['Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa', 'Do'],
    monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    firstDay: 1
};

$(document).ready(function () {


    $.ajaxSetup({

        beforeSend: function () {

            CargaLoading();

        },

        complete: function () {

            FinalizaLoading();

        },

        error: function () {

            FinalizaLoading();

        }
    });

});


function CargaLoading() {
    window.loading_screen = window.pleaseWait({
        logo: $("#urlLogoCargando").val(),
        backgroundColor: 'rgba(255,255,255,0.8)',
        immediately: true,
        loadingHtml: "<i class='fa fa-rotate-right fa-spin text-default'></i><p class='loading-message'>Cargando...</p>"
    });
}
function FinalizaLoading() {
    window.loading_screen.finish();

}
function ActualizaAlerta() {
    var url = $('#urlAlertas').val();

    $.ajax({

        url: url,
        type: "POST",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        async: false,
        success: function (data) {

            if (data.Exito) {

                $('#divNotificacion').empty();

                $('#LblCantidadReq').text(data.NoAlertas);
                $('#LblCantidadReqNo').text(data.NoAlertas);
                $('#divNotificacion').append(data.Alertas);

            }
            else {

                MensajeError(data.Mensaje);
            }
        },
        error: function (xmlHttpRequest, textStatus, errorThrown) {

            MensajeError(data.Mensaje);
        }
    });
    return false;

}
//$(document).ready(function () {
//    $("input[rel:datetime]").datepicker({
//        format:'DD/MM/YYYY'
//    })

//})
$(document).on('click touchstart', '.btn-GuardarPass', function () {

    var Mensaje = ValidaCamposRequeridos(".ReqPass");

    //}
    if (Mensaje.length == 0) {

        if ($("#TxtContrasenaNueva").val().trim() != $("#TxtConfirmarContrasena").val().trim()) {

            $("#TxtConfirmarContrasena").focus(function () { $(this).select(); });
            MensajeAdvertencia("La confirmación de contraseña no coincide.");
            $('#ModalContrasenia').modal('toggle');


            return false;
        }


        var url = $('#urlActualizaPass').val();

        var parametros = {};
        parametros["ContrasenaAnterior"] = $("#TxtContrasenaAnterior").val().trim();
        parametros["ContrasenaNueva"] = $("#TxtContrasenaNueva").val().trim();

        $.ajax({

            url: url,
            type: "POST",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            data: JSON.stringify(parametros),
            async: false,
            success: function (data) {
                if (data.Exito) {

                    MensajeExito(data.Mensaje);
                    $('#ModalContrasenia').modal('hide');

                }
                else {

                    MensajeAdvertencia(data.Mensaje);
                    $('#ModalContrasenia').modal('toggle');

                }

            },
            error: function (xmlHttpRequest, textStatus, errorThrown) {
                MensajeError(data.Mensaje);
            }
        });


    }
    else {

        MensajeAdvertencia(Mensaje);
        $('#ModalContrasenia').modal('toggle');
    }


    return false;

});

$(".btn-CambiarPass").click(function () {

    $('#TxtContrasenaAnterior').val("");
    $('#TxtContrasenaNueva').val("");
    $('#TxtConfirmarContrasena').val("");
    $("#BtnCerrarPass").show();

    $('#ModalContrasenia').modal({ backdrop: 'static', keyboard: false });

    return false;

});

function AbreModalCambiarPass() {

    $('#TxtContrasenaAnterior').val("");
    $('#TxtContrasenaNueva').val("");
    $('#TxtConfirmarContrasena').val("");
    $("#BtnCerrarPass").show();

    $('#ModalContrasenia').modal({ keyboard: false });

    return false;

};

$(".btn-Presupuesto").click(function () {


    $('#ModalPresupuesto').on('hidden.bs.modal', function () {
        ActualizaAlerta();
    });
    $('#ModalPresupuesto').modal({ backdrop: 'static', keyboard: false });
    CargaInicialPresupuesto();

    return false;

});

$(".btn-AccesoDirectoRequisicion").click(function () {

    $('#ModalRequisicones').modal({ backdrop: 'static', keyboard: false });

    NuevaRequisicon();

    return false;

});

function clickalerta(IdRequisicion) {

    $('#ModalRequisicones').modal({ backdrop: 'static', keyboard: false });
    $('#IdRequisicion').val(IdRequisicion);
    EditarRequisicion();


    return false;
};

function CierraSesion() {


    // removejscssfile("application.js", "js"); //remove all occurences of "somescript.js" on page
    // removejscssfile("application.css", "css");

    var url = $('#urlLogin').val();
    window.location.href = url;
}



function removejscssfile(filename, filetype) {
    var targetelement = (filetype == "js") ? "script" : (filetype == "css") ? "link" : "none" //determine element type to create nodelist from
    var targetattr = (filetype == "js") ? "src" : (filetype == "css") ? "href" : "none" //determine corresponding attribute to test for
    var allsuspects = document.getElementsByTagName(targetelement)
    for (var i = allsuspects.length; i >= 0; i--) { //search backwards within nodelist for matching elements to remove
        if (allsuspects[i] && allsuspects[i].getAttribute(targetattr) != null && allsuspects[i].getAttribute(targetattr).indexOf(filename) != -1)
            allsuspects[i].parentNode.removeChild(allsuspects[i]) //remove element by calling parentNode.removeChild()
    }
}


function ValidaCorreo(email) {
    var regex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

    if (regex.test(email)) {
        return true;
    }
    else {
        return false;
    }
}

function ValidaCamposRequeridos(Grupo) {
    var Campos = "";
    var Mensaje = "";

    $('input' + Grupo + ',select' + Grupo).each(function () {
        debugger;
        val = $(this).val().trim();
        if ($(this).val().trim() == "" || $(this).val() == -1) {
            Campos += "-" + $(this).attr('item') + "  <br>";
        }
    });
    $('textarea' + Grupo).each(function () {
        if ($(this).val() == "") {
            Campos += "-" + $(this).attr('item') + "  <br>";
        }
    });

    if (Campos.length > 0) {
        Mensaje = "Los siguientes campos son requeridos: <br> " + Campos;
    }

    return Mensaje;
}

function FinalizaLoading() {
    window.loading_screen.finish();

}
var lenguajeEs = {
    "sProcessing": "Procesando...",
    "sLengthMenu": "Mostrar _MENU_ registros",
    "sZeroRecords": "No se encontraron resultados",
    "sEmptyTable": "No se encontraron resultados.",
    "info": "Página _PAGE_ de _PAGES_",
    //"sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty": "Página _PAGE_ de _PAGES_",
    //"sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix": "",
    "sSearch": "Buscar",
    "sUrl": "",
    "sInfoThousands": ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst": "Primero",
        "sLast": "Último",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
}

// construye un dataTable y devuelve el objeto del mismo
// parametros:
//      tabla: Objeto <table> que se refiere a la tabla que se construirá, se debe pasar como $("#nombreTabla").
//      datos: Objeto datasource, lista de datos.
//      columnas: arreglo de objetos donde se especifica la definición de las columnas.
//      columnaOrdena: valor de tipo entero que se refiere al index de la columna por la cual estará ordenada la informacion en la carga inicial del grid.
//      tipoOrdenacion: valor de tipo string que se refiere a si la ordenación inicial será de forma ascendente (asc) o descendente (desc).
//      paginada: booleano que indica si el grid será paginado.
//      encabezadoFijo: booleano que indica si el encabezado de las columnas será fijo.
//      incluyeBusqueda: booleano que indicará si el grid tendrá la función para buscar (entrada de texto para buscar).
// ejemplo de llamada: inicializaTabla($("#nombreTabla"),dsDatos,columnasTabla,0,'asc',true,true).
function inicializaTabla(tabla, datos, columnas, columnaOrdena, tipoOrdenacion, paginada, encabezadoFijo, incluyeBusqueda, ordenamiento) {
    var tablaConstruida;

    tablaConstruida = tabla.dataTable({
        language: lenguajeEs,
        responsive: true,
        fixedHeader: encabezadoFijo,
        searching: incluyeBusqueda,
        "bSort": false,
        search: {
            smart: false
        },
        "bAutoWidth": false,
        "bLengthChange": true,
        "bPaginate": paginada,
        destroy: true,
        data: datos,
        columns: columnas,
        ordering: ordenamiento,
        "order": [[columnaOrdena, tipoOrdenacion]],

    });
    $('input[type="search"]').addClass("form-control");

    $('input[type="search"]').parents("div").parent("div").find("select").addClass("form-control");

    return tablaConstruida;
}
function inicializaTabla2(tabla, datos, columnas, columnaOrdena, paginada, encabezadoFijo, incluyeBusqueda) {
    var tablaConstruida;

    tablaConstruida = tabla.dataTable({
        language: lenguajeEs,
        responsive: true,
        fixedHeader: encabezadoFijo,
        searching: incluyeBusqueda,
        "bSort": false,
        search: {
            smart: false
        },
        "bAutoWidth": false,
        "bLengthChange": true,
        "bPaginate": paginada,
        destroy: true,
        data: datos,
        columns: columnas,
        

    });
    $('input[type="search"]').addClass("form-control");

    $('input[type="search"]').parents("div").parent("div").find("select").addClass("form-control");

    return tablaConstruida;
}
function inicializaTabla50(tabla, datos, columnas, columnaOrdena, paginada, encabezadoFijo, incluyeBusqueda) {
    var tablaConstruida;

    tablaConstruida = tabla.dataTable({
        language: lenguajeEs,
        responsive: true,
        fixedHeader: encabezadoFijo,
        searching: incluyeBusqueda,
        "bSort": false,
        search: {
            smart: false
        },
        "bAutoWidth": false,
        "bLengthChange": true,
        "bPaginate": paginada,
        destroy: true,
        data: datos,
        columns: columnas,
        "pageLength": 25

    });
    $('input[type="search"]').addClass("form-control");

    $('input[type="search"]').parents("div").parent("div").find("select").addClass("form-control");

    return tablaConstruida;
}
function inicializaTablaPinta(tabla, datos, columnas, columnaOrdena, tipoOrdenacion, paginada, encabezadoFijo, incluyeBusqueda, ordenamiento) {
    var tablaConstruida;

    tablaConstruida = tabla.dataTable({
        language: lenguajeEs,
        responsive: true,
        fixedHeader: encabezadoFijo,
        searching: incluyeBusqueda,
        "bSort": false,
        search: {
            smart: false
        },
        "bAutoWidth": false,
        "bLengthChange": true,
        "bPaginate": paginada,
        destroy: true,
        data: datos,
        columns: columnas,
        ordering: ordenamiento,
        "order": [[columnaOrdena, tipoOrdenacion]],
        "rowCallback": function (row, data, index) {
            row.className = (data.Cuadran ? "" : "FilaNoCuadra");
        }
    });
    $('input[type="search"]').addClass("form-control");

    $('input[type="search"]').parents("div").parent("div").find("select").addClass("form-control");

    return tablaConstruida;
}

function inicializaTablaPintaSinOrden(tabla, datos, columnas, columnaOrdena, paginada, encabezadoFijo, incluyeBusqueda) {
    var tablaConstruida;

    tablaConstruida = tabla.dataTable({
        language: lenguajeEs,
        responsive: true,
        fixedHeader: encabezadoFijo,
        searching: incluyeBusqueda,
        "bSort": false,
        search: {
            smart: false
        },
        "bAutoWidth": false,
        "bLengthChange": true,
        "bPaginate": paginada,
        destroy: true,
        data: datos,
        columns: columnas,       
        "rowCallback": function (row, data, index) {
            row.className = (data.Cuadran ? "" : "FilaNoCuadra");
        }
    });
    $('input[type="search"]').addClass("form-control");

    $('input[type="search"]').parents("div").parent("div").find("select").addClass("form-control");

    return tablaConstruida;
}

function refrescaTabla(tabla, datos) {
    tabla.api().clear().rows.add(datos).draw();
}

function cambiaEstadoSwitch(checkbox, checked) {
    if (checked) {
        if (!checkbox.prop('checked'))
            checkbox.click();
    }
    else {
        if (checkbox.prop('checked'))
            checkbox.click();
    }
}
function cambiaEstadoIcheck(checkbox, checked) {
    if (checked) {

        checkbox.iCheck('check');
    }
    else {
        checkbox.iCheck('uncheck');

    }
}


function ValidarEmail(email) {
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return expr.test(email);
}

function SoloNumerosPositivos(texto) {
    var e = event;
    var pattern = /^[0-9]+$/;
    if (!pattern.test(String.fromCharCode(e.keyCode))) {
        e.returnValue = false;
    }
}

function NumDecimal(e, field) {
    tecla = e.keyCode ? e.keyCode : e.which
    if (tecla == 8 || tecla == 35 || tecla == 36 || tecla == 46) return true

    if ((tecla < 48 || tecla > 57) && (tecla != 46) && (tecla != 8)) {
        return false;
    } else {

        var len = $(field).val().length;
        var index = $(field).val().indexOf('.');

        if (index > 0 && tecla == 46) {
            return false;
        }

        if (index > 0) {
            var CharAfterdot = (len + 1) - index;
            if (CharAfterdot > 3) {
                return false;
            }
        }
    }

    return true;
};

function MonedaValdacion(o) {
    var e = event;
    var s = o.value.split('.');

    if (e.keyCode >= 48 && e.keyCode <= 57 || e.keyCode == 46) {
        //Validamos que solo se registre un punto
        if (e.keyCode == 46 && s.length > 1) {
            e.returnValue = false;
            return false;
        }
        // restrigir numero de decimales 
        if (s.length > 1) {
            if (s[1].length >= 4) {
                e.returnValue = false;
                return false;
            }
            e.returnValue = ((e.keyCode >= 48 && e.keyCode <= 57 || e.keyCode == 46));
        }
        // validamos que solo metan 6 numeros antes del punto
        if (e.keyCode == 46) {
            e.returnValue = true;
            return true;
        }
        if (s.length == 1) {
            if (s[0].length >= 18) {
                if (e.keyCode == 46) {
                    e.returnValue = true;
                    return true;
                }
                e.returnValue = false;
                return false;
            }

            e.returnValue = ((e.keyCode >= 48 && e.keyCode <= 57 || e.keyCode == 46));
        }


        e.returnValue = true;
        return true;
    }

    e.returnValue = false;
    return false;

}

function MonedaValdacion2Decimales(o) {
    var e = event;
    var s = o.value.split('.');

    if (e.keyCode >= 48 && e.keyCode <= 57 || e.keyCode == 46) {
        //Validamos que solo se registre un punto
        if (e.keyCode == 46 && s.length > 1) {
            e.returnValue = false;
            return false;
        }
        // restrigir numero de decimales 
        if (s.length > 1) {
            if (s[1].length >= 2) {
                e.returnValue = false;
                return false;
            }
            e.returnValue = ((e.keyCode >= 48 && e.keyCode <= 57 || e.keyCode == 46));
        }
        // validamos que solo metan 6 numeros antes del punto
        if (e.keyCode == 46) {
            e.returnValue = true;
            return true;
        }
        if (s.length == 1) {
            if (s[0].length >= 18) {
                if (e.keyCode == 46) {
                    e.returnValue = true;
                    return true;
                }
                e.returnValue = false;
                return false;
            }

            e.returnValue = ((e.keyCode >= 48 && e.keyCode <= 57 || e.keyCode == 46));
        }


        e.returnValue = true;
        return true;
    }

    e.returnValue = false;
    return false;

}
function MonedaValdacion4Decimales(o) {
    var e = event;
    var s = o.value.split('.');

    if (e.keyCode >= 48 && e.keyCode <= 57 || e.keyCode == 46) {
        //Validamos que solo se registre un punto
        if (e.keyCode == 46 && s.length > 1) {
            e.returnValue = false;
            return false;
        }
        // restrigir numero de decimales 
        if (s.length > 1) {
            if (s[1].length >= 4) {
                e.returnValue = false;
                return false;
            }
            e.returnValue = ((e.keyCode >= 48 && e.keyCode <= 57 || e.keyCode == 46));
        }
        // validamos que solo metan 6 numeros antes del punto
        if (e.keyCode == 46) {
            e.returnValue = true;
            return true;
        }
        if (s.length == 1) {
            if (s[0].length >= 18) {
                if (e.keyCode == 46) {
                    e.returnValue = true;
                    return true;
                }
                e.returnValue = false;
                return false;
            }

            e.returnValue = ((e.keyCode >= 48 && e.keyCode <= 57 || e.keyCode == 46));
        }


        e.returnValue = true;
        return true;
    }

    e.returnValue = false;
    return false;

}
function PorcentajesValdacion(o) {
    var e = event;
    var s = o.value.split('.');
    if (s[0] == 100) {
        e.returnValue = false;
        return false;
    }
    if (e.keyCode >= 48 && e.keyCode <= 57 || e.keyCode == 46) {
        //Validamos que solo se registre un punto
        if (e.keyCode == 46 && s.length > 1) {
            e.returnValue = false;
            return false;
        }
        if (s[0].length >= 8) {
            e.returnValue = false;
            return false;
        }
        // restrigir numero de decimales 
        if (s.length > 1) {
            if (s[1].length >= 2) {
                e.returnValue = false;
                return false;
            }
            e.returnValue = ((e.keyCode >= 48 && e.keyCode <= 57 || e.keyCode == 46));
        }
        // validamos que el numero antes del punto sea menorque 101 y mayor que 0
        if (s.length == 1) {
            if (s[0].length > 1) {
                if (s[0] == 10 && e.keyCode == 48 || e.keyCode == 46) {
                    e.returnValue = true;
                    return true;
                }
                e.returnValue = false;
                return false;
            }

            e.returnValue = ((e.keyCode >= 48 && e.keyCode <= 57 || e.keyCode == 46));
        }

    }
    else {
        e.returnValue = false;
        return false;
    }
}
// valida que un numero entero sea de porcentaje 
// solo acepta numeros >=0 a numeros<=100
function PorcentajesIntValdacion(o) {
    var e = event;
    var s = o.value.split('.');
    if (s[0] == 100) {
        e.returnValue = false;
        return false;
    }
    if (e.keyCode >= 48 && e.keyCode <= 57) {
        //Validamos que solo se registre un punto
        //if (e.keyCode == 46 && s.length > 1) {
        //    e.returnValue = false;
        //    return false;
        //}
        //if (s[0].length >= 8) {
        //    e.returnValue = false;
        //    return false;
        //}
        //// restrigir numero de decimales 
        //if (s.length > 1) {
        //    if (s[1].length >= 2) {
        //        e.returnValue = false;
        //        return false;
        //    }
        //    e.returnValue = ((e.keyCode >= 48 && e.keyCode <= 57 || e.keyCode == 46));
        //}
        // validamos que el numero antes del punto sea menorque 101 y mayor que 0
        if (s.length == 1) {
            if (s[0].length > 1) {
                if (s[0] == 10 && e.keyCode == 48 || e.keyCode == 46) {
                    e.returnValue = true;
                    return true;
                }
                e.returnValue = false;
                return false;
            }

            e.returnValue = ((e.keyCode >= 48 && e.keyCode <= 57 || e.keyCode == 46));
        }

    }
    else {
        e.returnValue = false;
        return false;
    }
}

function SoloNumeros(e) {
    var key = window.Event ? e.which : e.keyCode
    return ((key >= 48 && key <= 57) || (key == 8) || (key == 46))
}




//funcion par acolapsar los paneles

function ColapsaPanel(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className =
            x.previousElementSibling.className.replace("w3-blue", "w3-blue");
    } else {
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className =
            x.previousElementSibling.className.replace("w3-blue", "w3-blue");
    }
}


function ColapsaPanelColapsar(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") != -1) {
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className =
            x.previousElementSibling.className.replace("w3-blue", "w3-blue");

    }
}


function ColapsaPanelMostrar(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className =
            x.previousElementSibling.className.replace("w3-blue", "w3-blue");
    }
}
function guid() {
    function s4() {
        return Math.floor((1 + Math.random()) * 0x10000)
            .toString(16)
            .substring(1);
    }
    return s4() + s4() + '-' + s4() + '-' + s4() + '-' +
        s4() + '-' + s4() + s4() + s4();
}


function RefrescaTablaConColumnaEliminar(tabla, ds) {

    var refrescards = $.grep(ds, function (a, b) {
        return a.AgregarModificarEliminar != 4
    });

    refrescaTabla(tabla, refrescards);
}


function PostFomulario(url, parametros, funcionSuccess) {
    debugger;
    $.ajax({
        url: url,
        type: "POST",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        data: JSON.stringify(parametros),//{ LstPermisos: parametros }),
        async: true,
        success: funcionSuccess,
        error: function (xmlHttpRequest, textStatus, errorThrown) {
            MensajeError("Error consultando al servidor, posible falla de internet.");
        }

    });
}



function PostFomularioAsynFalse(url, parametros, funcionSuccess) {
    debugger;
    $.ajax({
        url: url,
        type: "POST",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        data: JSON.stringify(parametros),//{ LstPermisos: parametros }),
        async: false,
        success: funcionSuccess,
        error: function (xmlHttpRequest, textStatus, errorThrown) {
            MensajeError(textStatus);
        }

    });
}


function RedirecionaLogin() {
    window.location = $('#urlPaginaLogin').val();
}