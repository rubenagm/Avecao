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

    //Se limpian los datos
    $("#nombre").val("");
    $("#apellido_paterno").val("");
    $("#apellido_materno").val("");
    $("#telefono").val("");
    $("#celular").val("");
    $("#nombreEmpresa").val("");
    $("#correo").val("");
    $("#razonSocial").val("");
    $("#rfc").val("");
    $("#calle").val("");
    $("#numeroExterior").val("");
    $("#numeroInterior").val("");
    $("#colonia").val("");
    $("#municipio").val("");
    $("#estado").val("");
    $("#codigoPostal").val("");
    $("#check_datos_facturacion").prop('checked', false);
});

function registrar() {

    var parametros = {};
    parametros.nombre = $("#nombre").val();
    parametros.apellidoPaterno = $("#apellido_paterno").val();
    parametros.apellidoMaterno = $("#apellido_materno").val();
    parametros.telefono = $("#telefono").val();
    parametros.celular = $("#celular").val();
    parametros.nombreEmpresa = $("#nombreEmpresa").val();
    parametros.correo = $("#correo").val();


    var bandera = false;
    var mensaje = "";

    //Se verifican los datos
    if (parametros.nombre.length < 3) {
        bandera = true;
        mensaje += "- Debes introducir un nombre\n";
    }

    if (parametros.apellidoPaterno.length < 3) {
        bandera = true;
        mensaje += "- Debes introducir apellido paterno\n";
    }

    if (parametros.correo.length < 3) {
        bandera = true;
        mensaje += "- Debes introducir un correo\n";
    }

    if (parametros.apellidoMaterno.length < 3) {
        bandera = true;
        mensaje += "- Debes introducir apellido materno\n";
    }

    if (parametros.telefono.length < 8) {
        bandera = true;
        mensaje += "- Debes introducir un teléfono\n";
    }

    if (parametros.celular.length < 10) {
        bandera = true;
        mensaje += "- Debes introducir un número de celular\n";
    }

    if (parametros.nombreEmpresa.length < 3) {
        bandera = true;
        mensaje += "- Debes introducir un nombre de empresa\n";
    }

    if ($("#check_datos_facturacion:checked").length == 1) {

        parametros.razonSocial = $("#razonSocial").val();
        parametros.rfc = $("#rfc").val();
        parametros.calle = $("#calle").val();
        parametros.numeroExterior = $("#numeroExterior").val();
        parametros.numeroInterior = $("#numeroInterior").val();
        parametros.colonia = $("#colonia").val();
        parametros.municipio = $("#municipio").val();
        parametros.estado = $("#estado").val();
        parametros.codigoPostal = $("#codigoPostal").val();

        mensaje += "- Si seleccionas datos de facturación debes completar todos los campos";
        //Se verifican los datos extra
        if (parametros.razonSocial.length < 3) {
            bandera = true;
        }
        
        if (parametros.rfc.length < 3) {
            bandera = true;
        }

        if (parametros.calle.length < 3) {
            bandera = true;
        }

        if (parametros.numeroExterior.length < 3) {
            bandera = true;
        }

        if (parametros.colonia.length < 3) {
            bandera = true;
        }

        if (parametros.municipio.length < 3) {
            bandera = true;
        }

        if (parametros.estado.length < 3) {
            bandera = true;
        }

        if (parametros.codigoPostal.length != 5) {
            mensaje += "- El código postal consta de 5 números";
            bandera = true;
        }
    }

    if (bandera) {
        alert(mensaje);

        return ;
    }
    $.post("registro.php", parametros, function (respuesta) {


    });
    $('#modal1').openModal();
}

/*
Ocultar la información extra
 */


