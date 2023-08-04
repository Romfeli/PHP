<?php 
    const LETRAS = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];

    $numero = '40000001';
    $letra = 'H';

    //Validar número dentro de rango
    if ($numero < '00000000' || $numero > '99999999') {
        die('numero fuera de rango');
    }

    //cálculo de la letra
    if (verificarNif($numero, $letra)) {
        echo 'NIF correcto';
    } else {
        echo 'NIF incorrecto';
    }

    function verificarNif($n, $l) {

        $resto = $n % 23;

        $letraArray = LETRAS[$resto];   
        
        if ($l == $letraArray) {
            return true;
        } else {
            return false;
        }
    }

?>