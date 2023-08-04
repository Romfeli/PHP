<?php 
    //Activar el uso de variables de sesión
    session_start();

    //guardar datos en la variable de sesión
    $_SESSION['personas'] = [
        [
            'nombre' => 'Virgil Solozzo',
            'direccion' => 'Av Corleone, 23',
            'poblacion' => 'New York City'
        ],
        [
            'nombre' => 'Tucco pacifico',
            'direccion' => 'av sergio leone',
            'poblacion' => 'Sad Hill'
        ]
    ];

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

   //mostrar el nombre de una de las personas
   echo $_SESSION['personas'][0]['nombre'];

?>