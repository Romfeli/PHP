<?php 
    //variables
    $texto = "Soy un texto";

    //tipos de variables
    $nombre = 'Arch Stanton'; //tipo texto
    $edad = 50; //tipo numérico
    $aceptar = true; //tipo booleano

    //concatenar texto con variables
    echo 'Hola, me llamo '.$nombre;
    echo '<br>';
    echo "Hola, me llamo $nombre"; //JS: `Hola me llamo ${nombre}`
    echo '<br>';

    //variables booleanas
    $continuar = false;
    echo $continuar; //se mostrará 1 para true y ausencia de valor para false
    echo '<br>';

    //suma de variables
    $numero1 = 4;
    $numero2 = '5';
    $numero3 = 6;

    $resultado = $numero1 + $numero2 + $numero3;

    echo $resultado; //15
    $numero1 = 20;
    echo '<br>';

    //constantes 
    const PI = 3.141592;
?>
