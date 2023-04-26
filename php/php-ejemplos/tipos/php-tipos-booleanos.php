<?php

$foo = True; // asigna el valor TRUE a $foo

$accion = "mostrar_version";
// == es un operador que comprueba la igualdad y devuelve un booleano
if ($accion == "mostrar_version") {
    echo "La versión es 1.23";
}

$mostrar_separadores = true;  // PCR dice que tiene que ser asi la asignacion
// esto no es necesario...
if ($mostrar_separadores == TRUE) {
    echo "<hr>\n";
}

// ...porque se puede escribir simplemente:
if ($mostrar_separadores) {
    echo "<hr>\n";
}//
// var_dump siver para ver el tipo de dato de la variable
var_dump((bool) "");              // bool(false)
var_dump((bool) "0");             // bool(false)
var_dump((bool) 0);               // bool(false)
var_dump((bool) 1);               // bool(true)
var_dump((bool) -2);              // bool(true)
var_dump((bool) 2.3e5);           // bool(true)
var_dump((bool) "foo");           // bool(true)
var_dump((bool) "false");         // bool(true)
var_dump((bool) array(12));       // bool(true)
var_dump((bool) array());         // bool(false)
var_dump((bool) array(array()));  // bool(true)
