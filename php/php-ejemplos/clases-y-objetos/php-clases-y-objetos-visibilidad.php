<?php

class MyClass
{
    public $var1 = 'Public';  //Clase // Heredado // Fuera
    protected $var2 = 'Protected'; //Clase // Heredado
    private $var3 = 'Private'; //Propias

    public function printHello()
    {
        echo $this->var1, '<br>';
        echo $this->var2, '<br>';
        echo $this->var3, '<br>';
    }
}

$obj = new MyClass();
echo $obj->var1, '<br>'; // Funciona
//echo $obj->var2, '<br>'; // Error Fatal
//echo $obj->var3, '<br>'; // Error Fatal
$obj->printHello(); // Muestra Public, Protected y Private

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

class MyClass2 extends MyClass
{
    public $var1 = 'Public 2';
    protected $var2 = 'Protected 2';

    function printHello()  // Se declara como "public"
    {
        echo $this->var1, '<br>';
        echo $this->var2, '<br>';
        echo $this->var3, '<br>';
    }
}

$obj2 = new MyClass2();
echo $obj2->var1, '<br>'; // Funciona
//echo $obj2->var2, '<br>'; // Error Fatal
echo $obj2->var3, '<br>'; // Undefined
$obj2->printHello(); // Muestra Public 2, Protected 2, Undefined