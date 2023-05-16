<?php

class BaseClass
{
    public function __construct()
    {
        echo 'En el constructor BaseClass', '<br>';
    }
}

class SubClass extends BaseClass
{
    public function __construct()
    {
        parent::__construct();
        echo 'En el constructor SubClass', '<br>';
    }
}

class OtherSubClass extends BaseClass
{
    // heredando el constructor BaseClass
}

// En el constructor BaseClass
$obj = new BaseClass();

// En el constructor BaseClass
// En el constructor SubClass
$obj = new SubClass();

// En el constructor BaseClass
$obj = new OtherSubClass();

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

class Persona
{
    private $nombre;
    private $apellido;
    
    public function __construct($nom, $ape)
    {
        $this->nombre = $nom;
        $this->apellido = $ape;
    }
    
    public function getNombre()
    {
        return $this->nombre;
    }
    
    public function getApellido()
    {
        return $this->apellido;
    }
}

$per = new Persona('Juan', 'Pérez');
echo $per->getNombre(), ' ', $per->getApellido(), '<br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

class MyDestructableClass
{
    public $name = '';
    
    public function __construct()
    {
        echo 'En el constructor', '<br>';
        $this->name = 'MyDestructableClass';
    }

    public function __destruct()
    {
        echo 'Destruyendo ', $this->name, '<br>';
    }
}

$obj1 = new MyDestructableClass();
$obj1 = null;
echo 'Otra salida 1', '<br>';
echo  '<br>';

$obj2 = new MyDestructableClass();
echo 'Otra salida 2', '<br>';