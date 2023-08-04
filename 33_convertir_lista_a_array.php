<?php 
    //1.- convertir una lista de valores a array
    $colores = "negro, rojo, azul, verde, amarillo, blanco";

    echo $colores;

    $arrayColores = explode(',', $colores);

    echo '<pre>';
    print_r($arrayColores);
    echo '</pre>';

    //2.- convertir un array en una lista de valores
    sort($arrayColores);
    $colores2 = implode(', ', $arrayColores);

    echo $colores2;

?>