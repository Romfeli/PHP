<?php
    //1. crear un array con 10 numeros aleatorios

    //1.1 añadir elementos al array sin funciones php
    /*
    for ($i = 0; $i < 10; $i++) {
        $numeros[$i] = rand(1, 100);
    }
    */

    //1.2 añadir elementos al array con la función push
    $numeros = []; //array_push exige que el array a utilizar exista previamente

    for ($i = 0; $i < 10; $i++) {
        array_push($numeros, rand(1, 100));
    }

    echo '<pre>';
    print_r($numeros);
    echo '</pre>';

    //2. ordenar el array de menor a mayor
    sort($numeros);

    echo '<pre>';
    print_r($numeros);
    echo '</pre>';

    //3. crear una lista a partir del array con los valores separados por ;
    $lista = implode('; ', $numeros);

    echo $lista;
?>