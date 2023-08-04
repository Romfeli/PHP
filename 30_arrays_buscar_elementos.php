<?php 
    //array inicial 
    $colores = ['azul', 'verde', 'rojo', 'amarillo', 'negro'];

    echo '<pre>';
    print_r($colores);
    echo '</pre>';

    //buscar un elemento en el array y obtener su índice (si el elemento no existe se asignará el valor false a la variable $indice)
    $indice = array_search('blanco', $colores);

    echo $indice;
    echo '<hr>';

    //buscar un elemento en el array solo para saber si existe o no existe (si no existe lo añadimos)
    if (in_array('verde', $colores)) {
        echo 'el color existe';
    } else {
        echo 'el color no existe';
        //añadir el color al array
        array_push($colores, 'blanco');
    }

    echo '<pre>';
    print_r($colores);
    echo '</pre>';

    //buscar un elemento en el array (array_search) y, si existe, borrarlo (array_splice)
    //1. buscar el elemento y obtener su indice
    $indice = array_search('azul', $colores);
    
    echo "$indice <br>";

    //2. borrar el elemento si existe
    if ($indice !== false) {
        array_splice($colores, $indice, 1);
    }

    echo '<pre>';
    print_r($colores);
    echo '</pre>';
?>