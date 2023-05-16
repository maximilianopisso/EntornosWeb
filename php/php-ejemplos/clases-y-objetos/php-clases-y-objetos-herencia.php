<?php

class ClaseA
{
    public function mensaje()
    {
        echo 'Mensaje desde ', __CLASS__, '<br>';
    }
}

class ClaseB extends ClaseA
{

}

class ClaseC extends ClaseB
{

}

$miClaseC = new ClaseC();
$miClaseC ->mensaje();

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

class Foo
{
    public function printItem($string)
    {
        echo 'Foo: ', $string, '<br>';
    }
    
    public function printPHP()
    {
        echo 'PHP is great.', '<br>';
    }
}

class Bar extends Foo
{
    public function printItem($string)
    {
        echo 'Bar: ', $string, '<br>';
    }
}

$foo = new Foo();
$bar = new Bar();
$foo->printItem('baz'); // Salida: 'Foo: baz'
$foo->printPHP();       // Salida: 'PHP is great'
$bar->printItem('baz'); // Salida: 'Bar: baz'
$bar->printPHP();       // Salida: 'PHP is great'
