<?php 
    //inicializar variables
    $checks = [];
    
    //comprobar si llega el formulario
    if (isset($_POST['enviar'])) {
        //recuperar los checks seleccionados y, si no llega ningún valor, asignar un array vacio
        $checks = $_POST['check'] ?? [];

        //mostrar los valores por pantalla
        print_r($checks);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        label {display: inline-block; width: 100px;}
    </style>
</head>
<body>
    <form action="#" method = 'post'>
        <label>Aficiones:</label>
        <br>
        <span>Lectura</span>
        <input type='checkbox' name='check[]' value='LE' <?php if (in_array('LE', $checks)) {echo 'checked';} ?>>
        <span>Música</span>
        <input type='checkbox' name='check[]' value='MU' <?php if (in_array('MU', $checks)) {echo 'checked';} ?>>
        <span>Cine</span>
        <input type='checkbox' name='check[]' value='CI' <?php if (in_array('CI', $checks)) {echo 'checked';} ?>>
        <span>Viajar</span>
        <input type='checkbox' name='check[]' value='VI' <?php if (in_array('VI', $checks)) {echo 'checked';} ?>>
        <span>Cocina</span>
        <input type='checkbox' name='check[]' value='CO' <?php if (in_array('CO', $checks)) {echo 'checked';} ?>>
        <br><br>
        <input type='submit' name='enviar'>
    </form>
</body>
</html>