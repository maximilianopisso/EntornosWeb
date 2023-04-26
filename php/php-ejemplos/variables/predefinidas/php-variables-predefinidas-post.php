<?php

echo 'Hola ', htmlspecialchars($_POST['nombre']), '!';
// sin htmlspecialchars
// echo 'Hola ', $_POST['nombre'], '!';

var_dump($_POST);