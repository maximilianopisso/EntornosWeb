<?php

class ClaseSencilla
{
    // Declaración de una propiedad
    public $var1 = 'un valor predeterminado';

    // Declaración de un método
    public function mostrarVar()
    {
        echo $this->var1;
    }
}
$instancia = new ClaseSencilla();
$instancia->mostrarVar();

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

class Clase1
{
    public $var1 = 'hola ' . 'mundo';
    public $var2 = 1 + 2;
    public $var3 = array(true, false);
}

$cl1 = new Clase1();
echo var_dump($cl1->var1), '<br>';
echo var_dump($cl1->var2), '<br>';
echo var_dump($cl1->var3), '<br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

class Clase2
{
    public const CONSTANTE = 'valor constante';

    public function mostrarConstante()
    {
        echo  self::CONSTANTE, '<br>';   //para constanes y propiedades estaticas
    }
}

echo Clase2::CONSTANTE, '<br>';
$cl2 = new Clase2();
$cl2->mostrarConstante();
echo $cl2::CONSTANTE, '<br>';