<?php 
    //activar variables de sesión
    session_start();

    echo '<pre>';
    print_r($_SESSION['personas']);
    echo '</pre>';

?>