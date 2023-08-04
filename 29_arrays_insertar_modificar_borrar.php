<?php 
    //array inicial
    $colores = ['azul', 'verde', 'rojo', 'negro'];

    echo '<pre>';
    print_r($colores);
    echo '</pre>';

    //añadir elementos al final del array
    array_push($colores, 'amarillo', 'gris');

    echo '<pre>';
    print_r($colores);
    echo '</pre>';

    //borrar el último elemento del array
    array_pop($colores);

    echo '<pre>';
    print_r($colores);
    echo '</pre>';

    //borrar cualquier elemento del array
    //          (array, indice, número de elementos a borrar)
    array_splice($colores, 0, 1);

    echo '<pre>';
    print_r($colores);
    echo '</pre>';

    //modificar cualquier elemento del array
    $colores[2] = 'rosa';

    echo '<pre>';
    print_r($colores);
    echo '</pre>';
?>