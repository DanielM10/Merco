$(document).ready(function () {

    $('#Periodo').daterangepicker({
        format: 'DD/MM/YYYY',
        "opens": "right",
        locale: lacalesDTRP
    });

    var f = new Date();

    var fechaACtual = moment(f).format("DD/MM/YYYY hh:mm")

    $('#ultimaACtializacion').val(fechaACtual);
});
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