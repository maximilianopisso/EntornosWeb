<?php

function foo($arg_1, $arg_2, /* ..., */ $arg_n)
{
    echo 'Función de ejemplo.', '<br>';
    return $valor_devuelto;
}

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$hacer_algo = true;

/* No podemos llamar a foo2() desde aquí ya que no existe aún,
   pero podemos llamar a bar2() */

bar2();

if ($hacer_algo) {
    function foo2()
    {
        echo 'No existo hasta que la ejecución del programa llegue hasta mí.', '<br>';
    }
}

/* Ahora podemos llamar de forma segura a foo2()
   ya que $hacer_algo se evaluó como verdadero */

if ($hacer_algo) foo2();

function bar2()
{
    echo 'Existo desde el momento inmediato que comenzó el programa.', '<br>';
}

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

function foo3()
{
    function bar3()
    {
        echo 'No existo hasta que se llame a foo3().', '<br>';
    }
}

// No podemos llamar aún a bar3() ya que no existe.

foo3();

// Ahora podemos llamar a bar3(), el procesamiento de foo3() la ha hecho accesible.

bar3();

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

function recursividad($a)
{
    if ($a < 20) {
        echo $a, '<br>';
        recursividad($a + 1);
    }
}
recursividad(0);
