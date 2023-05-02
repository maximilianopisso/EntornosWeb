<?php

function cuadrado($núm)
{
    return $núm * $núm;
}
echo cuadrado(4), '<br>';   // imprime '16'.

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

function números_pequeños()
{
    return array(0, 1, 2);
}
list ($cero, $uno, $dos) = números_pequeños();
echo $cero, ', ', $uno, ', ', $dos, '<br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

function emitirMensaje()
{
    echo 'Mi mensaje...', '<br>';
}
echo var_dump(emitirMensaje()), '<br>';
