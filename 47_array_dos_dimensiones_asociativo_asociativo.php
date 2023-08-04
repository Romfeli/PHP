<?php 
    $personas = [
        '100A' => [
            'nombre' => 'Arch Stanton',
            'direccion' => 'Av Cementerio, 56',
            'poblacion' => 'Sad Hill' 
        ],
        '200B' => [
            'nombre' => 'Connie Corleone',
            'direccion' => 'Av Solozzo, 12',
            'poblacion' => 'New York City'
        ]
    ];

    echo '<pre>';
    print_r($personas);
    echo '</pre>';

    //acceder a una fila del array
    print_r($personas['200B']);

    echo '<br>';

    //acceder al dato de una columna del array
    echo $personas['200B']['nombre'];

    echo '<hr>';

    //mostrar en pantalla todos los valores del array
    //      array        clave   dato
    foreach($personas as $nif => $datosPersona) {
        echo "$nif<br>";
        print_r($datosPersona);
        echo "<br>";
        //mostrar de forma individual cada uno de los datos de la persona (cada fila del array principal)
        foreach($datosPersona as $clave => $dato) {
            echo "$clave: $dato<br>";
        }
    }

    //modificar la dirección de la persona con nif 200B. 
    //Si la clave de fila no existe se creará una fina nueva
    //Si la clave de columna no existe se creará una columna nueva
    $personas['200B']['direccion'] = 'Av Clemenza, 78';

    echo '<pre>';
    print_r($personas);
    echo '</pre>';

    //borrar la persona con nif 100A
    unset($personas['100A']);

    echo '<pre>';
    print_r($personas);
    echo '</pre>';
?>