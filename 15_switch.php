<?php 
    $ciudad = 'Almeria';

    //evaluar el contenido de la variable ciudad 
    //DRY Don't Repeat Yourself
    switch ($ciudad) {
        case 'Barcelona':
            echo 'Cataluña';
            break;
        case 'Sevilla':
        case 'Granada':
        case 'Almeria':
            echo 'Andalucia';
            break;
        default: 
            //si el valor de la variable no es ninguno de los anteriores
            echo 'Ciudad no contemplada';
    }

?>