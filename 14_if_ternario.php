<?php
    $numero = 6;

    //comprobar si el número es par o impar 
    /*
    if ($numero % 2 == 0) {
        $resultado = 'el número es par';
    } else {
        $resultado = 'el número es impar';
    }
    */ 

    //if ternario
    /*
    $numero % 2 == 0 ? 
        $resultado = 'el número es par' : 
        $resultado = 'el número es impar';
    */

    //asignación utilizando if ternario
    $resultado = $numero % 2 == 0 ? 
        'el número es par' : 
        'el número es impar';

    echo $resultado;
?>