<?php

try {
    $filas = 0;
    $datos = array();

    /**
     * Variables que pueden contener datos enviados desde un formulario.
     * Estos datos deben ser validados (restricciones de negocio, seguridad, etc.).
     * La variable contiene el Id del registro a seleccionar.
     */
    $aluId = '1';

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $mysqli = new mysqli('localhost', 'root', '', 'php-base-de-datos-mysqli');

    $mysqli->set_charset('utf8mb4');

    // SQL: Seleccionar registro
    $sql = ""
        . "SELECT "
        . "    alu_id, "
        . "    alu_nombre, "
        . "    alu_email "
        . "FROM "
        . "    alu_alumnos "
        . "WHERE "
        . "    alu_id = ? "
    ;

    $sentencia = $mysqli->prepare($sql);

    // Agrega variables a una sentencia preparada como parámetros
    $sentencia->bind_param('i', $aluId);

    $sentencia->execute();

    $resultado = $sentencia->get_result();

    $filas = $resultado->num_rows;

    $datos = $resultado->fetch_all(MYSQLI_ASSOC);

    $sentencia->close();

    $resultado->free();

    $mysqli->close();

    // Muestra datos
    echo 'Filas: ', $filas, '<br>';
    foreach ($datos as $valor) {
        echo var_dump($valor), '<br>';
    }
} catch (Exception $e) {
    echo 'Código ' . $e->getCode() . ' - ' . $e->getMessage();
}
