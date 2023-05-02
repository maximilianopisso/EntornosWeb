<?php

$var1 = 'algo';
if (isset($var1)) {  // true
    echo '$var1: definida.', '<br>';
} else {
    echo '$var1: no definida.', '<br>';
}

$var1 = '';
echo '$var1: ', var_dump(isset($var1)), '<br>';  // true

unset($var1);
echo '$var1: ', var_dump(isset($var1)), '<br>';  // false

$var1 = null;
echo '$var1: ', var_dump(isset($var1)), '<br>';  // false

echo '$var2: ', var_dump(isset($var2)), '<br>';  // false

$var3 = array();
echo '$var3: ', var_dump(isset($var3)), '<br>';  // true

$var3 = array('id' => '1234');
echo '$var3[\'id\']: ', var_dump(isset($var3['id'])), '<br>';  // true

echo '$var3[\'nombre\']: ', var_dump(isset($var3['nombre'])), '<br>';  // false

echo '$var1, $var2 y $var3: ', var_dump(isset($var1, $var2, $var3)), '<br>';  // false

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$var1 = '';
if (empty($var1)) {  // true
    echo '$var1: vacía.', '<br>';
} else {
    echo '$var1: no vacía.', '<br>';
}

$var1 = 0;
echo '$var1: ', var_dump(empty($var1)), '<br>';  // true

$var1 = 0.0;
echo '$var1: ', var_dump(empty($var1)), '<br>';  // true

$var1 = '0';
echo '$var1: ', var_dump(empty($var1)), '<br>';  // true

$var1 = null;
echo '$var1: ', var_dump(empty($var1)), '<br>';  // true

$var1 = false;
echo '$var1: ', var_dump(empty($var1)), '<br>';  // true

$var1 = 'algo';
echo '$var1: ', var_dump(empty($var1)), '<br>';  // false

echo '$var2: ', var_dump(empty($var2)), '<br>';  // true

$var3 = array();
echo '$var3: ', var_dump(empty($var3)), '<br>';  // true

$var3 = array('id' => '1234');
echo '$var3[\'id\']: ', var_dump(empty($var3['id'])), '<br>';  // false

echo '$var3[\'nombre\']: ', var_dump(empty($var3['nombre'])), '<br>';  // true

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$var1 = null;
if (is_null($var1)) {  // true
    echo '$var1: es null.', '<br>';
} else {
    echo '$var1: no es null.', '<br>';
}

echo '$var2: ', var_dump(is_null($var2)), '<br>';  // true

$var3 = '';
echo '$var3: ', var_dump(is_null($var3)), '<br>';  // false

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$var1 = array('a', 'b', 'c');
if (is_array($var1)) {  // true
    echo '$var1: es array.', '<br>';
} else {
    echo '$var1: no es array.', '<br>';
}

echo '$var2: ', var_dump(is_array($var2)), '<br>';  // false

$var3 = array();
echo '$var3: ', var_dump(is_array($var3)), '<br>';  // true

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$var1 = 10;
echo '$var1: ', var_dump(is_int($var1)), '<br>';  // true

$var1 = '10';
echo '$var1: ', var_dump(is_int($var1)), '<br>';  // false

$var1 = -10;
echo '$var1: ', var_dump(is_int($var1)), '<br>';  // true

$var1 = 10.5;
echo '$var1: ', var_dump(is_int($var1)), '<br>';  // false

$var1 = null;
echo '$var1: ', var_dump(is_int($var1)), '<br>';  // false

$var1 = true;
echo '$var1: ', var_dump(is_int($var1)), '<br>';  // false

echo '$var2: ', var_dump(is_int($var2)), '<br>';  // false

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$var1 = 10;
echo '$var1: ', var_dump(is_numeric($var1)), '<br>';  // true

$var1 = '10';
echo '$var1: ', var_dump(is_numeric($var1)), '<br>';  // true

$var1 = 10.5;
echo '$var1: ', var_dump(is_numeric($var1)), '<br>';  // true

$var1 = -10.5;
echo '$var1: ', var_dump(is_numeric($var1)), '<br>';  // true

$var1 = 'algo';
echo '$var1: ', var_dump(is_numeric($var1)), '<br>';  // false

echo '$var2: ', var_dump(is_numeric($var2)), '<br>';  // false

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

$var1 = '10';
echo '$var1: ', var_dump(ctype_digit($var1)), '<br>';  // true

$var1 = 10;
echo '$var1: ', var_dump(ctype_digit($var1)), '<br>';  // false

$var1 = '-10';
echo '$var1: ', var_dump(ctype_digit($var1)), '<br>';  // false

$var1 = '10.5';
echo '$var1: ', var_dump(ctype_digit($var1)), '<br>';  // false

$var1 = '10a';
echo '$var1: ', var_dump(ctype_digit($var1)), '<br>';  // false

echo '$var2: ', var_dump(ctype_digit($var2)), '<br>';  // false
