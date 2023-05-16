<?php

class Clase1
{
    public static $miStatic = 'foo';

    public function getMiStatic()
    {
        return self::$miStatic;
    }

    public static function metodoEstatico()
    {
        return 'Mensaje desde ' . __METHOD__;
    }
}

echo Clase1::$miStatic, '<br>';
echo Clase1::metodoEstatico(), '<br>';
$cl1 = new Clase1();
// echo $cl1->miStatic, '<br>'; // Emite aviso
echo $cl1->getMiStatic(), '<br>';
echo $cl1->metodoEstatico(), '<br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

class Clase2 extends Clase1
{
    public function getMiStatic2()
    {
        return parent::$miStatic;
    }
    
    public function metodoEstatico2()
    {
        return parent::metodoEstatico();
    }
}

echo Clase2::$miStatic, '<br>';
echo Clase2::metodoEstatico(), '<br>';
$cl2 = new Clase2();
// echo $cl2->miStatic, '<br>'; // Emite aviso
echo $cl2->getMiStatic(), '<br>';
echo $cl2->getMiStatic2(), '<br>';
echo $cl2->metodoEstatico2(), '<br>';
