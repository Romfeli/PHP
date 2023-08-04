<?php 

    nombreFuncion(1, 2, 3);
    nombreFuncion(5, 6);

    function nombreFuncion($a, $b, $c = null) {
        echo "$a $b $c <br>";
    }

?>