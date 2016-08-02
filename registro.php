<?php
/**
 * Created by PhpStorm.
 * User: Ruben
 * Date: 31/07/2016
 * Time: 08:26 PM
 */

/*
 * Aquí van todos los correos
 */

$correos = array(
    "ruben.agm02@gmail.com",
    "r.guardado@outlook.es"
);


/*
 * Aquí se forma el título del mensaje
 */
$subject = 'Nuevo registro de: '
    . $_POST['apellidoPaterno'] . ' '
    . $_POST['apellidoMaterno'] . ' '
    . $_POST['nombre'];

/*
 * El contenido del mensaje
 */
$txt = '
    <label>Datos personales</label>
    <table>
        <tr>
            <td>Apellido Paterno</td>
            <td>' . $_POST['apellidoPaterno'] . '</td>
        </tr>
        <tr>
            <td>Apellido Materno</td>
            <td>' . $_POST['apellidoMaterno'] . '</td>
        </tr>
        <tr>
            <td>Nombre/s</td>
            <td>' . $_POST['nombre'] . '</td>
        </tr>
        <tr>
            <td>Tel&eacute;fono fijo</td>
            <td>' . $_POST['telefono'] . '</td>
        </tr>
        <tr>
            <td>Celular</td>
            <td>' . $_POST['celular'] . '</td>
        </tr>
        <tr>
            <td>Correo electr&oacute;nico</td>
            <td>' . $_POST['correo'] . '</td>
        </tr>
        <tr>
            <td>Nombre empresa</td>
            <td>' . $_POST['nombreEmpresa'] . '</td>
        </tr>
        <tr>
            <td>Raz&oacute;n social</td>
            <td>' . $_POST['razonSocial'] . '</td>
        </tr>
        <tr>
            <td>RFC/s</td>
            <td>' . $_POST['rfc'] . '</td>
        </tr>
        <tr>
            <td>Calle</td>
            <td>' . $_POST['calle'] . '</td>
        </tr>
        <tr>
            <td>N&uacute;mero Exterior</td>
            <td>' . $_POST['numeroExterior'] . '</td>
        </tr>
        <tr>
            <td>N&uacute;mero Interior</td>
            <td>' . $_POST['numeroInterior'] . '</td>
        </tr>
        <tr>
            <td>C&oacute;digo postal</td>
            <td>' . $_POST['codigoPostal'] . '</td>
        </tr>
        <tr>
            <td>Colonia</td>
            <td>' . $_POST['colonia'] . '</td>
        </tr>
        <tr>
            <td>Municipio</td>
            <td>' . $_POST['municipio'] . '</td>
        </tr>
        <tr>
            <td>Estado</td>
            <td>' . $_POST['estado'] . '</td>
        </tr>
    </table>';



foreach ($correos as $correo) {
    mail($correo, $subject, $txt);
}

echo json_encode(array("respuesta" => "correcto"));
