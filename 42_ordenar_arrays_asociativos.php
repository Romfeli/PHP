<?php 
    $paises = ['Francia' => 'París', 'Ecuador' => 'Quito', 'Italia' => 'Roma', 'Alemania' => 'Berlin', 'Argentina' => 'Buenos Aires'];

    echo '<pre>';
    print_r($paises);
    echo '</pre>';

    //ordenar de forma ascendente por los valores (capitales)
    asort($paises);

    echo '<pre>';
    print_r($paises);
    echo '</pre>';

    //ordenar de forma descendente por los valores (capitales)
    arsort($paises);

    echo '<pre>';
    print_r($paises);
    echo '</pre>';

    //ordenar de forma ascendente por las claves (paises)
    ksort($paises);

    echo '<pre>';
    print_r($paises);
    echo '</pre>';

    //ordenar de forma descendente por las claves (paises)
    krsort($paises);

    echo '<pre>';
    print_r($paises);
    echo '</pre>';
?>