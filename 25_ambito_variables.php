<?php 
    //ambito o visibilidad de variables en php
    $a = 'a';

    echo $a; //veremos el contenido de la variable

    verVariables();

    echo $b; //variable no definida

    echo $a; //veremos el contenido de la variable

    function verVariables() {
        global $a; //calificador para poder utilizar una variable definida fuera de la función

        echo $a; //veremos el contenido de la variable

        $a = 'aa';

        $b = 'b';

        echo $b; //veremos el contenido de la variable
    }

?>