<?php

try {
    // Variables para mostrar resultados
    $filas = 0;
    $datos = array();

    // Indica que se lanzan excepciones para errores mysqli
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // Conexión con la base de datos (parámetros: servidor, usuario, password, base de datos)
    $mysqli = new mysqli('localhost', 'root', '', 'php-base-de-datos-mysqli');

    // Establece el conjunto de caracteres cuando se envían datos desde y hacia el servidor de la base de datos
    $mysqli->set_charset('utf8mb4');

    // SQL: Seleccionar registros
    $sql = ""
        . "SELECT "
        . "    alu_id, "
        . "    alu_nombre, "
        . "    alu_email "
        . "FROM "
        . "    alu_alumnos "
        . "ORDER BY "
        . "    alu_nombre ASC "
    ;

    // Prepara una sentencia SQL para su ejecución
    $sentencia = $mysqli->prepare($sql);

    // Ejecuta una consulta preparada
    $sentencia->execute();

    // Obtiene un conjunto de resultados de una sentencia preparada
    $resultado = $sentencia->get_result();

    // Obtiene el número de filas de un resultado
    $filas = $resultado->num_rows;

    // Obtiene todas las filas en un array asociativo
    $datos = $resultado->fetch_all(MYSQLI_ASSOC);

    // Cierra la sentencia preparada
    $sentencia->close();

    // Libera la memoria asociada a un resultado
    $resultado->free();

    // Cierra una conexión previamente abierta a una base de datos
    $mysqli->close();

    // Muestra datos
    echo 'Filas: ', $filas, '<br>';
    foreach ($datos as $valor) {
        echo var_dump($valor), '<br>';
    }
} catch (Exception $e) {
    // Muestra el mensaje de error
    echo 'Código ' . $e->getCode() . ' - ' . $e->getMessage();

    /**
     * En un entorno de producción se debe evitar mostrar información sensible
     * contenida en los errores (password, nombre de base de datos, etc.).
     * Se podría reemplazar por un mensaje genérico como "Ha ocurrido un error.".
     */
}
