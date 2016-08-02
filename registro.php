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
            <td>Correo electrónico</td>
            <td>' . $_POST['correo'] . '</td>
        </tr>
    </table>';



foreach ($correos as $correo) {
    mail($correo, $subject, $txt);
}

echo json_encode(array("respuesta" => "correcto"));
