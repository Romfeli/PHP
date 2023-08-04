<?php 
    //bucle while

    $continuar = true;

    while ($continuar == true) {
        //generar un numero aleatorio entre 1 y 1000
        $num = rand(1, 1000);

        echo "$num <br>";

        //condición de salida
        if ($num % 7 == 0) {
            $continuar = false;
        }
    }

?>