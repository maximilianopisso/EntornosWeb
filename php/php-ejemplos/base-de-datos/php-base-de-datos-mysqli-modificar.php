<?php

try {
    $filasAfectadas = 0;

    /**
     * Variables que pueden contener datos enviados desde un formulario.
     * Estos datos deben ser validados (restricciones de negocio, seguridad, etc.).
     * Las variables contienen el Id del registro a modificar y nuevos valores para los campos.
     */
    $aluId = '3';
    $aluNombre = 'Juan Pérez';
    $aluEmail = 'juanperez@gmail.com';

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $mysqli = new mysqli('localhost', 'root', '', 'php-base-de-datos-mysqli');

    $mysqli->set_charset('utf8mb4');

    // SQL: Modificar registro
    $sql = ""
        . "UPDATE "
        . "    alu_alumnos "
        . "SET "
        . "    alu_nombre = ?, "
        . "    alu_email = ? "
        . "WHERE "
        . "    alu_id = ? "
    ;

    $sentencia = $mysqli->prepare($sql);

    $sentencia->bind_param('ssi', $aluNombre, $aluEmail, $aluId);

    $sentencia->execute();

    $filasAfectadas = $sentencia->affected_rows;

    $sentencia->close();

    $mysqli->close();

    // Muestra datos
    echo 'Filas afectadas: ', $filasAfectadas, '<br>';
} catch (Exception $e) {
    echo 'Código ' . $e->getCode() . ' - ' . $e->getMessage();
}
