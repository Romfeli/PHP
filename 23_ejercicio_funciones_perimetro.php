<?php 
    //inicializar las variables que utilizemos en el formulario
    $perimetro = null;
    $ancho = $alto = 1;

    //comprobar si se ha pulsado el botón (atributo name calcular)
    if (isset($_POST['calcular'])) {
        //recuperar los datos del formulario (ancho y alto)
        $ancho = $_POST['ancho'];
        $alto  = $_POST['alto'];

        //validar que ancho y alto lleguen informados
        //if (is_numeric($ancho) && is_numeric($alto)) {
            //llamar a la función que calcula el perímetro y recoger el resultado en una variable
            $perimetro = perimetro($ancho, $alto);
        //}
    }

    //definir la función de cálculo de perímetro
    function perimetro($an, $al) {
        $resultado = $an * 2 + $al * 2;

        return $resultado;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        div {
            background-color: blue;
            width: <?php echo $ancho.'px' ?>;
            height: <?php echo $alto."px" ?>;
        }
    </style>
</head>
<body>
    <form action="#" method='post'>
        <label>ancho</label><input type='number' name='ancho' value="<?php echo $ancho ?>">
        <label>alto</label><input type='number' name='alto' value = "<?php echo $alto?>">
        <input type='submit' name='calcular' value='Calcular'>
    </form>
    <p>El perímetro es: <?php echo $perimetro ?></p>
    <div></div>
</body>
</html>