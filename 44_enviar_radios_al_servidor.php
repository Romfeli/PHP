<?php 
    //inicializar variables
    $radio = 'S';

    //comprobar si llega el formulario
    if (isset($_POST['enviar'])) {
        //recuperar el radio seleccionado y, si no llega ningún valor, asignar uno por defecto
        $radio = $_POST['radio'] ?? 'S'; //asignación a variable condicionada

        /*
        //alternativa sin utilizar el operador ??
        if (isset($_POST['radio'])) {
            $radio = $_POST['radio'];
        } else {
            $radio = 'S';
        }
        */

        //mostar el valor por pantalla
        echo $radio;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        label {display: inline-block; width: 150px;}
    </style>
</head>
<body>
    <form action="#" method = 'post'>
        <label>Recoger en tienda</label>
        <span>Si</span>
        <input type='radio' name='radio' value='S' <?php if ($radio == 'S') {echo 'checked';} ?>>
        <span>No</span>
        <input type='radio' name='radio' value='N' <?php if($radio == 'N') {echo 'checked';} ?>>
        <br><br>
        <input type='submit' name='enviar'>
    </form>
</body>
</html>