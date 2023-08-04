<?php 
    //crear un array asociativo con la relación pais-capital de 5 estados

    $paises['Francia']    = 'París';
    $paises['Ecuador']    = 'Quito';
    $paises['Italia']     = 'Roma';
    $paises['Alemania']   = 'Berlin';
    $paises['Argentina']  = 'Buenos Aires';

    //recorrer el array para mostrar la capital de cada pais
    //       array      clave    valor
    foreach ($paises as $pais => $capital) {
        echo "La capital de $pais es $capital <br>";
    }
?>