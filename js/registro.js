/**
 * Created by Ruben on 31/07/2016.
 */

$(document).ready(function() {
    $('.modal-trigger').leanModal();
    $("#datos_facturacion").hide();

    $("#check_datos_facturacion").on('change', function () {

        if ($("#check_datos_facturacion:checked").length == 1) {
            $("#datos_facturacion").show(700);
        } else {
            $("#datos_facturacion").hide(700);
        }
    });
});

function registrar() {

    var parametros = {};
    parametros.nombre = $("#nombre").val();
    parametros.apellidoPaterno = $("#apellido_paterno").val();
    parametros.apellidoMaterno = $("#apellido_materno").val();
    parametros.telefono = $("#telefono").val();
    parametros.celular = $("#celular").val();

    /*$.post("registro.php", parametros, function (respuesta) {

    });*/
    $('#modal1').openModal();
}

/*
Ocultar la información extra
 */


