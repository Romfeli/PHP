<?php 
    //1.- función sin parámetros de entrada y que no devuelve ningún resultado
    saludar();

    function saludar() {
        echo 'Hola mundo';
    }

    echo '<hr>';

    //2.- función con un parámetro de entrada y que no devuelve ningún resultado
    saludarNombre('Arch Stanton');

    function saludarNombre($nom) {
        echo "Hola $nom";
    }

    echo '<hr>';

    //3.- función con dos parámetros de entrada y que no devuelve ningún resultado
    sumar(4, 6);

    function sumar($a, $b) {
        echo $a + $b;
    }

    echo '<hr>';

    //4.- función con dos parámetros de entrada y que devuelve un resultado
    $res = multiplicar(4, 5);

    echo $res;

    function multiplicar($n, $d) {
        $resultado = $n * $d;
        //echo $resultado;
        return $resultado;
    }

?>