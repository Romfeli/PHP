<?php 
    $personas = [
        [
            'nif' => '100A',
            'nombre' => 'Arch Stanton',
            'direccion' => 'Av Cementerio, 56',
            'poblacion' => 'Sad Hill' 
        ],
        [
            'nif' => '200B',
            'nombre' => 'Connie Corleone',
            'direccion' => 'Av Solozzo, 12',
            'poblacion' => 'New York City'
        ]
    ];

    echo '<pre>';
    print_r($personas);
    echo '</pre>';

    //acceder a una fila del array
    print_r($personas[1]);

    echo '<br>';
    
    //acceder al dato de una columna del array
    echo $personas[1]['nombre'];

    echo '<hr>';

    //mostrar en pantalla todos los valores del array
    //      array        dato
    foreach($personas as $datosPersona) {
        print_r($datosPersona);
        echo "<br>";
        //mostrar de forma individual cada uno de los datos de la persona (cada fila del array principal)
        foreach($datosPersona as $clave => $dato) {
            echo "$clave: $dato<br>";
        }
    }

    //modificar la dirección de la segunda persona
    $personas[1]['direccion'] = 'Av Clemenza, 78';

    echo '<pre>';
    print_r($personas);
    echo '</pre>';

    //borrar la primera persona
    //           array, indice a borrar, nº elementos a borrar
    array_splice($personas, 0, 1);

    echo '<pre>';
    print_r($personas);
    echo '</pre>';

    //
    //
?>