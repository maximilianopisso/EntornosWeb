<?php

try {
    $filasAfectadas = 0;
    $ultimoId = 0;

    /**
     * Variables que pueden contener datos enviados desde un formulario.
     * Estos datos deben ser validados (restricciones de negocio, seguridad, etc.).
     */
    $aluNombre = 'Juan Pérez';
    $aluEmail = 'jperez@hotmail.com';

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $mysqli = new mysqli('localhost', 'root', '', 'php-base-de-datos-mysqli');

    $mysqli->set_charset('utf8mb4');

    // SQL: Insertar registro
    $sql = ""
        . "INSERT INTO alu_alumnos ( "
        . "    alu_id, "
        . "    alu_nombre, "
        . "    alu_email "
        . ") "
        . "VALUES ( "
        . "    null, "
        . "    ?, "
        . "    ? "
        . ") "
    ;

    $sentencia = $mysqli->prepare($sql);

    $sentencia->bind_param('ss', $aluNombre, $aluEmail);

    $sentencia->execute();

    // Devuelve el número total de filas insertadas, modificadas, o eliminadas por la última sentencia ejecutada
    $filasAfectadas = $sentencia->affected_rows;

    // Obtiene el Id generado en la operación INSERT anterior
    $ultimoId = $sentencia->insert_id;

    $sentencia->close();

    $mysqli->close();

    // Muestra datos
    echo 'Filas afectadas: ', $filasAfectadas, '<br>';
    echo 'Último Id: ', $ultimoId, '<br>';
} catch (Exception $e) {
    echo 'Código ' . $e->getCode() . ' - ' . $e->getMessage();
}
