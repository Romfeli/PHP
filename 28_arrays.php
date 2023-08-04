<?php 
    //          0  1   2   3   4   5
    $numeros = [5, 23, 11, 90, 12, 10];

    //acceder a un valor determinado
    echo $numeros[2];
    echo '<br>';

    $dias = array('lunes', 'martes', 'miercoles', 'jueves');
    echo $dias[3];
    echo '<br>';

    $mixto = [2, 'a', 4, 'h', true, 6, null];
    echo $mixto[4];
    echo '<br>';

    //array a partir de variables
    $a1 = 'a';
    $n1 = 4;
    $variables = [$a1, $n1]; // ['a', 4]

    $colores = ['rojo', 'azul', 'verde', 'gris', 'amarillo'];
    echo count($colores); //numero de elementos del array
    echo '<br>';

    //ejercicio: mostrar en pantalla el contenido del array $colores utilizando un bucle for
    for ($i = 0; $i < count($colores); $i++) {
        echo $colores[$i];
        echo '<br>';
    }

    echo '<hr>';

    //instrucción específica para recorrer un array (solo valores)
    foreach ($colores as $color) { //$color = $colores[0]
        echo $color;
        echo '<br>';
    }

    echo '<hr>';

    //instrucción especifica para recorrer un array mostrando las claves y los valores
    foreach ($colores as $clave => $color) {
        echo "$clave $color <br>";
    }

    echo '<hr>';

    //visualizar el contenido de un array de forma elegante
    echo '<pre>';
    print_r($colores);
    echo '</pre>';

?>