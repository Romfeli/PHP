<?php
    //array de paises/capitales
    $paises['Francia']    = 'París';
    $paises['Ecuador']    = 'Quito';
    $paises['Italia']     = 'Roma';
    $paises['Alemania']   = 'Berlin';
    $paises['Argentina']  = 'Buenos Aires';

    echo '<pre>';
    print_r($paises);
    echo '</pre>';    

    //buscar un valor (capital) en el array
    $clave = array_search('Paris', $paises);

    echo $clave;

    //borrar una relación pais-capital del array
    unset($paises[$clave]); //array_splice no funciona con asociativos

    echo '<pre>';
    print_r($paises);
    echo '</pre>';  
?>