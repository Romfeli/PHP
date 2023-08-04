<?php 
    $nombres = ['Connie Corleone', 'Alfredo Pentangelli', 'Luca Brasi', 'Michael Corleone', 'Virgil Solozzo', 'Apollonia Corleone'];

    echo '<pre>';
    print_r($nombres);
    echo '</pre>';

    //ordenar el array de forma ascendente
    sort($nombres);

    echo '<pre>';
    print_r($nombres);
    echo '</pre>';

    //ordenar el array de forma descendente
    rsort($nombres);

    echo '<pre>';
    print_r($nombres);
    echo '</pre>';

    //ordenar el array de forma aleatoria
    shuffle($nombres);

    echo '<pre>';
    print_r($nombres);
    echo '</pre>';

    $ar1 = [2, 3];
    $ar2 = [6, 4];

    $ar3 = [8, 7];

    rand(1,10);
?>