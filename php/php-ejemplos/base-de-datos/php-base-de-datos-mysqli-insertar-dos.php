<?php

try {
    $ultimoId1 = 0;
    $ultimoId2 = 0;

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

    $aluNombre = 'Roberto González';
    $aluEmail = 'rgonzalez@gmail.com';
    $sentencia->execute();
    $ultimoId1 = $sentencia->insert_id;

    $aluNombre = 'Sergio López';
    $aluEmail = 'sergiolopez@hotmail.com';
    $sentencia->execute();
    $ultimoId2 = $sentencia->insert_id;

    $sentencia->close();
    $mysqli->close();

    // Muestra datos
    echo 'Último Id: ', $ultimoId1, '<br>';
    echo 'Último Id: ', $ultimoId2, '<br>';
} catch (Exception $e) {
    echo 'Código ' . $e->getCode() . ' - ' . $e->getMessage();
}
