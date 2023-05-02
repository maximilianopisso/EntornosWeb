<?php

function tomar_array($entrada)
{
    echo "$entrada[0] + $entrada[1] = ", $entrada[0] + $entrada[1];
}
tomar_array(array(40,60));

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

function añadir_algo(&$cadena)
{
    $cadena .= 'y algo más.';
}
$cad = 'Esto es una cadena, ';
añadir_algo($cad);
echo $cad;    // imprime 'Esto es una cadena, y algo más.'

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

function hacercafé($tipo = "capuchino")
{
    return "Hacer una taza de $tipo.";
}
echo hacercafé(), '<br>';
echo hacercafé(null), '<br>';
echo hacercafé("espresso"), '<br>';

function hacercafé2($tipos = array("capuchino"), $fabricanteCafé = null)
{
    $aparato = is_null($fabricanteCafé) ? "las manos" : $fabricanteCafé;
    return "Hacer una taza de " . join(", ", $tipos) . " con $aparato.";
}
echo hacercafé2(), '<br>';
echo hacercafé2(array("capuchino", "lavazza"), "una tetera"), '<br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

function haceryogur($sabor, $tipo = "acidófilo")
{
    return "Hacer un tazón de yogur $tipo de $sabor.";
}
 
echo haceryogur("frambuesa"), '<br>';
