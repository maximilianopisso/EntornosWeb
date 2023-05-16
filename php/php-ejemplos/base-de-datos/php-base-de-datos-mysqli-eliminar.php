<?php

try {
    $filasAfectadas = 0;

    /**
     * Variables que pueden contener datos enviados desde un formulario.
     * Estos datos deben ser validados (restricciones de negocio, seguridad, etc.).
     * La variable contiene el Id del registro a eliminar.
     */
    $aluId = '3';

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $mysqli = new mysqli('localhost', 'root', '', 'php-base-de-datos-mysqli');

    $mysqli->set_charset('utf8mb4');

    // SQL: Eliminar registro
    $sql = ""
        . "DELETE "
        . "FROM "
        . "    alu_alumnos "
        . "WHERE "
        . "    alu_id = ? "
    ;

    $sentencia = $mysqli->prepare($sql);

    $sentencia->bind_param('i', $aluId);

    $sentencia->execute();

    $filasAfectadas = $sentencia->affected_rows;

    $sentencia->close();

    $mysqli->close();

    // Muestra datos
    echo 'Filas afectadas: ', $filasAfectadas, '<br>';
} catch (Exception $e) {
    echo 'Código ' . $e->getCode() . ' - ' . $e->getMessage();
}
