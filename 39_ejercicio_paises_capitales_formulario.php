<?php 
    //array de paises-capitales
    $paises['Francia']    = 'París';
    $paises['Ecuador']    = 'Quito';
    $paises['Italia']     = 'Roma';
    $paises['Alemania']   = 'Berlin';
    $paises['Argentina']  = 'Buenos Aires';
    $paises['Portugal']   = 'Lisboa';
    $paises['Grecia']     = 'Atenas';

    //incializar las variables que intervienen en el formulario
    $pais = $capital = null;

    //detectar cuando llega el formulario al servidor
    if (isset($_POST['capital'])) {
        //recuperar la capital del formulario
        $capital = $_POST['capital'];

        //buscar la capital en el array
        //                   dato      array
        $pais = array_search($capital, $paises);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Paises capitales</title>
</head>
<body>
    <form action="#" method='post'>
        <select name="capital" onchange="this.form.submit()">
            <option disabled selected>Seleccione una capital</option>
            <!--option>París</option>
            <option>Quito</option>
            <option>Roma</option>
            <option>Berlin</option>
            <option>Buenos Aires</option>
            <option>Lisboa</option-->
            <?php 
                foreach($paises as $cap) {
                    //añadir el atributo selected a la opción que corresponda con la capital seleccionada por el usuario
                    if ($capital == $cap) {
                        echo "<option selected>$cap</option>";
                    } else {
                        echo "<option>$cap</option>";
                    }
                }
            ?>
        </select>
        <input type="text" disabled value="<?php echo $pais; ?>">
        <!--input type="submit" name='enviar'-->
    </form>
</body>
</html>