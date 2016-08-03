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
 * Los encabezados para que se vea mejor
 */
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";



/*
 * El contenido del mensaje
 */
$txt = '
    <label>Datos personales</label>
    <table>
        <tr>
            <td style="font-weight: bold;">Apellido Paterno</td>
            <td>' . $_POST['apellidoPaterno'] . '</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Apellido Materno</td>
            <td>' . $_POST['apellidoMaterno'] . '</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Nombre/s</td>
            <td>' . $_POST['nombre'] . '</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Tel&eacute;fono fijo</td>
            <td>' . $_POST['telefono'] . '</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Celular</td>
            <td>' . $_POST['celular'] . '</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Correo electr&oacute;nico</td>
            <td>' . $_POST['correo'] . '</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Nombre empresa</td>
            <td>' . $_POST['nombreEmpresa'] . '</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Raz&oacute;n social</td>
            <td>' . $_POST['razonSocial'] . '</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">RFC/s</td>
            <td>' . $_POST['rfc'] . '</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Calle</td>
            <td>' . $_POST['calle'] . '</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">N&uacute;mero Exterior</td>
            <td>' . $_POST['numeroExterior'] . '</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">N&uacute;mero Interior</td>
            <td>' . $_POST['numeroInterior'] . '</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">C&oacute;digo postal</td>
            <td>' . $_POST['codigoPostal'] . '</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Colonia</td>
            <td>' . $_POST['colonia'] . '</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Municipio</td>
            <td>' . $_POST['municipio'] . '</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">Estado</td>
            <td>' . $_POST['estado'] . '</td>
        </tr>
    </table>';



foreach ($correos as $correo) {
    mail($correo, $subject, $txt, $headers);
}

echo json_encode(array("respuesta" => "correcto"));
